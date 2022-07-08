<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiExterneInformations>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiExterneInformations>
 */
class ArrayOfCPAISWSSalarieEmploiExterneInformations implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiExterneInformations
     */
    private $CPAISWSSalarieEmploiExterneInformations;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiExterneInformations[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiExterneInformations>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiExterneInformations>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieEmploiExterneInformations) ? $this->CPAISWSSalarieEmploiExterneInformations : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiExterneInformations $CPAISWSSalarieEmploiExterneInformations
     * @return ArrayOfCPAISWSSalarieEmploiExterneInformations
     */
    public function withCPAISWSSalarieEmploiExterneInformations($CPAISWSSalarieEmploiExterneInformations)
    {
        $new = clone $this;
        $new->CPAISWSSalarieEmploiExterneInformations = $CPAISWSSalarieEmploiExterneInformations;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiExterneInformations
     */
    public function getCPAISWSSalarieEmploiExterneInformations()
    {
        return $this->CPAISWSSalarieEmploiExterneInformations;
    }
}

