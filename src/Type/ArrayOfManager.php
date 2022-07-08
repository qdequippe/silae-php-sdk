<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\Manager>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\Manager>
 */
class ArrayOfManager implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\Manager
     */
    private $Manager;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\Manager[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\Manager>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\Manager>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->Manager) ? $this->Manager : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\Manager $Manager
     * @return ArrayOfManager
     */
    public function withManager($Manager)
    {
        $new = clone $this;
        $new->Manager = $Manager;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\Manager
     */
    public function getManager()
    {
        return $this->Manager;
    }
}

