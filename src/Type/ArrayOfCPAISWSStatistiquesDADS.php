<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesDADS>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesDADS>
 */
class ArrayOfCPAISWSStatistiquesDADS implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesDADS
     */
    private $CPAISWSStatistiquesDADS;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesDADS[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesDADS>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesDADS>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSStatistiquesDADS) ? $this->CPAISWSStatistiquesDADS : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesDADS $CPAISWSStatistiquesDADS
     * @return ArrayOfCPAISWSStatistiquesDADS
     */
    public function withCPAISWSStatistiquesDADS($CPAISWSStatistiquesDADS)
    {
        $new = clone $this;
        $new->CPAISWSStatistiquesDADS = $CPAISWSStatistiquesDADS;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesDADS
     */
    public function getCPAISWSStatistiquesDADS()
    {
        return $this->CPAISWSStatistiquesDADS;
    }
}

