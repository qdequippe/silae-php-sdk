<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionCompleteDocumentGED>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionCompleteDocumentGED>
 */
class ArrayOfCPAISWSDescriptionCompleteDocumentGED implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionCompleteDocumentGED
     */
    private $CPAISWSDescriptionCompleteDocumentGED;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionCompleteDocumentGED[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionCompleteDocumentGED>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionCompleteDocumentGED>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSDescriptionCompleteDocumentGED) ? $this->CPAISWSDescriptionCompleteDocumentGED : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionCompleteDocumentGED $CPAISWSDescriptionCompleteDocumentGED
     * @return ArrayOfCPAISWSDescriptionCompleteDocumentGED
     */
    public function withCPAISWSDescriptionCompleteDocumentGED($CPAISWSDescriptionCompleteDocumentGED)
    {
        $new = clone $this;
        $new->CPAISWSDescriptionCompleteDocumentGED = $CPAISWSDescriptionCompleteDocumentGED;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSDescriptionCompleteDocumentGED
     */
    public function getCPAISWSDescriptionCompleteDocumentGED()
    {
        return $this->CPAISWSDescriptionCompleteDocumentGED;
    }
}

