<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSContenuEA>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSContenuEA>
 */
class ArrayOfCPAISWSContenuEA implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSContenuEA
     */
    private $CPAISWSContenuEA;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSContenuEA[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSContenuEA>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSContenuEA>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSContenuEA) ? $this->CPAISWSContenuEA : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSContenuEA $CPAISWSContenuEA
     * @return ArrayOfCPAISWSContenuEA
     */
    public function withCPAISWSContenuEA($CPAISWSContenuEA)
    {
        $new = clone $this;
        $new->CPAISWSContenuEA = $CPAISWSContenuEA;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSContenuEA
     */
    public function getCPAISWSContenuEA()
    {
        return $this->CPAISWSContenuEA;
    }
}

