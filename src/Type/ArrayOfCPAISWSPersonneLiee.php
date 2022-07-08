<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee>
 */
class ArrayOfCPAISWSPersonneLiee implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee
     */
    private $CPAISWSPersonneLiee;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSPersonneLiee) ? $this->CPAISWSPersonneLiee : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee $CPAISWSPersonneLiee
     * @return ArrayOfCPAISWSPersonneLiee
     */
    public function withCPAISWSPersonneLiee($CPAISWSPersonneLiee)
    {
        $new = clone $this;
        $new->CPAISWSPersonneLiee = $CPAISWSPersonneLiee;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee
     */
    public function getCPAISWSPersonneLiee()
    {
        return $this->CPAISWSPersonneLiee;
    }
}

