<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSoldeReposResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSoldeReposResult
     */
    private $SWS_SoldeReposResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSoldeReposResult
     */
    public function getSWS_SoldeReposResult()
    {
        return $this->SWS_SoldeReposResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSoldeReposResult $SWS_SoldeReposResult
     * @return SWSSoldeReposResponse
     */
    public function withSWS_SoldeReposResult($SWS_SoldeReposResult)
    {
        $new = clone $this;
        $new->SWS_SoldeReposResult = $SWS_SoldeReposResult;

        return $new;
    }
}

