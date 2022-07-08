<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSpectacleCreationResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSpectacleCreationResult
     */
    private $SWS_SpectacleCreationResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSpectacleCreationResult
     */
    public function getSWS_SpectacleCreationResult()
    {
        return $this->SWS_SpectacleCreationResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSpectacleCreationResult $SWS_SpectacleCreationResult
     * @return SWSSpectacleCreationResponse
     */
    public function withSWS_SpectacleCreationResult($SWS_SpectacleCreationResult)
    {
        $new = clone $this;
        $new->SWS_SpectacleCreationResult = $SWS_SpectacleCreationResult;

        return $new;
    }
}

