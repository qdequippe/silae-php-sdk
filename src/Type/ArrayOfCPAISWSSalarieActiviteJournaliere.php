<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournaliere>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournaliere>
 */
class ArrayOfCPAISWSSalarieActiviteJournaliere implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournaliere
     */
    private $CPAISWSSalarieActiviteJournaliere;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournaliere[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournaliere>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournaliere>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieActiviteJournaliere) ? $this->CPAISWSSalarieActiviteJournaliere : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournaliere $CPAISWSSalarieActiviteJournaliere
     * @return ArrayOfCPAISWSSalarieActiviteJournaliere
     */
    public function withCPAISWSSalarieActiviteJournaliere($CPAISWSSalarieActiviteJournaliere)
    {
        $new = clone $this;
        $new->CPAISWSSalarieActiviteJournaliere = $CPAISWSSalarieActiviteJournaliere;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieActiviteJournaliere
     */
    public function getCPAISWSSalarieActiviteJournaliere()
    {
        return $this->CPAISWSSalarieActiviteJournaliere;
    }
}

