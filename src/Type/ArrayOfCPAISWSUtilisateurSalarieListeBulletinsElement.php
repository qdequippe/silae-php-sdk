<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieListeBulletinsElement>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieListeBulletinsElement>
 */
class ArrayOfCPAISWSUtilisateurSalarieListeBulletinsElement implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieListeBulletinsElement
     */
    private $CPAISWSUtilisateurSalarieListeBulletinsElement;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieListeBulletinsElement[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieListeBulletinsElement>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieListeBulletinsElement>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSUtilisateurSalarieListeBulletinsElement) ? $this->CPAISWSUtilisateurSalarieListeBulletinsElement : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieListeBulletinsElement $CPAISWSUtilisateurSalarieListeBulletinsElement
     * @return ArrayOfCPAISWSUtilisateurSalarieListeBulletinsElement
     */
    public function withCPAISWSUtilisateurSalarieListeBulletinsElement($CPAISWSUtilisateurSalarieListeBulletinsElement)
    {
        $new = clone $this;
        $new->CPAISWSUtilisateurSalarieListeBulletinsElement = $CPAISWSUtilisateurSalarieListeBulletinsElement;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieListeBulletinsElement
     */
    public function getCPAISWSUtilisateurSalarieListeBulletinsElement()
    {
        return $this->CPAISWSUtilisateurSalarieListeBulletinsElement;
    }
}

