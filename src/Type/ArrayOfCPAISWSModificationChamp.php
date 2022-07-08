<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp>
 */
class ArrayOfCPAISWSModificationChamp implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp
     */
    private $CPAISWSModificationChamp;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSModificationChamp) ? $this->CPAISWSModificationChamp : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp $CPAISWSModificationChamp
     * @return ArrayOfCPAISWSModificationChamp
     */
    public function withCPAISWSModificationChamp($CPAISWSModificationChamp)
    {
        $new = clone $this;
        $new->CPAISWSModificationChamp = $CPAISWSModificationChamp;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp
     */
    public function getCPAISWSModificationChamp()
    {
        return $this->CPAISWSModificationChamp;
    }
}

