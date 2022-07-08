<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp2>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp2>
 */
class ArrayOfCPAISWSModificationChamp2 implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp2
     */
    private $CPAISWSModificationChamp2;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp2[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp2>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp2>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSModificationChamp2) ? $this->CPAISWSModificationChamp2 : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp2 $CPAISWSModificationChamp2
     * @return ArrayOfCPAISWSModificationChamp2
     */
    public function withCPAISWSModificationChamp2($CPAISWSModificationChamp2)
    {
        $new = clone $this;
        $new->CPAISWSModificationChamp2 = $CPAISWSModificationChamp2;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp2
     */
    public function getCPAISWSModificationChamp2()
    {
        return $this->CPAISWSModificationChamp2;
    }
}

