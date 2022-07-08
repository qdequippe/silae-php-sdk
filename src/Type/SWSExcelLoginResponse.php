<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExcelLoginResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $SWS_ExcelLoginResult;

    /**
     * @return string
     */
    public function getSWS_ExcelLoginResult()
    {
        return $this->SWS_ExcelLoginResult;
    }

    /**
     * @param string $SWS_ExcelLoginResult
     * @return SWSExcelLoginResponse
     */
    public function withSWS_ExcelLoginResult($SWS_ExcelLoginResult)
    {
        $new = clone $this;
        $new->SWS_ExcelLoginResult = $SWS_ExcelLoginResult;

        return $new;
    }
}

