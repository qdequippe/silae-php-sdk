<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCCN>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCCN>
 */
class ArrayOfCPAISWSCCN implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSCCN
     */
    private $CPAISWSCCN;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSCCN[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCCN>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCCN>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSCCN) ? $this->CPAISWSCCN : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSCCN $CPAISWSCCN
     * @return ArrayOfCPAISWSCCN
     */
    public function withCPAISWSCCN($CPAISWSCCN)
    {
        $new = clone $this;
        $new->CPAISWSCCN = $CPAISWSCCN;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSCCN
     */
    public function getCPAISWSCCN()
    {
        return $this->CPAISWSCCN;
    }
}

