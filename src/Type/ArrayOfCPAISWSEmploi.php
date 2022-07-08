<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploi>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploi>
 */
class ArrayOfCPAISWSEmploi implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploi
     */
    private $CPAISWSEmploi;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSEmploi[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploi>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploi>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSEmploi) ? $this->CPAISWSEmploi : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploi $CPAISWSEmploi
     * @return ArrayOfCPAISWSEmploi
     */
    public function withCPAISWSEmploi($CPAISWSEmploi)
    {
        $new = clone $this;
        $new->CPAISWSEmploi = $CPAISWSEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploi
     */
    public function getCPAISWSEmploi()
    {
        return $this->CPAISWSEmploi;
    }
}

