<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\ElementVariable>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\ElementVariable>
 */
class ArrayOfElementVariable implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ElementVariable
     */
    private $ElementVariable;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\ElementVariable[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\ElementVariable>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\ElementVariable>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->ElementVariable) ? $this->ElementVariable : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ElementVariable $ElementVariable
     * @return ArrayOfElementVariable
     */
    public function withElementVariable($ElementVariable)
    {
        $new = clone $this;
        $new->ElementVariable = $ElementVariable;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ElementVariable
     */
    public function getElementVariable()
    {
        return $this->ElementVariable;
    }
}

