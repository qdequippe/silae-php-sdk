<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclarationRetour>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclarationRetour>
 */
class ArrayOfCPAISWSEtatDeclarationRetour implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclarationRetour
     */
    private $CPAISWSEtatDeclarationRetour;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclarationRetour[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclarationRetour>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclarationRetour>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSEtatDeclarationRetour) ? $this->CPAISWSEtatDeclarationRetour : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclarationRetour $CPAISWSEtatDeclarationRetour
     * @return ArrayOfCPAISWSEtatDeclarationRetour
     */
    public function withCPAISWSEtatDeclarationRetour($CPAISWSEtatDeclarationRetour)
    {
        $new = clone $this;
        $new->CPAISWSEtatDeclarationRetour = $CPAISWSEtatDeclarationRetour;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEtatDeclarationRetour
     */
    public function getCPAISWSEtatDeclarationRetour()
    {
        return $this->CPAISWSEtatDeclarationRetour;
    }
}

