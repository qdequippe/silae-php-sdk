<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSVariableASaisir>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSVariableASaisir>
 */
class ArrayOfCPAISWSVariableASaisir implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSVariableASaisir
     */
    private $CPAISWSVariableASaisir;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSVariableASaisir[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSVariableASaisir>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSVariableASaisir>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSVariableASaisir) ? $this->CPAISWSVariableASaisir : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSVariableASaisir $CPAISWSVariableASaisir
     * @return ArrayOfCPAISWSVariableASaisir
     */
    public function withCPAISWSVariableASaisir($CPAISWSVariableASaisir)
    {
        $new = clone $this;
        $new->CPAISWSVariableASaisir = $CPAISWSVariableASaisir;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSVariableASaisir
     */
    public function getCPAISWSVariableASaisir()
    {
        return $this->CPAISWSVariableASaisir;
    }
}

