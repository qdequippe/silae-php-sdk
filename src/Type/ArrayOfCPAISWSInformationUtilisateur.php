<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationUtilisateur>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationUtilisateur>
 */
class ArrayOfCPAISWSInformationUtilisateur implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationUtilisateur
     */
    private $CPAISWSInformationUtilisateur;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSInformationUtilisateur[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationUtilisateur>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationUtilisateur>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSInformationUtilisateur) ? $this->CPAISWSInformationUtilisateur : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationUtilisateur $CPAISWSInformationUtilisateur
     * @return ArrayOfCPAISWSInformationUtilisateur
     */
    public function withCPAISWSInformationUtilisateur($CPAISWSInformationUtilisateur)
    {
        $new = clone $this;
        $new->CPAISWSInformationUtilisateur = $CPAISWSInformationUtilisateur;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationUtilisateur
     */
    public function getCPAISWSInformationUtilisateur()
    {
        return $this->CPAISWSInformationUtilisateur;
    }
}

