<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical>
 */
class ArrayOfCPAISWSPortailCentreMedical implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical
     */
    private $CPAISWSPortailCentreMedical;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSPortailCentreMedical) ? $this->CPAISWSPortailCentreMedical : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical $CPAISWSPortailCentreMedical
     * @return ArrayOfCPAISWSPortailCentreMedical
     */
    public function withCPAISWSPortailCentreMedical($CPAISWSPortailCentreMedical)
    {
        $new = clone $this;
        $new->CPAISWSPortailCentreMedical = $CPAISWSPortailCentreMedical;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailCentreMedical
     */
    public function getCPAISWSPortailCentreMedical()
    {
        return $this->CPAISWSPortailCentreMedical;
    }
}

