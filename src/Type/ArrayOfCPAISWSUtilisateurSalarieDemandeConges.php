<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeConges>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeConges>
 */
class ArrayOfCPAISWSUtilisateurSalarieDemandeConges implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeConges
     */
    private $CPAISWSUtilisateurSalarieDemandeConges;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeConges[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeConges>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeConges>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSUtilisateurSalarieDemandeConges) ? $this->CPAISWSUtilisateurSalarieDemandeConges : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeConges $CPAISWSUtilisateurSalarieDemandeConges
     * @return ArrayOfCPAISWSUtilisateurSalarieDemandeConges
     */
    public function withCPAISWSUtilisateurSalarieDemandeConges($CPAISWSUtilisateurSalarieDemandeConges)
    {
        $new = clone $this;
        $new->CPAISWSUtilisateurSalarieDemandeConges = $CPAISWSUtilisateurSalarieDemandeConges;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeConges
     */
    public function getCPAISWSUtilisateurSalarieDemandeConges()
    {
        return $this->CPAISWSUtilisateurSalarieDemandeConges;
    }
}

