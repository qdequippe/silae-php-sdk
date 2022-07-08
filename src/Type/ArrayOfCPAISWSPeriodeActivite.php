<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPeriodeActivite>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPeriodeActivite>
 */
class ArrayOfCPAISWSPeriodeActivite implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSPeriodeActivite
     */
    private $CPAISWSPeriodeActivite;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSPeriodeActivite[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPeriodeActivite>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPeriodeActivite>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSPeriodeActivite) ? $this->CPAISWSPeriodeActivite : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSPeriodeActivite $CPAISWSPeriodeActivite
     * @return ArrayOfCPAISWSPeriodeActivite
     */
    public function withCPAISWSPeriodeActivite($CPAISWSPeriodeActivite)
    {
        $new = clone $this;
        $new->CPAISWSPeriodeActivite = $CPAISWSPeriodeActivite;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSPeriodeActivite
     */
    public function getCPAISWSPeriodeActivite()
    {
        return $this->CPAISWSPeriodeActivite;
    }
}

