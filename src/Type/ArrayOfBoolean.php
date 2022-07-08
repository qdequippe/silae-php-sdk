<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, bool>
 * @psalm-implements \IteratorAggregate<array-key, bool>
 */
class ArrayOfBoolean implements IteratorAggregate
{
    /**
     * @var bool
     */
    private $boolean;

    /**
     * @return \ArrayIterator|bool[]
     * @phpstan-return \ArrayIterator<array-key, bool>
     * @psalm-return \ArrayIterator<array-key, bool>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->boolean) ? $this->boolean : []);
    }

    /**
     * @param bool $boolean
     * @return ArrayOfBoolean
     */
    public function withBoolean($boolean)
    {
        $new = clone $this;
        $new->boolean = $boolean;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBoolean()
    {
        return $this->boolean;
    }
}

