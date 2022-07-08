<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalariesDUEResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalariesDUEResult
     */
    private $SWS_SalariesDUEResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalariesDUEResult
     */
    public function getSWS_SalariesDUEResult()
    {
        return $this->SWS_SalariesDUEResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalariesDUEResult $SWS_SalariesDUEResult
     * @return SWSSalariesDUEResponse
     */
    public function withSWS_SalariesDUEResult($SWS_SalariesDUEResult)
    {
        $new = clone $this;
        $new->SWS_SalariesDUEResult = $SWS_SalariesDUEResult;

        return $new;
    }
}

