<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSRechercheDeclarationEvenementielleResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRechercheDeclarationEvenementielleResult
     */
    private $SWS_RechercheDeclarationEvenementielleResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRechercheDeclarationEvenementielleResult
     */
    public function getSWS_RechercheDeclarationEvenementielleResult()
    {
        return $this->SWS_RechercheDeclarationEvenementielleResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRechercheDeclarationEvenementielleResult $SWS_RechercheDeclarationEvenementielleResult
     * @return SWSRechercheDeclarationEvenementielleResponse
     */
    public function withSWS_RechercheDeclarationEvenementielleResult($SWS_RechercheDeclarationEvenementielleResult)
    {
        $new = clone $this;
        $new->SWS_RechercheDeclarationEvenementielleResult = $SWS_RechercheDeclarationEvenementielleResult;

        return $new;
    }
}

