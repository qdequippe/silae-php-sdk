<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieBulletinEnteteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinEnteteResult
     */
    private $SWS_SalarieBulletinEnteteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinEnteteResult
     */
    public function getSWS_SalarieBulletinEnteteResult()
    {
        return $this->SWS_SalarieBulletinEnteteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinEnteteResult $SWS_SalarieBulletinEnteteResult
     * @return SWSSalarieBulletinEnteteResponse
     */
    public function withSWS_SalarieBulletinEnteteResult($SWS_SalarieBulletinEnteteResult)
    {
        $new = clone $this;
        $new->SWS_SalarieBulletinEnteteResult = $SWS_SalarieBulletinEnteteResult;

        return $new;
    }
}

