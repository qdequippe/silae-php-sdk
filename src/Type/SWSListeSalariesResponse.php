<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeSalariesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeSalariesResult
     */
    private $SWS_ListeSalariesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeSalariesResult
     */
    public function getSWS_ListeSalariesResult()
    {
        return $this->SWS_ListeSalariesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeSalariesResult $SWS_ListeSalariesResult
     * @return SWSListeSalariesResponse
     */
    public function withSWS_ListeSalariesResult($SWS_ListeSalariesResult)
    {
        $new = clone $this;
        $new->SWS_ListeSalariesResult = $SWS_ListeSalariesResult;

        return $new;
    }
}

