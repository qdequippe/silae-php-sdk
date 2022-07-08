<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence2>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence2>
 */
class ArrayOfCPAISWSUtilisateurSalarieAbsence2 implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence2
     */
    private $CPAISWSUtilisateurSalarieAbsence2;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence2[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence2>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence2>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSUtilisateurSalarieAbsence2) ? $this->CPAISWSUtilisateurSalarieAbsence2 : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence2 $CPAISWSUtilisateurSalarieAbsence2
     * @return ArrayOfCPAISWSUtilisateurSalarieAbsence2
     */
    public function withCPAISWSUtilisateurSalarieAbsence2($CPAISWSUtilisateurSalarieAbsence2)
    {
        $new = clone $this;
        $new->CPAISWSUtilisateurSalarieAbsence2 = $CPAISWSUtilisateurSalarieAbsence2;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieAbsence2
     */
    public function getCPAISWSUtilisateurSalarieAbsence2()
    {
        return $this->CPAISWSUtilisateurSalarieAbsence2;
    }
}

