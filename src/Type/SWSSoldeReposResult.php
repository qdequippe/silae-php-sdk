<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSoldeReposResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeRepos
     */
    private $SoldeRepos;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeRepos
     */
    public function getSoldeRepos()
    {
        return $this->SoldeRepos;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeRepos $SoldeRepos
     * @return SWSSoldeReposResult
     */
    public function withSoldeRepos($SoldeRepos)
    {
        $new = clone $this;
        $new->SoldeRepos = $SoldeRepos;

        return $new;
    }
}

