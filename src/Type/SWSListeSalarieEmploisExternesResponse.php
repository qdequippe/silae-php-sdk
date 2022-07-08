<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeSalarieEmploisExternesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeSalarieEmploisExternesResult
     */
    private $SWS_ListeSalarieEmploisExternesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeSalarieEmploisExternesResult
     */
    public function getSWS_ListeSalarieEmploisExternesResult()
    {
        return $this->SWS_ListeSalarieEmploisExternesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeSalarieEmploisExternesResult $SWS_ListeSalarieEmploisExternesResult
     * @return SWSListeSalarieEmploisExternesResponse
     */
    public function withSWS_ListeSalarieEmploisExternesResult($SWS_ListeSalarieEmploisExternesResult)
    {
        $new = clone $this;
        $new->SWS_ListeSalarieEmploisExternesResult = $SWS_ListeSalarieEmploisExternesResult;

        return $new;
    }
}

