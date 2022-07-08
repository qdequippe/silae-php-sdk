<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChampByte>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChampByte>
 */
class ArrayOfCPAISWSModificationChampByte implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChampByte
     */
    private $CPAISWSModificationChampByte;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChampByte[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChampByte>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChampByte>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSModificationChampByte) ? $this->CPAISWSModificationChampByte : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChampByte $CPAISWSModificationChampByte
     * @return ArrayOfCPAISWSModificationChampByte
     */
    public function withCPAISWSModificationChampByte($CPAISWSModificationChampByte)
    {
        $new = clone $this;
        $new->CPAISWSModificationChampByte = $CPAISWSModificationChampByte;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChampByte
     */
    public function getCPAISWSModificationChampByte()
    {
        return $this->CPAISWSModificationChampByte;
    }
}

