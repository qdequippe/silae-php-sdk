<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSMailPieceJointe>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSMailPieceJointe>
 */
class ArrayOfCPAISWSMailPieceJointe implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSMailPieceJointe
     */
    private $CPAISWSMailPieceJointe;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSMailPieceJointe[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSMailPieceJointe>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSMailPieceJointe>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSMailPieceJointe) ? $this->CPAISWSMailPieceJointe : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSMailPieceJointe $CPAISWSMailPieceJointe
     * @return ArrayOfCPAISWSMailPieceJointe
     */
    public function withCPAISWSMailPieceJointe($CPAISWSMailPieceJointe)
    {
        $new = clone $this;
        $new->CPAISWSMailPieceJointe = $CPAISWSMailPieceJointe;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSMailPieceJointe
     */
    public function getCPAISWSMailPieceJointe()
    {
        return $this->CPAISWSMailPieceJointe;
    }
}

