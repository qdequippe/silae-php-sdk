<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieStockVar>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieStockVar>
 */
class ArrayOfCPAISWSReponseSalarieStockVar implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieStockVar
     */
    private $CPAISWSReponseSalarieStockVar;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieStockVar[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieStockVar>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieStockVar>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSReponseSalarieStockVar) ? $this->CPAISWSReponseSalarieStockVar : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieStockVar $CPAISWSReponseSalarieStockVar
     * @return ArrayOfCPAISWSReponseSalarieStockVar
     */
    public function withCPAISWSReponseSalarieStockVar($CPAISWSReponseSalarieStockVar)
    {
        $new = clone $this;
        $new->CPAISWSReponseSalarieStockVar = $CPAISWSReponseSalarieStockVar;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieStockVar
     */
    public function getCPAISWSReponseSalarieStockVar()
    {
        return $this->CPAISWSReponseSalarieStockVar;
    }
}

