<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExcelChercheValeurPaieClientV2Response implements ResultInterface
{
    /**
     * @var string
     */
    private $SWS_ExcelChercheValeurPaieClientV2Result;

    /**
     * @return string
     */
    public function getSWS_ExcelChercheValeurPaieClientV2Result()
    {
        return $this->SWS_ExcelChercheValeurPaieClientV2Result;
    }

    /**
     * @param string $SWS_ExcelChercheValeurPaieClientV2Result
     * @return SWSExcelChercheValeurPaieClientV2Response
     */
    public function withSWS_ExcelChercheValeurPaieClientV2Result($SWS_ExcelChercheValeurPaieClientV2Result)
    {
        $new = clone $this;
        $new->SWS_ExcelChercheValeurPaieClientV2Result = $SWS_ExcelChercheValeurPaieClientV2Result;

        return $new;
    }
}

