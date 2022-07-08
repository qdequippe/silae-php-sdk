<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSControlerBulletinsPeriodeResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSControlerBulletinsPeriodeResult
     */
    private $SWS_ControlerBulletinsPeriodeResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSControlerBulletinsPeriodeResult
     */
    public function getSWS_ControlerBulletinsPeriodeResult()
    {
        return $this->SWS_ControlerBulletinsPeriodeResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSControlerBulletinsPeriodeResult $SWS_ControlerBulletinsPeriodeResult
     * @return SWSControlerBulletinsPeriodeResponse
     */
    public function withSWS_ControlerBulletinsPeriodeResult($SWS_ControlerBulletinsPeriodeResult)
    {
        $new = clone $this;
        $new->SWS_ControlerBulletinsPeriodeResult = $SWS_ControlerBulletinsPeriodeResult;

        return $new;
    }
}

