<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifEtablissement>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifEtablissement>
 */
class ArrayOfCPAISWSEffectifEtablissement implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifEtablissement
     */
    private $CPAISWSEffectifEtablissement;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifEtablissement[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifEtablissement>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifEtablissement>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSEffectifEtablissement) ? $this->CPAISWSEffectifEtablissement : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifEtablissement $CPAISWSEffectifEtablissement
     * @return ArrayOfCPAISWSEffectifEtablissement
     */
    public function withCPAISWSEffectifEtablissement($CPAISWSEffectifEtablissement)
    {
        $new = clone $this;
        $new->CPAISWSEffectifEtablissement = $CPAISWSEffectifEtablissement;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEffectifEtablissement
     */
    public function getCPAISWSEffectifEtablissement()
    {
        return $this->CPAISWSEffectifEtablissement;
    }
}

