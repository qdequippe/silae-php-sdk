<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale>
 */
class ArrayOfCPAISWSVisiteMedicale implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale
     */
    private $CPAISWSVisiteMedicale;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSVisiteMedicale) ? $this->CPAISWSVisiteMedicale : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale $CPAISWSVisiteMedicale
     * @return ArrayOfCPAISWSVisiteMedicale
     */
    public function withCPAISWSVisiteMedicale($CPAISWSVisiteMedicale)
    {
        $new = clone $this;
        $new->CPAISWSVisiteMedicale = $CPAISWSVisiteMedicale;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSVisiteMedicale
     */
    public function getCPAISWSVisiteMedicale()
    {
        return $this->CPAISWSVisiteMedicale;
    }
}

