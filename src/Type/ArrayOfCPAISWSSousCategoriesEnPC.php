<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategoriesEnPC>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategoriesEnPC>
 */
class ArrayOfCPAISWSSousCategoriesEnPC implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategoriesEnPC
     */
    private $CPAISWSSousCategoriesEnPC;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategoriesEnPC[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategoriesEnPC>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategoriesEnPC>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSousCategoriesEnPC) ? $this->CPAISWSSousCategoriesEnPC : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategoriesEnPC $CPAISWSSousCategoriesEnPC
     * @return ArrayOfCPAISWSSousCategoriesEnPC
     */
    public function withCPAISWSSousCategoriesEnPC($CPAISWSSousCategoriesEnPC)
    {
        $new = clone $this;
        $new->CPAISWSSousCategoriesEnPC = $CPAISWSSousCategoriesEnPC;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSousCategoriesEnPC
     */
    public function getCPAISWSSousCategoriesEnPC()
    {
        return $this->CPAISWSSousCategoriesEnPC;
    }
}

