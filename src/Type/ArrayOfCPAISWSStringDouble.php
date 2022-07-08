<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStringDouble>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStringDouble>
 */
class ArrayOfCPAISWSStringDouble implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSStringDouble
     */
    private $CPAISWSStringDouble;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSStringDouble[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStringDouble>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStringDouble>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSStringDouble) ? $this->CPAISWSStringDouble : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSStringDouble $CPAISWSStringDouble
     * @return ArrayOfCPAISWSStringDouble
     */
    public function withCPAISWSStringDouble($CPAISWSStringDouble)
    {
        $new = clone $this;
        $new->CPAISWSStringDouble = $CPAISWSStringDouble;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSStringDouble
     */
    public function getCPAISWSStringDouble()
    {
        return $this->CPAISWSStringDouble;
    }
}

