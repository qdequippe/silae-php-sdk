<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalariesStockVarResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalariesStockVarResult
     */
    private $SWS_SalariesStockVarResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalariesStockVarResult
     */
    public function getSWS_SalariesStockVarResult()
    {
        return $this->SWS_SalariesStockVarResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalariesStockVarResult $SWS_SalariesStockVarResult
     * @return SWSSalariesStockVarResponse
     */
    public function withSWS_SalariesStockVarResult($SWS_SalariesStockVarResult)
    {
        $new = clone $this;
        $new->SWS_SalariesStockVarResult = $SWS_SalariesStockVarResult;

        return $new;
    }
}

