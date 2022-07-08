<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\ValeurEV>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\ValeurEV>
 */
class ArrayOfValeurEV implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ValeurEV
     */
    private $ValeurEV;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\ValeurEV[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\ValeurEV>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\ValeurEV>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->ValeurEV) ? $this->ValeurEV : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ValeurEV $ValeurEV
     * @return ArrayOfValeurEV
     */
    public function withValeurEV($ValeurEV)
    {
        $new = clone $this;
        $new->ValeurEV = $ValeurEV;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ValeurEV
     */
    public function getValeurEV()
    {
        return $this->ValeurEV;
    }
}

