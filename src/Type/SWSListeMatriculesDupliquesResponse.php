<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeMatriculesDupliquesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeMatriculesDupliquesResult
     */
    private $SWS_ListeMatriculesDupliquesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeMatriculesDupliquesResult
     */
    public function getSWS_ListeMatriculesDupliquesResult()
    {
        return $this->SWS_ListeMatriculesDupliquesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeMatriculesDupliquesResult $SWS_ListeMatriculesDupliquesResult
     * @return SWSListeMatriculesDupliquesResponse
     */
    public function withSWS_ListeMatriculesDupliquesResult($SWS_ListeMatriculesDupliquesResult)
    {
        $new = clone $this;
        $new->SWS_ListeMatriculesDupliquesResult = $SWS_ListeMatriculesDupliquesResult;

        return $new;
    }
}

