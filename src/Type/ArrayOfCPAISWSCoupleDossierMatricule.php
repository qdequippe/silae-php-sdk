<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCoupleDossierMatricule>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCoupleDossierMatricule>
 */
class ArrayOfCPAISWSCoupleDossierMatricule implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSCoupleDossierMatricule
     */
    private $CPAISWSCoupleDossierMatricule;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSCoupleDossierMatricule[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCoupleDossierMatricule>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCoupleDossierMatricule>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSCoupleDossierMatricule) ? $this->CPAISWSCoupleDossierMatricule : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSCoupleDossierMatricule $CPAISWSCoupleDossierMatricule
     * @return ArrayOfCPAISWSCoupleDossierMatricule
     */
    public function withCPAISWSCoupleDossierMatricule($CPAISWSCoupleDossierMatricule)
    {
        $new = clone $this;
        $new->CPAISWSCoupleDossierMatricule = $CPAISWSCoupleDossierMatricule;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSCoupleDossierMatricule
     */
    public function getCPAISWSCoupleDossierMatricule()
    {
        return $this->CPAISWSCoupleDossierMatricule;
    }
}

