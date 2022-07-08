<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieBase>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieBase>
 */
class ArrayOfCPAISWSSalarieBase implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieBase
     */
    private $CPAISWSSalarieBase;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieBase[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieBase>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieBase>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieBase) ? $this->CPAISWSSalarieBase : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieBase $CPAISWSSalarieBase
     * @return ArrayOfCPAISWSSalarieBase
     */
    public function withCPAISWSSalarieBase($CPAISWSSalarieBase)
    {
        $new = clone $this;
        $new->CPAISWSSalarieBase = $CPAISWSSalarieBase;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieBase
     */
    public function getCPAISWSSalarieBase()
    {
        return $this->CPAISWSSalarieBase;
    }
}

