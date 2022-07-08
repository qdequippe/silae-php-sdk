<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissement>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissement>
 */
class ArrayOfCPAISWSEtablissement implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissement
     */
    private $CPAISWSEtablissement;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissement[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissement>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissement>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSEtablissement) ? $this->CPAISWSEtablissement : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissement $CPAISWSEtablissement
     * @return ArrayOfCPAISWSEtablissement
     */
    public function withCPAISWSEtablissement($CPAISWSEtablissement)
    {
        $new = clone $this;
        $new->CPAISWSEtablissement = $CPAISWSEtablissement;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissement
     */
    public function getCPAISWSEtablissement()
    {
        return $this->CPAISWSEtablissement;
    }
}

