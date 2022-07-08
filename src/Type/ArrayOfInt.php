<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, int>
 * @psalm-implements \IteratorAggregate<array-key, int>
 */
class ArrayOfInt implements IteratorAggregate
{
    /**
     * @var int
     */
    private $int;

    /**
     * @return \ArrayIterator|int[]
     * @phpstan-return \ArrayIterator<array-key, int>
     * @psalm-return \ArrayIterator<array-key, int>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->int) ? $this->int : []);
    }

    /**
     * @param int $int
     * @return ArrayOfInt
     */
    public function withInt($int)
    {
        $new = clone $this;
        $new->int = $int;

        return $new;
    }

    /**
     * @return int
     */
    public function getInt()
    {
        return $this->int;
    }
}

