<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsenceSimple>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsenceSimple>
 */
class ArrayOfCPAISWSUtilisateurSalarieAbsenceSimple implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsenceSimple
     */
    private $CPAISWSUtilisateurSalarieAbsenceSimple;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsenceSimple[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsenceSimple>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsenceSimple>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSUtilisateurSalarieAbsenceSimple) ? $this->CPAISWSUtilisateurSalarieAbsenceSimple : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsenceSimple $CPAISWSUtilisateurSalarieAbsenceSimple
     * @return ArrayOfCPAISWSUtilisateurSalarieAbsenceSimple
     */
    public function withCPAISWSUtilisateurSalarieAbsenceSimple($CPAISWSUtilisateurSalarieAbsenceSimple)
    {
        $new = clone $this;
        $new->CPAISWSUtilisateurSalarieAbsenceSimple = $CPAISWSUtilisateurSalarieAbsenceSimple;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsenceSimple
     */
    public function getCPAISWSUtilisateurSalarieAbsenceSimple()
    {
        return $this->CPAISWSUtilisateurSalarieAbsenceSimple;
    }
}

