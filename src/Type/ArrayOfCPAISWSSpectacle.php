<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle>
 */
class ArrayOfCPAISWSSpectacle implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle
     */
    private $CPAISWSSpectacle;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSpectacle) ? $this->CPAISWSSpectacle : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle $CPAISWSSpectacle
     * @return ArrayOfCPAISWSSpectacle
     */
    public function withCPAISWSSpectacle($CPAISWSSpectacle)
    {
        $new = clone $this;
        $new->CPAISWSSpectacle = $CPAISWSSpectacle;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSpectacle
     */
    public function getCPAISWSSpectacle()
    {
        return $this->CPAISWSSpectacle;
    }
}

