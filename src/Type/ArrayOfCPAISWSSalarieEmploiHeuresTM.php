<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiHeuresTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiHeuresTM>
 */
class ArrayOfCPAISWSSalarieEmploiHeuresTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiHeuresTM
     */
    private $CPAISWSSalarieEmploiHeuresTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiHeuresTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiHeuresTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiHeuresTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieEmploiHeuresTM) ? $this->CPAISWSSalarieEmploiHeuresTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiHeuresTM $CPAISWSSalarieEmploiHeuresTM
     * @return ArrayOfCPAISWSSalarieEmploiHeuresTM
     */
    public function withCPAISWSSalarieEmploiHeuresTM($CPAISWSSalarieEmploiHeuresTM)
    {
        $new = clone $this;
        $new->CPAISWSSalarieEmploiHeuresTM = $CPAISWSSalarieEmploiHeuresTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiHeuresTM
     */
    public function getCPAISWSSalarieEmploiHeuresTM()
    {
        return $this->CPAISWSSalarieEmploiHeuresTM;
    }
}

