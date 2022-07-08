<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieElementVariableTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieElementVariableTM>
 */
class ArrayOfCPAISWSSaisieElementVariableTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieElementVariableTM
     */
    private $CPAISWSSaisieElementVariableTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieElementVariableTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieElementVariableTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieElementVariableTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSaisieElementVariableTM) ? $this->CPAISWSSaisieElementVariableTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieElementVariableTM $CPAISWSSaisieElementVariableTM
     * @return ArrayOfCPAISWSSaisieElementVariableTM
     */
    public function withCPAISWSSaisieElementVariableTM($CPAISWSSaisieElementVariableTM)
    {
        $new = clone $this;
        $new->CPAISWSSaisieElementVariableTM = $CPAISWSSaisieElementVariableTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieElementVariableTM
     */
    public function getCPAISWSSaisieElementVariableTM()
    {
        return $this->CPAISWSSaisieElementVariableTM;
    }
}

