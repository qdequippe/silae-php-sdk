<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieBulletinLignesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinLignesResult
     */
    private $SWS_SalarieBulletinLignesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinLignesResult
     */
    public function getSWS_SalarieBulletinLignesResult()
    {
        return $this->SWS_SalarieBulletinLignesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinLignesResult $SWS_SalarieBulletinLignesResult
     * @return SWSSalarieBulletinLignesResponse
     */
    public function withSWS_SalarieBulletinLignesResult($SWS_SalarieBulletinLignesResult)
    {
        $new = clone $this;
        $new->SWS_SalarieBulletinLignesResult = $SWS_SalarieBulletinLignesResult;

        return $new;
    }
}

