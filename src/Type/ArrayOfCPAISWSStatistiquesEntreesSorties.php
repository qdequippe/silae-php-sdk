<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSorties>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSorties>
 */
class ArrayOfCPAISWSStatistiquesEntreesSorties implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSorties
     */
    private $CPAISWSStatistiquesEntreesSorties;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSorties[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSorties>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSorties>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSStatistiquesEntreesSorties) ? $this->CPAISWSStatistiquesEntreesSorties : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSorties $CPAISWSStatistiquesEntreesSorties
     * @return ArrayOfCPAISWSStatistiquesEntreesSorties
     */
    public function withCPAISWSStatistiquesEntreesSorties($CPAISWSStatistiquesEntreesSorties)
    {
        $new = clone $this;
        $new->CPAISWSStatistiquesEntreesSorties = $CPAISWSStatistiquesEntreesSorties;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSorties
     */
    public function getCPAISWSStatistiquesEntreesSorties()
    {
        return $this->CPAISWSStatistiquesEntreesSorties;
    }
}

