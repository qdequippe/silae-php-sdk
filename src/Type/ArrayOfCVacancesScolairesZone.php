<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CVacancesScolairesZone>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CVacancesScolairesZone>
 */
class ArrayOfCVacancesScolairesZone implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CVacancesScolairesZone
     */
    private $CVacancesScolairesZone;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CVacancesScolairesZone[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CVacancesScolairesZone>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CVacancesScolairesZone>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CVacancesScolairesZone) ? $this->CVacancesScolairesZone : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CVacancesScolairesZone $CVacancesScolairesZone
     * @return ArrayOfCVacancesScolairesZone
     */
    public function withCVacancesScolairesZone($CVacancesScolairesZone)
    {
        $new = clone $this;
        $new->CVacancesScolairesZone = $CVacancesScolairesZone;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CVacancesScolairesZone
     */
    public function getCVacancesScolairesZone()
    {
        return $this->CVacancesScolairesZone;
    }
}

