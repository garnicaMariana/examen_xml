<?php

include_once './Classes/XML.php';
include_once './Classes/Comprobante.php';
include_once './Classes/Emisor.php';

class CFDI
{
    public $comprobante;
    public $xml;
    public $emisor;     //Variable sin declarar


    public function __construct()
    {
        $this->comprobante = new Comprobante();
        $this->emisor = new Emisor();
    }


    //Método con static solo de clase por lo que no podremos llamarlo desde fuera
    public function getNode()
    {
        $this->xml = '<?xml version="1.0" encoding="UTF-8"?> <cfdi:Comprobante  xmlns:cfdi="http://www.sat.gob.mx/cfd/3"  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sat.gob.mx/cfd/3 http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd" ' . $this->comprobante->getAttributes() . ' >';
        $this->xml .= $this->emisor->getNode(); 
        $this->xml .= '</cfdi:Comprobante>';
        return $this->xml;
    }
}