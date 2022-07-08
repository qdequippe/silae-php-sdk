<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeSalarieEmploisResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeSalarieEmploisResult
     */
    private $SWS_ListeSalarieEmploisResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeSalarieEmploisResult
     */
    public function getSWS_ListeSalarieEmploisResult()
    {
        return $this->SWS_ListeSalarieEmploisResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeSalarieEmploisResult $SWS_ListeSalarieEmploisResult
     * @return SWSListeSalarieEmploisResponse
     */
    public function withSWS_ListeSalarieEmploisResult($SWS_ListeSalarieEmploisResult)
    {
        $new = clone $this;
        $new->SWS_ListeSalarieEmploisResult = $SWS_ListeSalarieEmploisResult;

        return $new;
    }
}

