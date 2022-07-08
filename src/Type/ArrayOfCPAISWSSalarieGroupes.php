<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieGroupes>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieGroupes>
 */
class ArrayOfCPAISWSSalarieGroupes implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieGroupes
     */
    private $CPAISWSSalarieGroupes;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieGroupes[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieGroupes>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieGroupes>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieGroupes) ? $this->CPAISWSSalarieGroupes : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieGroupes $CPAISWSSalarieGroupes
     * @return ArrayOfCPAISWSSalarieGroupes
     */
    public function withCPAISWSSalarieGroupes($CPAISWSSalarieGroupes)
    {
        $new = clone $this;
        $new->CPAISWSSalarieGroupes = $CPAISWSSalarieGroupes;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieGroupes
     */
    public function getCPAISWSSalarieGroupes()
    {
        return $this->CPAISWSSalarieGroupes;
    }
}

