<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStringString>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStringString>
 */
class ArrayOfCPAISWSStringString implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSStringString
     */
    private $CPAISWSStringString;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSStringString[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStringString>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStringString>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSStringString) ? $this->CPAISWSStringString : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSStringString $CPAISWSStringString
     * @return ArrayOfCPAISWSStringString
     */
    public function withCPAISWSStringString($CPAISWSStringString)
    {
        $new = clone $this;
        $new->CPAISWSStringString = $CPAISWSStringString;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSStringString
     */
    public function getCPAISWSStringString()
    {
        return $this->CPAISWSStringString;
    }
}

