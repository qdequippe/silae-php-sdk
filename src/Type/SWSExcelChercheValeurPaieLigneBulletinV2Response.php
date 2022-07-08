<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExcelChercheValeurPaieLigneBulletinV2Response implements ResultInterface
{
    /**
     * @var string
     */
    private $SWS_ExcelChercheValeurPaieLigneBulletinV2Result;

    /**
     * @return string
     */
    public function getSWS_ExcelChercheValeurPaieLigneBulletinV2Result()
    {
        return $this->SWS_ExcelChercheValeurPaieLigneBulletinV2Result;
    }

    /**
     * @param string $SWS_ExcelChercheValeurPaieLigneBulletinV2Result
     * @return SWSExcelChercheValeurPaieLigneBulletinV2Response
     */
    public function withSWS_ExcelChercheValeurPaieLigneBulletinV2Result($SWS_ExcelChercheValeurPaieLigneBulletinV2Result)
    {
        $new = clone $this;
        $new->SWS_ExcelChercheValeurPaieLigneBulletinV2Result = $SWS_ExcelChercheValeurPaieLigneBulletinV2Result;

        return $new;
    }
}

