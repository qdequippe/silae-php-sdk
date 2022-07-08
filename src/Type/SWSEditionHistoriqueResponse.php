<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEditionHistoriqueResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEditionHistoriqueResult
     */
    private $SWS_EditionHistoriqueResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEditionHistoriqueResult
     */
    public function getSWS_EditionHistoriqueResult()
    {
        return $this->SWS_EditionHistoriqueResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEditionHistoriqueResult $SWS_EditionHistoriqueResult
     * @return SWSEditionHistoriqueResponse
     */
    public function withSWS_EditionHistoriqueResult($SWS_EditionHistoriqueResult)
    {
        $new = clone $this;
        $new->SWS_EditionHistoriqueResult = $SWS_EditionHistoriqueResult;

        return $new;
    }
}

