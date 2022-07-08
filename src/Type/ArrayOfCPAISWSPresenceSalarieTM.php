<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPresenceSalarieTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPresenceSalarieTM>
 */
class ArrayOfCPAISWSPresenceSalarieTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSPresenceSalarieTM
     */
    private $CPAISWSPresenceSalarieTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSPresenceSalarieTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPresenceSalarieTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSPresenceSalarieTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSPresenceSalarieTM) ? $this->CPAISWSPresenceSalarieTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSPresenceSalarieTM $CPAISWSPresenceSalarieTM
     * @return ArrayOfCPAISWSPresenceSalarieTM
     */
    public function withCPAISWSPresenceSalarieTM($CPAISWSPresenceSalarieTM)
    {
        $new = clone $this;
        $new->CPAISWSPresenceSalarieTM = $CPAISWSPresenceSalarieTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSPresenceSalarieTM
     */
    public function getCPAISWSPresenceSalarieTM()
    {
        return $this->CPAISWSPresenceSalarieTM;
    }
}

