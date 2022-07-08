<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProductionUtilisateur>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProductionUtilisateur>
 */
class ArrayOfCPAISWSStatistiquesProductionUtilisateur implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProductionUtilisateur
     */
    private $CPAISWSStatistiquesProductionUtilisateur;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProductionUtilisateur[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProductionUtilisateur>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProductionUtilisateur>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSStatistiquesProductionUtilisateur) ? $this->CPAISWSStatistiquesProductionUtilisateur : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProductionUtilisateur $CPAISWSStatistiquesProductionUtilisateur
     * @return ArrayOfCPAISWSStatistiquesProductionUtilisateur
     */
    public function withCPAISWSStatistiquesProductionUtilisateur($CPAISWSStatistiquesProductionUtilisateur)
    {
        $new = clone $this;
        $new->CPAISWSStatistiquesProductionUtilisateur = $CPAISWSStatistiquesProductionUtilisateur;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProductionUtilisateur
     */
    public function getCPAISWSStatistiquesProductionUtilisateur()
    {
        return $this->CPAISWSStatistiquesProductionUtilisateur;
    }
}

