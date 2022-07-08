<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeSalariesExternesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeSalariesExternesResult
     */
    private $SWS_ListeSalariesExternesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeSalariesExternesResult
     */
    public function getSWS_ListeSalariesExternesResult()
    {
        return $this->SWS_ListeSalariesExternesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeSalariesExternesResult $SWS_ListeSalariesExternesResult
     * @return SWSListeSalariesExternesResponse
     */
    public function withSWS_ListeSalariesExternesResult($SWS_ListeSalariesExternesResult)
    {
        $new = clone $this;
        $new->SWS_ListeSalariesExternesResult = $SWS_ListeSalariesExternesResult;

        return $new;
    }
}

