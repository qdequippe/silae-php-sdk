<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeMatriculesDupliquesDansDomaineResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeMatriculesDupliquesDansDomaineResult
     */
    private $SWS_ListeMatriculesDupliquesDansDomaineResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeMatriculesDupliquesDansDomaineResult
     */
    public function getSWS_ListeMatriculesDupliquesDansDomaineResult()
    {
        return $this->SWS_ListeMatriculesDupliquesDansDomaineResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeMatriculesDupliquesDansDomaineResult $SWS_ListeMatriculesDupliquesDansDomaineResult
     * @return SWSListeMatriculesDupliquesDansDomaineResponse
     */
    public function withSWS_ListeMatriculesDupliquesDansDomaineResult($SWS_ListeMatriculesDupliquesDansDomaineResult)
    {
        $new = clone $this;
        $new->SWS_ListeMatriculesDupliquesDansDomaineResult = $SWS_ListeMatriculesDupliquesDansDomaineResult;

        return $new;
    }
}

