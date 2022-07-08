<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSalarieFiltre>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSalarieFiltre>
 */
class ArrayOfCPAISWSalarieFiltre implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSalarieFiltre
     */
    private $CPAISWSalarieFiltre;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSalarieFiltre[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSalarieFiltre>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSalarieFiltre>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSalarieFiltre) ? $this->CPAISWSalarieFiltre : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSalarieFiltre $CPAISWSalarieFiltre
     * @return ArrayOfCPAISWSalarieFiltre
     */
    public function withCPAISWSalarieFiltre($CPAISWSalarieFiltre)
    {
        $new = clone $this;
        $new->CPAISWSalarieFiltre = $CPAISWSalarieFiltre;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSalarieFiltre
     */
    public function getCPAISWSalarieFiltre()
    {
        return $this->CPAISWSalarieFiltre;
    }
}

