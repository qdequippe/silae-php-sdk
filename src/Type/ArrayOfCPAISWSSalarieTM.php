<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM>
 */
class ArrayOfCPAISWSSalarieTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM
     */
    private $CPAISWSSalarieTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieTM) ? $this->CPAISWSSalarieTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM $CPAISWSSalarieTM
     * @return ArrayOfCPAISWSSalarieTM
     */
    public function withCPAISWSSalarieTM($CPAISWSSalarieTM)
    {
        $new = clone $this;
        $new->CPAISWSSalarieTM = $CPAISWSSalarieTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM
     */
    public function getCPAISWSSalarieTM()
    {
        return $this->CPAISWSSalarieTM;
    }
}

