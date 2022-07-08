<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExcelChercheValeurPaieSalarieV2Response implements ResultInterface
{
    /**
     * @var string
     */
    private $SWS_ExcelChercheValeurPaieSalarieV2Result;

    /**
     * @return string
     */
    public function getSWS_ExcelChercheValeurPaieSalarieV2Result()
    {
        return $this->SWS_ExcelChercheValeurPaieSalarieV2Result;
    }

    /**
     * @param string $SWS_ExcelChercheValeurPaieSalarieV2Result
     * @return SWSExcelChercheValeurPaieSalarieV2Response
     */
    public function withSWS_ExcelChercheValeurPaieSalarieV2Result($SWS_ExcelChercheValeurPaieSalarieV2Result)
    {
        $new = clone $this;
        $new->SWS_ExcelChercheValeurPaieSalarieV2Result = $SWS_ExcelChercheValeurPaieSalarieV2Result;

        return $new;
    }
}

