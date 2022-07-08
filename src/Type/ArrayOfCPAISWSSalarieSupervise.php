<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieSupervise>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieSupervise>
 */
class ArrayOfCPAISWSSalarieSupervise implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieSupervise
     */
    private $CPAISWSSalarieSupervise;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieSupervise[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieSupervise>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieSupervise>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieSupervise) ? $this->CPAISWSSalarieSupervise : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieSupervise $CPAISWSSalarieSupervise
     * @return ArrayOfCPAISWSSalarieSupervise
     */
    public function withCPAISWSSalarieSupervise($CPAISWSSalarieSupervise)
    {
        $new = clone $this;
        $new->CPAISWSSalarieSupervise = $CPAISWSSalarieSupervise;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieSupervise
     */
    public function getCPAISWSSalarieSupervise()
    {
        return $this->CPAISWSSalarieSupervise;
    }
}

