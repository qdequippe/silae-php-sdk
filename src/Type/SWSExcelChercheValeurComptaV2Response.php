<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExcelChercheValeurComptaV2Response implements ResultInterface
{
    /**
     * @var string
     */
    private $SWS_ExcelChercheValeurComptaV2Result;

    /**
     * @return string
     */
    public function getSWS_ExcelChercheValeurComptaV2Result()
    {
        return $this->SWS_ExcelChercheValeurComptaV2Result;
    }

    /**
     * @param string $SWS_ExcelChercheValeurComptaV2Result
     * @return SWSExcelChercheValeurComptaV2Response
     */
    public function withSWS_ExcelChercheValeurComptaV2Result($SWS_ExcelChercheValeurComptaV2Result)
    {
        $new = clone $this;
        $new->SWS_ExcelChercheValeurComptaV2Result = $SWS_ExcelChercheValeurComptaV2Result;

        return $new;
    }
}

