<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExtraSalarieCalculerBulletinResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieCalculerBulletinResult
     */
    private $SWS_ExtraSalarieCalculerBulletinResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieCalculerBulletinResult
     */
    public function getSWS_ExtraSalarieCalculerBulletinResult()
    {
        return $this->SWS_ExtraSalarieCalculerBulletinResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieCalculerBulletinResult $SWS_ExtraSalarieCalculerBulletinResult
     * @return SWSExtraSalarieCalculerBulletinResponse
     */
    public function withSWS_ExtraSalarieCalculerBulletinResult($SWS_ExtraSalarieCalculerBulletinResult)
    {
        $new = clone $this;
        $new->SWS_ExtraSalarieCalculerBulletinResult = $SWS_ExtraSalarieCalculerBulletinResult;

        return $new;
    }
}

