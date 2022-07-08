<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSTypeDocumentGED>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSTypeDocumentGED>
 */
class ArrayOfCPAISWSTypeDocumentGED implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSTypeDocumentGED
     */
    private $CPAISWSTypeDocumentGED;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSTypeDocumentGED[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSTypeDocumentGED>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSTypeDocumentGED>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSTypeDocumentGED) ? $this->CPAISWSTypeDocumentGED : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSTypeDocumentGED $CPAISWSTypeDocumentGED
     * @return ArrayOfCPAISWSTypeDocumentGED
     */
    public function withCPAISWSTypeDocumentGED($CPAISWSTypeDocumentGED)
    {
        $new = clone $this;
        $new->CPAISWSTypeDocumentGED = $CPAISWSTypeDocumentGED;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSTypeDocumentGED
     */
    public function getCPAISWSTypeDocumentGED()
    {
        return $this->CPAISWSTypeDocumentGED;
    }
}

