<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclaration>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclaration>
 */
class ArrayOfCPAISWSEtatDeclaration implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclaration
     */
    private $CPAISWSEtatDeclaration;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclaration[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclaration>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclaration>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSEtatDeclaration) ? $this->CPAISWSEtatDeclaration : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclaration $CPAISWSEtatDeclaration
     * @return ArrayOfCPAISWSEtatDeclaration
     */
    public function withCPAISWSEtatDeclaration($CPAISWSEtatDeclaration)
    {
        $new = clone $this;
        $new->CPAISWSEtatDeclaration = $CPAISWSEtatDeclaration;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclaration
     */
    public function getCPAISWSEtatDeclaration()
    {
        return $this->CPAISWSEtatDeclaration;
    }
}

