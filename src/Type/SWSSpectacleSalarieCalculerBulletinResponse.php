<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSpectacleSalarieCalculerBulletinResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieCalculerBulletinResult
     */
    private $SWS_SpectacleSalarieCalculerBulletinResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieCalculerBulletinResult
     */
    public function getSWS_SpectacleSalarieCalculerBulletinResult()
    {
        return $this->SWS_SpectacleSalarieCalculerBulletinResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieCalculerBulletinResult $SWS_SpectacleSalarieCalculerBulletinResult
     * @return SWSSpectacleSalarieCalculerBulletinResponse
     */
    public function withSWS_SpectacleSalarieCalculerBulletinResult($SWS_SpectacleSalarieCalculerBulletinResult)
    {
        $new = clone $this;
        $new->SWS_SpectacleSalarieCalculerBulletinResult = $SWS_SpectacleSalarieCalculerBulletinResult;

        return $new;
    }
}

