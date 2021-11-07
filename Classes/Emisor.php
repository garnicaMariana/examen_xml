<?php

class Emisor extends XML
{

    public $regimenFiscal;

    //El constructor debe ser un método público
    public function __construct()
    {
        $this->atributos = [];
        $this->atributos['Rfc'] = '';
        $this->atributos['Nombre'] = '';
        $this->atributos['RegimenFiscal'] = '';
        $this->rules = [];
        $this->rules['Rfc'] = 'R';
        $this->rules['Nombre'] = 'R';
        $this->rules['RegimenFiscal'] = 'R';
    }

    public function getNode()
    {
        $xml = '<cfdi:Emisor ' . $this->getAttributes() . ' />';
        return $xml;
    }
}
