<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalariesBulletinsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalariesBulletinsResult
     */
    private $SWS_SalariesBulletinsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalariesBulletinsResult
     */
    public function getSWS_SalariesBulletinsResult()
    {
        return $this->SWS_SalariesBulletinsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalariesBulletinsResult $SWS_SalariesBulletinsResult
     * @return SWSSalariesBulletinsResponse
     */
    public function withSWS_SalariesBulletinsResult($SWS_SalariesBulletinsResult)
    {
        $new = clone $this;
        $new->SWS_SalariesBulletinsResult = $SWS_SalariesBulletinsResult;

        return $new;
    }
}

