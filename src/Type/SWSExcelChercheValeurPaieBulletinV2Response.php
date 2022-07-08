<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExcelChercheValeurPaieBulletinV2Response implements ResultInterface
{
    /**
     * @var string
     */
    private $SWS_ExcelChercheValeurPaieBulletinV2Result;

    /**
     * @return string
     */
    public function getSWS_ExcelChercheValeurPaieBulletinV2Result()
    {
        return $this->SWS_ExcelChercheValeurPaieBulletinV2Result;
    }

    /**
     * @param string $SWS_ExcelChercheValeurPaieBulletinV2Result
     * @return SWSExcelChercheValeurPaieBulletinV2Response
     */
    public function withSWS_ExcelChercheValeurPaieBulletinV2Result($SWS_ExcelChercheValeurPaieBulletinV2Result)
    {
        $new = clone $this;
        $new->SWS_ExcelChercheValeurPaieBulletinV2Result = $SWS_ExcelChercheValeurPaieBulletinV2Result;

        return $new;
    }
}

