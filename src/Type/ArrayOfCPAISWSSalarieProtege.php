<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieProtege>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieProtege>
 */
class ArrayOfCPAISWSSalarieProtege implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieProtege
     */
    private $CPAISWSSalarieProtege;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieProtege[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieProtege>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieProtege>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieProtege) ? $this->CPAISWSSalarieProtege : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieProtege $CPAISWSSalarieProtege
     * @return ArrayOfCPAISWSSalarieProtege
     */
    public function withCPAISWSSalarieProtege($CPAISWSSalarieProtege)
    {
        $new = clone $this;
        $new->CPAISWSSalarieProtege = $CPAISWSSalarieProtege;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieProtege
     */
    public function getCPAISWSSalarieProtege()
    {
        return $this->CPAISWSSalarieProtege;
    }
}

