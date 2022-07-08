<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, float>
 * @psalm-implements \IteratorAggregate<array-key, float>
 */
class ArrayOfDouble implements IteratorAggregate
{
    /**
     * @var float
     */
    private $double;

    /**
     * @return \ArrayIterator|float[]
     * @phpstan-return \ArrayIterator<array-key, float>
     * @psalm-return \ArrayIterator<array-key, float>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->double) ? $this->double : []);
    }

    /**
     * @param float $double
     * @return ArrayOfDouble
     */
    public function withDouble($double)
    {
        $new = clone $this;
        $new->double = $double;

        return $new;
    }

    /**
     * @return float
     */
    public function getDouble()
    {
        return $this->double;
    }
}

