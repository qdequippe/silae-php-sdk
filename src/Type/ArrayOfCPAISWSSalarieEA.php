<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEA>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEA>
 */
class ArrayOfCPAISWSSalarieEA implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEA
     */
    private $CPAISWSSalarieEA;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEA[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEA>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEA>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieEA) ? $this->CPAISWSSalarieEA : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEA $CPAISWSSalarieEA
     * @return ArrayOfCPAISWSSalarieEA
     */
    public function withCPAISWSSalarieEA($CPAISWSSalarieEA)
    {
        $new = clone $this;
        $new->CPAISWSSalarieEA = $CPAISWSSalarieEA;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEA
     */
    public function getCPAISWSSalarieEA()
    {
        return $this->CPAISWSSalarieEA;
    }
}

