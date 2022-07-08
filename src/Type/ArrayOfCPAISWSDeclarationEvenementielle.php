<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDeclarationEvenementielle>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDeclarationEvenementielle>
 */
class ArrayOfCPAISWSDeclarationEvenementielle implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDeclarationEvenementielle
     */
    private $CPAISWSDeclarationEvenementielle;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSDeclarationEvenementielle[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDeclarationEvenementielle>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDeclarationEvenementielle>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSDeclarationEvenementielle) ? $this->CPAISWSDeclarationEvenementielle : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSDeclarationEvenementielle $CPAISWSDeclarationEvenementielle
     * @return ArrayOfCPAISWSDeclarationEvenementielle
     */
    public function withCPAISWSDeclarationEvenementielle($CPAISWSDeclarationEvenementielle)
    {
        $new = clone $this;
        $new->CPAISWSDeclarationEvenementielle = $CPAISWSDeclarationEvenementielle;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSDeclarationEvenementielle
     */
    public function getCPAISWSDeclarationEvenementielle()
    {
        return $this->CPAISWSDeclarationEvenementielle;
    }
}

