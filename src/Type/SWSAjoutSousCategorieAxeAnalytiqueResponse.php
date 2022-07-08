<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAjoutSousCategorieAxeAnalytiqueResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAjoutSousCategorieAxeAnalytiqueResult
     */
    private $SWS_AjoutSousCategorieAxeAnalytiqueResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAjoutSousCategorieAxeAnalytiqueResult
     */
    public function getSWS_AjoutSousCategorieAxeAnalytiqueResult()
    {
        return $this->SWS_AjoutSousCategorieAxeAnalytiqueResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAjoutSousCategorieAxeAnalytiqueResult $SWS_AjoutSousCategorieAxeAnalytiqueResult
     * @return SWSAjoutSousCategorieAxeAnalytiqueResponse
     */
    public function withSWS_AjoutSousCategorieAxeAnalytiqueResult($SWS_AjoutSousCategorieAxeAnalytiqueResult)
    {
        $new = clone $this;
        $new->SWS_AjoutSousCategorieAxeAnalytiqueResult = $SWS_AjoutSousCategorieAxeAnalytiqueResult;

        return $new;
    }
}

