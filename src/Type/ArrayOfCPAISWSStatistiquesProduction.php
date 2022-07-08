<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProduction>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProduction>
 */
class ArrayOfCPAISWSStatistiquesProduction implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProduction
     */
    private $CPAISWSStatistiquesProduction;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProduction[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProduction>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProduction>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSStatistiquesProduction) ? $this->CPAISWSStatistiquesProduction : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProduction $CPAISWSStatistiquesProduction
     * @return ArrayOfCPAISWSStatistiquesProduction
     */
    public function withCPAISWSStatistiquesProduction($CPAISWSStatistiquesProduction)
    {
        $new = clone $this;
        $new->CPAISWSStatistiquesProduction = $CPAISWSStatistiquesProduction;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesProduction
     */
    public function getCPAISWSStatistiquesProduction()
    {
        return $this->CPAISWSStatistiquesProduction;
    }
}

