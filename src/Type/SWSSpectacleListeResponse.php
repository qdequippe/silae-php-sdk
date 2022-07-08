<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSpectacleListeResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSpectacleListeResult
     */
    private $SWS_SpectacleListeResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSpectacleListeResult
     */
    public function getSWS_SpectacleListeResult()
    {
        return $this->SWS_SpectacleListeResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSpectacleListeResult $SWS_SpectacleListeResult
     * @return SWSSpectacleListeResponse
     */
    public function withSWS_SpectacleListeResult($SWS_SpectacleListeResult)
    {
        $new = clone $this;
        $new->SWS_SpectacleListeResult = $SWS_SpectacleListeResult;

        return $new;
    }
}

