<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSLibelleValeur>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSLibelleValeur>
 */
class ArrayOfCPAISWSLibelleValeur implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSLibelleValeur
     */
    private $CPAISWSLibelleValeur;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSLibelleValeur[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSLibelleValeur>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSLibelleValeur>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSLibelleValeur) ? $this->CPAISWSLibelleValeur : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSLibelleValeur $CPAISWSLibelleValeur
     * @return ArrayOfCPAISWSLibelleValeur
     */
    public function withCPAISWSLibelleValeur($CPAISWSLibelleValeur)
    {
        $new = clone $this;
        $new->CPAISWSLibelleValeur = $CPAISWSLibelleValeur;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSLibelleValeur
     */
    public function getCPAISWSLibelleValeur()
    {
        return $this->CPAISWSLibelleValeur;
    }
}

