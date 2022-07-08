<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategorie>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategorie>
 */
class ArrayOfCPAISWSSousCategorie implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategorie
     */
    private $CPAISWSSousCategorie;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategorie[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategorie>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategorie>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSousCategorie) ? $this->CPAISWSSousCategorie : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategorie $CPAISWSSousCategorie
     * @return ArrayOfCPAISWSSousCategorie
     */
    public function withCPAISWSSousCategorie($CPAISWSSousCategorie)
    {
        $new = clone $this;
        $new->CPAISWSSousCategorie = $CPAISWSSousCategorie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategorie
     */
    public function getCPAISWSSousCategorie()
    {
        return $this->CPAISWSSousCategorie;
    }
}

