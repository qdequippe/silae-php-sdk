<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSTaxeTransport>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSTaxeTransport>
 */
class ArrayOfCPAISWSTaxeTransport implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSTaxeTransport
     */
    private $CPAISWSTaxeTransport;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSTaxeTransport[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSTaxeTransport>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSTaxeTransport>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSTaxeTransport) ? $this->CPAISWSTaxeTransport : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSTaxeTransport $CPAISWSTaxeTransport
     * @return ArrayOfCPAISWSTaxeTransport
     */
    public function withCPAISWSTaxeTransport($CPAISWSTaxeTransport)
    {
        $new = clone $this;
        $new->CPAISWSTaxeTransport = $CPAISWSTaxeTransport;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSTaxeTransport
     */
    public function getCPAISWSTaxeTransport()
    {
        return $this->CPAISWSTaxeTransport;
    }
}

