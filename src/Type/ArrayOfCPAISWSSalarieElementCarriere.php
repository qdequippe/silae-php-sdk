<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementCarriere>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementCarriere>
 */
class ArrayOfCPAISWSSalarieElementCarriere implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementCarriere
     */
    private $CPAISWSSalarieElementCarriere;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementCarriere[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementCarriere>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementCarriere>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieElementCarriere) ? $this->CPAISWSSalarieElementCarriere : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementCarriere $CPAISWSSalarieElementCarriere
     * @return ArrayOfCPAISWSSalarieElementCarriere
     */
    public function withCPAISWSSalarieElementCarriere($CPAISWSSalarieElementCarriere)
    {
        $new = clone $this;
        $new->CPAISWSSalarieElementCarriere = $CPAISWSSalarieElementCarriere;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieElementCarriere
     */
    public function getCPAISWSSalarieElementCarriere()
    {
        return $this->CPAISWSSalarieElementCarriere;
    }
}

