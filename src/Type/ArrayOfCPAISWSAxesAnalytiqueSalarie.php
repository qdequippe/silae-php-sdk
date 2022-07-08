<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAxesAnalytiqueSalarie>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAxesAnalytiqueSalarie>
 */
class ArrayOfCPAISWSAxesAnalytiqueSalarie implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSAxesAnalytiqueSalarie
     */
    private $CPAISWSAxesAnalytiqueSalarie;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSAxesAnalytiqueSalarie[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAxesAnalytiqueSalarie>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAxesAnalytiqueSalarie>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSAxesAnalytiqueSalarie) ? $this->CPAISWSAxesAnalytiqueSalarie : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSAxesAnalytiqueSalarie $CPAISWSAxesAnalytiqueSalarie
     * @return ArrayOfCPAISWSAxesAnalytiqueSalarie
     */
    public function withCPAISWSAxesAnalytiqueSalarie($CPAISWSAxesAnalytiqueSalarie)
    {
        $new = clone $this;
        $new->CPAISWSAxesAnalytiqueSalarie = $CPAISWSAxesAnalytiqueSalarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSAxesAnalytiqueSalarie
     */
    public function getCPAISWSAxesAnalytiqueSalarie()
    {
        return $this->CPAISWSAxesAnalytiqueSalarie;
    }
}

