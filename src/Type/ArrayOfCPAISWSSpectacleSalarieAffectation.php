<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectation>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectation>
 */
class ArrayOfCPAISWSSpectacleSalarieAffectation implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectation
     */
    private $CPAISWSSpectacleSalarieAffectation;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectation[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectation>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectation>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSpectacleSalarieAffectation) ? $this->CPAISWSSpectacleSalarieAffectation : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectation $CPAISWSSpectacleSalarieAffectation
     * @return ArrayOfCPAISWSSpectacleSalarieAffectation
     */
    public function withCPAISWSSpectacleSalarieAffectation($CPAISWSSpectacleSalarieAffectation)
    {
        $new = clone $this;
        $new->CPAISWSSpectacleSalarieAffectation = $CPAISWSSpectacleSalarieAffectation;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacleSalarieAffectation
     */
    public function getCPAISWSSpectacleSalarieAffectation()
    {
        return $this->CPAISWSSpectacleSalarieAffectation;
    }
}

