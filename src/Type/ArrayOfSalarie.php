<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\Salarie>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\Salarie>
 */
class ArrayOfSalarie implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\Salarie
     */
    private $Salarie;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\Salarie[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\Salarie>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\Salarie>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->Salarie) ? $this->Salarie : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\Salarie $Salarie
     * @return ArrayOfSalarie
     */
    public function withSalarie($Salarie)
    {
        $new = clone $this;
        $new->Salarie = $Salarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\Salarie
     */
    public function getSalarie()
    {
        return $this->Salarie;
    }
}

