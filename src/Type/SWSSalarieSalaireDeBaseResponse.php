<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieSalaireDeBaseResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieSalaireDeBaseResult
     */
    private $SWS_SalarieSalaireDeBaseResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieSalaireDeBaseResult
     */
    public function getSWS_SalarieSalaireDeBaseResult()
    {
        return $this->SWS_SalarieSalaireDeBaseResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieSalaireDeBaseResult $SWS_SalarieSalaireDeBaseResult
     * @return SWSSalarieSalaireDeBaseResponse
     */
    public function withSWS_SalarieSalaireDeBaseResult($SWS_SalarieSalaireDeBaseResult)
    {
        $new = clone $this;
        $new->SWS_SalarieSalaireDeBaseResult = $SWS_SalarieSalaireDeBaseResult;

        return $new;
    }
}

