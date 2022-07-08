<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSCreationSalarieEmploisResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSCreationSalarieEmploisResult
     */
    private $SWS_CreationSalarieEmploisResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSCreationSalarieEmploisResult
     */
    public function getSWS_CreationSalarieEmploisResult()
    {
        return $this->SWS_CreationSalarieEmploisResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSCreationSalarieEmploisResult $SWS_CreationSalarieEmploisResult
     * @return SWSCreationSalarieEmploisResponse
     */
    public function withSWS_CreationSalarieEmploisResult($SWS_CreationSalarieEmploisResult)
    {
        $new = clone $this;
        $new->SWS_CreationSalarieEmploisResult = $SWS_CreationSalarieEmploisResult;

        return $new;
    }
}

