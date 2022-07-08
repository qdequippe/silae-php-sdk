<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, string>
 * @psalm-implements \IteratorAggregate<array-key, string>
 */
class ArrayOfString implements IteratorAggregate
{
    /**
     * @var string
     */
    private $string;

    /**
     * @return \ArrayIterator|string[]
     * @phpstan-return \ArrayIterator<array-key, string>
     * @psalm-return \ArrayIterator<array-key, string>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->string) ? $this->string : []);
    }

    /**
     * @param string $string
     * @return ArrayOfString
     */
    public function withString($string)
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }
}

