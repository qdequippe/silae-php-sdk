<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM>
 */
class ArrayOfCPAISWSAbsenceTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM
     */
    private $CPAISWSAbsenceTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSAbsenceTM) ? $this->CPAISWSAbsenceTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM $CPAISWSAbsenceTM
     * @return ArrayOfCPAISWSAbsenceTM
     */
    public function withCPAISWSAbsenceTM($CPAISWSAbsenceTM)
    {
        $new = clone $this;
        $new->CPAISWSAbsenceTM = $CPAISWSAbsenceTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM
     */
    public function getCPAISWSAbsenceTM()
    {
        return $this->CPAISWSAbsenceTM;
    }
}

