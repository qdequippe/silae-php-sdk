<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesUtilisateurs>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesUtilisateurs>
 */
class ArrayOfCPAISWSStatistiquesUtilisateurs implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesUtilisateurs
     */
    private $CPAISWSStatistiquesUtilisateurs;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesUtilisateurs[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesUtilisateurs>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesUtilisateurs>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSStatistiquesUtilisateurs) ? $this->CPAISWSStatistiquesUtilisateurs : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesUtilisateurs $CPAISWSStatistiquesUtilisateurs
     * @return ArrayOfCPAISWSStatistiquesUtilisateurs
     */
    public function withCPAISWSStatistiquesUtilisateurs($CPAISWSStatistiquesUtilisateurs)
    {
        $new = clone $this;
        $new->CPAISWSStatistiquesUtilisateurs = $CPAISWSStatistiquesUtilisateurs;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesUtilisateurs
     */
    public function getCPAISWSStatistiquesUtilisateurs()
    {
        return $this->CPAISWSStatistiquesUtilisateurs;
    }
}

