<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSDocQueryResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSDocResult
     */
    private $SWS_DocQueryResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSDocResult
     */
    public function getSWS_DocQueryResult()
    {
        return $this->SWS_DocQueryResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSDocResult $SWS_DocQueryResult
     * @return SWSDocQueryResponse
     */
    public function withSWS_DocQueryResult($SWS_DocQueryResult)
    {
        $new = clone $this;
        $new->SWS_DocQueryResult = $SWS_DocQueryResult;

        return $new;
    }
}

