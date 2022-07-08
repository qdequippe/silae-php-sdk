<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAcompteTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAcompteTM>
 */
class ArrayOfCPAISWSAcompteTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSAcompteTM
     */
    private $CPAISWSAcompteTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSAcompteTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAcompteTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAcompteTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSAcompteTM) ? $this->CPAISWSAcompteTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSAcompteTM $CPAISWSAcompteTM
     * @return ArrayOfCPAISWSAcompteTM
     */
    public function withCPAISWSAcompteTM($CPAISWSAcompteTM)
    {
        $new = clone $this;
        $new->CPAISWSAcompteTM = $CPAISWSAcompteTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSAcompteTM
     */
    public function getCPAISWSAcompteTM()
    {
        return $this->CPAISWSAcompteTM;
    }
}

