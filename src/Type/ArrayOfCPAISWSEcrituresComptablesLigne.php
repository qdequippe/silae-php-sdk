<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptablesLigne>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptablesLigne>
 */
class ArrayOfCPAISWSEcrituresComptablesLigne implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptablesLigne
     */
    private $CPAISWSEcrituresComptablesLigne;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptablesLigne[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptablesLigne>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptablesLigne>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSEcrituresComptablesLigne) ? $this->CPAISWSEcrituresComptablesLigne : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptablesLigne $CPAISWSEcrituresComptablesLigne
     * @return ArrayOfCPAISWSEcrituresComptablesLigne
     */
    public function withCPAISWSEcrituresComptablesLigne($CPAISWSEcrituresComptablesLigne)
    {
        $new = clone $this;
        $new->CPAISWSEcrituresComptablesLigne = $CPAISWSEcrituresComptablesLigne;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptablesLigne
     */
    public function getCPAISWSEcrituresComptablesLigne()
    {
        return $this->CPAISWSEcrituresComptablesLigne;
    }
}

