<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence>
 */
class ArrayOfCPAISWSUtilisateurSalarieAbsence implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence
     */
    private $CPAISWSUtilisateurSalarieAbsence;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSUtilisateurSalarieAbsence) ? $this->CPAISWSUtilisateurSalarieAbsence : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence $CPAISWSUtilisateurSalarieAbsence
     * @return ArrayOfCPAISWSUtilisateurSalarieAbsence
     */
    public function withCPAISWSUtilisateurSalarieAbsence($CPAISWSUtilisateurSalarieAbsence)
    {
        $new = clone $this;
        $new->CPAISWSUtilisateurSalarieAbsence = $CPAISWSUtilisateurSalarieAbsence;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence
     */
    public function getCPAISWSUtilisateurSalarieAbsence()
    {
        return $this->CPAISWSUtilisateurSalarieAbsence;
    }
}

