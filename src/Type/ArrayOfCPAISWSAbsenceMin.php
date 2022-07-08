<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceMin>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceMin>
 */
class ArrayOfCPAISWSAbsenceMin implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceMin
     */
    private $CPAISWSAbsenceMin;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceMin[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceMin>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceMin>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSAbsenceMin) ? $this->CPAISWSAbsenceMin : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceMin $CPAISWSAbsenceMin
     * @return ArrayOfCPAISWSAbsenceMin
     */
    public function withCPAISWSAbsenceMin($CPAISWSAbsenceMin)
    {
        $new = clone $this;
        $new->CPAISWSAbsenceMin = $CPAISWSAbsenceMin;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceMin
     */
    public function getCPAISWSAbsenceMin()
    {
        return $this->CPAISWSAbsenceMin;
    }
}

