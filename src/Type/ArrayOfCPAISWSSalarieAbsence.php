<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence>
 */
class ArrayOfCPAISWSSalarieAbsence implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence
     */
    private $CPAISWSSalarieAbsence;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieAbsence) ? $this->CPAISWSSalarieAbsence : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence $CPAISWSSalarieAbsence
     * @return ArrayOfCPAISWSSalarieAbsence
     */
    public function withCPAISWSSalarieAbsence($CPAISWSSalarieAbsence)
    {
        $new = clone $this;
        $new->CPAISWSSalarieAbsence = $CPAISWSSalarieAbsence;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence
     */
    public function getCPAISWSSalarieAbsence()
    {
        return $this->CPAISWSSalarieAbsence;
    }
}

