<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieInformations>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieInformations>
 */
class ArrayOfCPAISWSSalarieInformations implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieInformations
     */
    private $CPAISWSSalarieInformations;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieInformations[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieInformations>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieInformations>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieInformations) ? $this->CPAISWSSalarieInformations : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieInformations $CPAISWSSalarieInformations
     * @return ArrayOfCPAISWSSalarieInformations
     */
    public function withCPAISWSSalarieInformations($CPAISWSSalarieInformations)
    {
        $new = clone $this;
        $new->CPAISWSSalarieInformations = $CPAISWSSalarieInformations;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieInformations
     */
    public function getCPAISWSSalarieInformations()
    {
        return $this->CPAISWSSalarieInformations;
    }
}

