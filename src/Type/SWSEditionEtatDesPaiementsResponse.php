<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEditionEtatDesPaiementsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    private $SWS_EditionEtatDesPaiementsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    public function getSWS_EditionEtatDesPaiementsResult()
    {
        return $this->SWS_EditionEtatDesPaiementsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult $SWS_EditionEtatDesPaiementsResult
     * @return SWSEditionEtatDesPaiementsResponse
     */
    public function withSWS_EditionEtatDesPaiementsResult($SWS_EditionEtatDesPaiementsResult)
    {
        $new = clone $this;
        $new->SWS_EditionEtatDesPaiementsResult = $SWS_EditionEtatDesPaiementsResult;

        return $new;
    }
}

