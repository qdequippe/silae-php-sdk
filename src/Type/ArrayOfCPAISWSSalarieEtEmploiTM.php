<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEtEmploiTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEtEmploiTM>
 */
class ArrayOfCPAISWSSalarieEtEmploiTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEtEmploiTM
     */
    private $CPAISWSSalarieEtEmploiTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEtEmploiTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEtEmploiTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEtEmploiTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieEtEmploiTM) ? $this->CPAISWSSalarieEtEmploiTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEtEmploiTM $CPAISWSSalarieEtEmploiTM
     * @return ArrayOfCPAISWSSalarieEtEmploiTM
     */
    public function withCPAISWSSalarieEtEmploiTM($CPAISWSSalarieEtEmploiTM)
    {
        $new = clone $this;
        $new->CPAISWSSalarieEtEmploiTM = $CPAISWSSalarieEtEmploiTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEtEmploiTM
     */
    public function getCPAISWSSalarieEtEmploiTM()
    {
        return $this->CPAISWSSalarieEtEmploiTM;
    }
}

