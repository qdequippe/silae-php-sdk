<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCodeAbsence>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCodeAbsence>
 */
class ArrayOfCPAISWSCodeAbsence implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSCodeAbsence
     */
    private $CPAISWSCodeAbsence;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSCodeAbsence[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCodeAbsence>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCodeAbsence>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSCodeAbsence) ? $this->CPAISWSCodeAbsence : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSCodeAbsence $CPAISWSCodeAbsence
     * @return ArrayOfCPAISWSCodeAbsence
     */
    public function withCPAISWSCodeAbsence($CPAISWSCodeAbsence)
    {
        $new = clone $this;
        $new->CPAISWSCodeAbsence = $CPAISWSCodeAbsence;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSCodeAbsence
     */
    public function getCPAISWSCodeAbsence()
    {
        return $this->CPAISWSCodeAbsence;
    }
}

