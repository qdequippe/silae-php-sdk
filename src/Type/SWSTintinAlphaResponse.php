<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSTintinAlphaResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult
     */
    private $SWS_TintinAlphaResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult
     */
    public function getSWS_TintinAlphaResult()
    {
        return $this->SWS_TintinAlphaResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult $SWS_TintinAlphaResult
     * @return SWSTintinAlphaResponse
     */
    public function withSWS_TintinAlphaResult($SWS_TintinAlphaResult)
    {
        $new = clone $this;
        $new->SWS_TintinAlphaResult = $SWS_TintinAlphaResult;

        return $new;
    }
}

