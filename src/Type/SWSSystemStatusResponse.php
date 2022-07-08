<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSystemStatusResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSystemStatusResult
     */
    private $SWS_SystemStatusResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSystemStatusResult
     */
    public function getSWS_SystemStatusResult()
    {
        return $this->SWS_SystemStatusResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSystemStatusResult $SWS_SystemStatusResult
     * @return SWSSystemStatusResponse
     */
    public function withSWS_SystemStatusResult($SWS_SystemStatusResult)
    {
        $new = clone $this;
        $new->SWS_SystemStatusResult = $SWS_SystemStatusResult;

        return $new;
    }
}

