<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSIdentificationEmploi>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSIdentificationEmploi>
 */
class ArrayOfCPAISWSIdentificationEmploi implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSIdentificationEmploi
     */
    private $CPAISWSIdentificationEmploi;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSIdentificationEmploi[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSIdentificationEmploi>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSIdentificationEmploi>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSIdentificationEmploi) ? $this->CPAISWSIdentificationEmploi : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSIdentificationEmploi $CPAISWSIdentificationEmploi
     * @return ArrayOfCPAISWSIdentificationEmploi
     */
    public function withCPAISWSIdentificationEmploi($CPAISWSIdentificationEmploi)
    {
        $new = clone $this;
        $new->CPAISWSIdentificationEmploi = $CPAISWSIdentificationEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSIdentificationEmploi
     */
    public function getCPAISWSIdentificationEmploi()
    {
        return $this->CPAISWSIdentificationEmploi;
    }
}

