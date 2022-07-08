<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSElementVariableTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSElementVariableTM>
 */
class ArrayOfCPAISWSElementVariableTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSElementVariableTM
     */
    private $CPAISWSElementVariableTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSElementVariableTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSElementVariableTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSElementVariableTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSElementVariableTM) ? $this->CPAISWSElementVariableTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSElementVariableTM $CPAISWSElementVariableTM
     * @return ArrayOfCPAISWSElementVariableTM
     */
    public function withCPAISWSElementVariableTM($CPAISWSElementVariableTM)
    {
        $new = clone $this;
        $new->CPAISWSElementVariableTM = $CPAISWSElementVariableTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSElementVariableTM
     */
    public function getCPAISWSElementVariableTM()
    {
        return $this->CPAISWSElementVariableTM;
    }
}

