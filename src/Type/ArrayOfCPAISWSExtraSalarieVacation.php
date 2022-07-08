<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacation>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacation>
 */
class ArrayOfCPAISWSExtraSalarieVacation implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacation
     */
    private $CPAISWSExtraSalarieVacation;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacation[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacation>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacation>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSExtraSalarieVacation) ? $this->CPAISWSExtraSalarieVacation : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacation $CPAISWSExtraSalarieVacation
     * @return ArrayOfCPAISWSExtraSalarieVacation
     */
    public function withCPAISWSExtraSalarieVacation($CPAISWSExtraSalarieVacation)
    {
        $new = clone $this;
        $new->CPAISWSExtraSalarieVacation = $CPAISWSExtraSalarieVacation;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraSalarieVacation
     */
    public function getCPAISWSExtraSalarieVacation()
    {
        return $this->CPAISWSExtraSalarieVacation;
    }
}

