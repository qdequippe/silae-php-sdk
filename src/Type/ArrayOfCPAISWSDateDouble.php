<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDateDouble>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDateDouble>
 */
class ArrayOfCPAISWSDateDouble implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDateDouble
     */
    private $CPAISWSDateDouble;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSDateDouble[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDateDouble>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDateDouble>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSDateDouble) ? $this->CPAISWSDateDouble : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSDateDouble $CPAISWSDateDouble
     * @return ArrayOfCPAISWSDateDouble
     */
    public function withCPAISWSDateDouble($CPAISWSDateDouble)
    {
        $new = clone $this;
        $new->CPAISWSDateDouble = $CPAISWSDateDouble;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSDateDouble
     */
    public function getCPAISWSDateDouble()
    {
        return $this->CPAISWSDateDouble;
    }
}

