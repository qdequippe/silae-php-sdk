<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEditionSoldeDeReposResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    private $SWS_EditionSoldeDeReposResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    public function getSWS_EditionSoldeDeReposResult()
    {
        return $this->SWS_EditionSoldeDeReposResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult $SWS_EditionSoldeDeReposResult
     * @return SWSEditionSoldeDeReposResponse
     */
    public function withSWS_EditionSoldeDeReposResult($SWS_EditionSoldeDeReposResult)
    {
        $new = clone $this;
        $new->SWS_EditionSoldeDeReposResult = $SWS_EditionSoldeDeReposResult;

        return $new;
    }
}

