<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSQContratComplementaire>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSQContratComplementaire>
 */
class ArrayOfCPAISWSQContratComplementaire implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSQContratComplementaire
     */
    private $CPAISWSQContratComplementaire;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSQContratComplementaire[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSQContratComplementaire>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSQContratComplementaire>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSQContratComplementaire) ? $this->CPAISWSQContratComplementaire : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSQContratComplementaire $CPAISWSQContratComplementaire
     * @return ArrayOfCPAISWSQContratComplementaire
     */
    public function withCPAISWSQContratComplementaire($CPAISWSQContratComplementaire)
    {
        $new = clone $this;
        $new->CPAISWSQContratComplementaire = $CPAISWSQContratComplementaire;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSQContratComplementaire
     */
    public function getCPAISWSQContratComplementaire()
    {
        return $this->CPAISWSQContratComplementaire;
    }
}

