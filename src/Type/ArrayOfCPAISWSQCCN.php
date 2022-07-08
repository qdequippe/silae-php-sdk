<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSQCCN>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSQCCN>
 */
class ArrayOfCPAISWSQCCN implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSQCCN
     */
    private $CPAISWSQCCN;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSQCCN[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSQCCN>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSQCCN>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSQCCN) ? $this->CPAISWSQCCN : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSQCCN $CPAISWSQCCN
     * @return ArrayOfCPAISWSQCCN
     */
    public function withCPAISWSQCCN($CPAISWSQCCN)
    {
        $new = clone $this;
        $new->CPAISWSQCCN = $CPAISWSQCCN;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSQCCN
     */
    public function getCPAISWSQCCN()
    {
        return $this->CPAISWSQCCN;
    }
}

