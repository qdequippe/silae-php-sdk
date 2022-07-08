<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \DateTimeInterface>
 * @psalm-implements \IteratorAggregate<array-key, \DateTimeInterface>
 */
class ArrayOfDateTime implements IteratorAggregate
{
    /**
     * @var \DateTimeInterface
     */
    private $dateTime;

    /**
     * @return \ArrayIterator|\DateTimeInterface[]
     * @phpstan-return \ArrayIterator<array-key, \DateTimeInterface>
     * @psalm-return \ArrayIterator<array-key, \DateTimeInterface>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->dateTime) ? $this->dateTime : []);
    }

    /**
     * @param \DateTimeInterface $dateTime
     * @return ArrayOfDateTime
     */
    public function withDateTime($dateTime)
    {
        $new = clone $this;
        $new->dateTime = $dateTime;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
}

