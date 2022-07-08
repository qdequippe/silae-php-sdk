<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieRecupererPeriodeDernierBulletinCalculeResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieRecupererPeriodeDernierBulletinCalculeResult
     */
    private $SWS_SalarieRecupererPeriodeDernierBulletinCalculeResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieRecupererPeriodeDernierBulletinCalculeResult
     */
    public function getSWS_SalarieRecupererPeriodeDernierBulletinCalculeResult()
    {
        return $this->SWS_SalarieRecupererPeriodeDernierBulletinCalculeResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieRecupererPeriodeDernierBulletinCalculeResult $SWS_SalarieRecupererPeriodeDernierBulletinCalculeResult
     * @return SWSSalarieRecupererPeriodeDernierBulletinCalculeResponse
     */
    public function withSWS_SalarieRecupererPeriodeDernierBulletinCalculeResult($SWS_SalarieRecupererPeriodeDernierBulletinCalculeResult)
    {
        $new = clone $this;
        $new->SWS_SalarieRecupererPeriodeDernierBulletinCalculeResult = $SWS_SalarieRecupererPeriodeDernierBulletinCalculeResult;

        return $new;
    }
}

