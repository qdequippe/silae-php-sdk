<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceSimpleTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceSimpleTM>
 */
class ArrayOfCPAISWSAbsenceSimpleTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceSimpleTM
     */
    private $CPAISWSAbsenceSimpleTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceSimpleTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceSimpleTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceSimpleTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSAbsenceSimpleTM) ? $this->CPAISWSAbsenceSimpleTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceSimpleTM $CPAISWSAbsenceSimpleTM
     * @return ArrayOfCPAISWSAbsenceSimpleTM
     */
    public function withCPAISWSAbsenceSimpleTM($CPAISWSAbsenceSimpleTM)
    {
        $new = clone $this;
        $new->CPAISWSAbsenceSimpleTM = $CPAISWSAbsenceSimpleTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceSimpleTM
     */
    public function getCPAISWSAbsenceSimpleTM()
    {
        return $this->CPAISWSAbsenceSimpleTM;
    }
}

