<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExcelChercheValeurPaieEtablissementV2Response implements ResultInterface
{
    /**
     * @var string
     */
    private $SWS_ExcelChercheValeurPaieEtablissementV2Result;

    /**
     * @return string
     */
    public function getSWS_ExcelChercheValeurPaieEtablissementV2Result()
    {
        return $this->SWS_ExcelChercheValeurPaieEtablissementV2Result;
    }

    /**
     * @param string $SWS_ExcelChercheValeurPaieEtablissementV2Result
     * @return SWSExcelChercheValeurPaieEtablissementV2Response
     */
    public function withSWS_ExcelChercheValeurPaieEtablissementV2Result($SWS_ExcelChercheValeurPaieEtablissementV2Result)
    {
        $new = clone $this;
        $new->SWS_ExcelChercheValeurPaieEtablissementV2Result = $SWS_ExcelChercheValeurPaieEtablissementV2Result;

        return $new;
    }
}

