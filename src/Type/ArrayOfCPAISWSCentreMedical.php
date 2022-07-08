<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical>
 */
class ArrayOfCPAISWSCentreMedical implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical
     */
    private $CPAISWSCentreMedical;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSCentreMedical) ? $this->CPAISWSCentreMedical : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical $CPAISWSCentreMedical
     * @return ArrayOfCPAISWSCentreMedical
     */
    public function withCPAISWSCentreMedical($CPAISWSCentreMedical)
    {
        $new = clone $this;
        $new->CPAISWSCentreMedical = $CPAISWSCentreMedical;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSCentreMedical
     */
    public function getCPAISWSCentreMedical()
    {
        return $this->CPAISWSCentreMedical;
    }
}

