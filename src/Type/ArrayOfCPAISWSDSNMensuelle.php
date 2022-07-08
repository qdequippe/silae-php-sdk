<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDSNMensuelle>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDSNMensuelle>
 */
class ArrayOfCPAISWSDSNMensuelle implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDSNMensuelle
     */
    private $CPAISWSDSNMensuelle;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSDSNMensuelle[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDSNMensuelle>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDSNMensuelle>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSDSNMensuelle) ? $this->CPAISWSDSNMensuelle : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSDSNMensuelle $CPAISWSDSNMensuelle
     * @return ArrayOfCPAISWSDSNMensuelle
     */
    public function withCPAISWSDSNMensuelle($CPAISWSDSNMensuelle)
    {
        $new = clone $this;
        $new->CPAISWSDSNMensuelle = $CPAISWSDSNMensuelle;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSDSNMensuelle
     */
    public function getCPAISWSDSNMensuelle()
    {
        return $this->CPAISWSDSNMensuelle;
    }
}

