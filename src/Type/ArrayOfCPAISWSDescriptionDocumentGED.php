<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionDocumentGED>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionDocumentGED>
 */
class ArrayOfCPAISWSDescriptionDocumentGED implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionDocumentGED
     */
    private $CPAISWSDescriptionDocumentGED;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionDocumentGED[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionDocumentGED>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionDocumentGED>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSDescriptionDocumentGED) ? $this->CPAISWSDescriptionDocumentGED : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionDocumentGED $CPAISWSDescriptionDocumentGED
     * @return ArrayOfCPAISWSDescriptionDocumentGED
     */
    public function withCPAISWSDescriptionDocumentGED($CPAISWSDescriptionDocumentGED)
    {
        $new = clone $this;
        $new->CPAISWSDescriptionDocumentGED = $CPAISWSDescriptionDocumentGED;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionDocumentGED
     */
    public function getCPAISWSDescriptionDocumentGED()
    {
        return $this->CPAISWSDescriptionDocumentGED;
    }
}

