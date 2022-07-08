<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSCreationClientResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSCreationClientResult
     */
    private $SWS_CreationClientResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSCreationClientResult
     */
    public function getSWS_CreationClientResult()
    {
        return $this->SWS_CreationClientResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSCreationClientResult $SWS_CreationClientResult
     * @return SWSCreationClientResponse
     */
    public function withSWS_CreationClientResult($SWS_CreationClientResult)
    {
        $new = clone $this;
        $new->SWS_CreationClientResult = $SWS_CreationClientResult;

        return $new;
    }
}

