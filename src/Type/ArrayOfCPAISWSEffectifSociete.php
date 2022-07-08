<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifSociete>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifSociete>
 */
class ArrayOfCPAISWSEffectifSociete implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifSociete
     */
    private $CPAISWSEffectifSociete;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifSociete[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifSociete>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifSociete>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSEffectifSociete) ? $this->CPAISWSEffectifSociete : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifSociete $CPAISWSEffectifSociete
     * @return ArrayOfCPAISWSEffectifSociete
     */
    public function withCPAISWSEffectifSociete($CPAISWSEffectifSociete)
    {
        $new = clone $this;
        $new->CPAISWSEffectifSociete = $CPAISWSEffectifSociete;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifSociete
     */
    public function getCPAISWSEffectifSociete()
    {
        return $this->CPAISWSEffectifSociete;
    }
}

