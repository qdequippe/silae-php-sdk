<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSLigneBulletin>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSLigneBulletin>
 */
class ArrayOfCPAISWSLigneBulletin implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSLigneBulletin
     */
    private $CPAISWSLigneBulletin;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSLigneBulletin[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSLigneBulletin>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSLigneBulletin>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSLigneBulletin) ? $this->CPAISWSLigneBulletin : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSLigneBulletin $CPAISWSLigneBulletin
     * @return ArrayOfCPAISWSLigneBulletin
     */
    public function withCPAISWSLigneBulletin($CPAISWSLigneBulletin)
    {
        $new = clone $this;
        $new->CPAISWSLigneBulletin = $CPAISWSLigneBulletin;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSLigneBulletin
     */
    public function getCPAISWSLigneBulletin()
    {
        return $this->CPAISWSLigneBulletin;
    }
}

