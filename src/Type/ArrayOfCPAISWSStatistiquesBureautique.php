<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesBureautique>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesBureautique>
 */
class ArrayOfCPAISWSStatistiquesBureautique implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesBureautique
     */
    private $CPAISWSStatistiquesBureautique;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesBureautique[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesBureautique>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesBureautique>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSStatistiquesBureautique) ? $this->CPAISWSStatistiquesBureautique : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesBureautique $CPAISWSStatistiquesBureautique
     * @return ArrayOfCPAISWSStatistiquesBureautique
     */
    public function withCPAISWSStatistiquesBureautique($CPAISWSStatistiquesBureautique)
    {
        $new = clone $this;
        $new->CPAISWSStatistiquesBureautique = $CPAISWSStatistiquesBureautique;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesBureautique
     */
    public function getCPAISWSStatistiquesBureautique()
    {
        return $this->CPAISWSStatistiquesBureautique;
    }
}

