<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCCNSociete>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCCNSociete>
 */
class ArrayOfCPAISWSCCNSociete implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSCCNSociete
     */
    private $CPAISWSCCNSociete;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSCCNSociete[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCCNSociete>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSCCNSociete>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSCCNSociete) ? $this->CPAISWSCCNSociete : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSCCNSociete $CPAISWSCCNSociete
     * @return ArrayOfCPAISWSCCNSociete
     */
    public function withCPAISWSCCNSociete($CPAISWSCCNSociete)
    {
        $new = clone $this;
        $new->CPAISWSCCNSociete = $CPAISWSCCNSociete;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSCCNSociete
     */
    public function getCPAISWSCCNSociete()
    {
        return $this->CPAISWSCCNSociete;
    }
}

