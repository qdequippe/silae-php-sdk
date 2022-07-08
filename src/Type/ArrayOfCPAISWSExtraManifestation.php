<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation>
 */
class ArrayOfCPAISWSExtraManifestation implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation
     */
    private $CPAISWSExtraManifestation;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSExtraManifestation) ? $this->CPAISWSExtraManifestation : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation $CPAISWSExtraManifestation
     * @return ArrayOfCPAISWSExtraManifestation
     */
    public function withCPAISWSExtraManifestation($CPAISWSExtraManifestation)
    {
        $new = clone $this;
        $new->CPAISWSExtraManifestation = $CPAISWSExtraManifestation;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSExtraManifestation
     */
    public function getCPAISWSExtraManifestation()
    {
        return $this->CPAISWSExtraManifestation;
    }
}

