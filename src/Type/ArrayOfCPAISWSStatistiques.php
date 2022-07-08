<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiques>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiques>
 */
class ArrayOfCPAISWSStatistiques implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiques
     */
    private $CPAISWSStatistiques;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiques[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiques>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiques>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSStatistiques) ? $this->CPAISWSStatistiques : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiques $CPAISWSStatistiques
     * @return ArrayOfCPAISWSStatistiques
     */
    public function withCPAISWSStatistiques($CPAISWSStatistiques)
    {
        $new = clone $this;
        $new->CPAISWSStatistiques = $CPAISWSStatistiques;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiques
     */
    public function getCPAISWSStatistiques()
    {
        return $this->CPAISWSStatistiques;
    }
}

