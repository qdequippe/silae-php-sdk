<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureTaxeTransportResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSTaxeTransport
     */
    private $TaxeTransport;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSTaxeTransport
     */
    public function getTaxeTransport()
    {
        return $this->TaxeTransport;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSTaxeTransport $TaxeTransport
     * @return SWSLectureTaxeTransportResult
     */
    public function withTaxeTransport($TaxeTransport)
    {
        $new = clone $this;
        $new->TaxeTransport = $TaxeTransport;

        return $new;
    }
}

