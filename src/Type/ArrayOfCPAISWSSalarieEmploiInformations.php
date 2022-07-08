<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiInformations>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiInformations>
 */
class ArrayOfCPAISWSSalarieEmploiInformations implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiInformations
     */
    private $CPAISWSSalarieEmploiInformations;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiInformations[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiInformations>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiInformations>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieEmploiInformations) ? $this->CPAISWSSalarieEmploiInformations : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiInformations $CPAISWSSalarieEmploiInformations
     * @return ArrayOfCPAISWSSalarieEmploiInformations
     */
    public function withCPAISWSSalarieEmploiInformations($CPAISWSSalarieEmploiInformations)
    {
        $new = clone $this;
        $new->CPAISWSSalarieEmploiInformations = $CPAISWSSalarieEmploiInformations;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiInformations
     */
    public function getCPAISWSSalarieEmploiInformations()
    {
        return $this->CPAISWSSalarieEmploiInformations;
    }
}

