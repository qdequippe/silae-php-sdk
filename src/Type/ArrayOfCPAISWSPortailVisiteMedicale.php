<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailVisiteMedicale>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailVisiteMedicale>
 */
class ArrayOfCPAISWSPortailVisiteMedicale implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailVisiteMedicale
     */
    private $CPAISWSPortailVisiteMedicale;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSPortailVisiteMedicale[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailVisiteMedicale>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailVisiteMedicale>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSPortailVisiteMedicale) ? $this->CPAISWSPortailVisiteMedicale : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailVisiteMedicale $CPAISWSPortailVisiteMedicale
     * @return ArrayOfCPAISWSPortailVisiteMedicale
     */
    public function withCPAISWSPortailVisiteMedicale($CPAISWSPortailVisiteMedicale)
    {
        $new = clone $this;
        $new->CPAISWSPortailVisiteMedicale = $CPAISWSPortailVisiteMedicale;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSPortailVisiteMedicale
     */
    public function getCPAISWSPortailVisiteMedicale()
    {
        return $this->CPAISWSPortailVisiteMedicale;
    }
}

