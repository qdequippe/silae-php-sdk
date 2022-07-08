<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAxeAnalytique>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAxeAnalytique>
 */
class ArrayOfCPAISWSAxeAnalytique implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSAxeAnalytique
     */
    private $CPAISWSAxeAnalytique;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSAxeAnalytique[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAxeAnalytique>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSAxeAnalytique>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSAxeAnalytique) ? $this->CPAISWSAxeAnalytique : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSAxeAnalytique $CPAISWSAxeAnalytique
     * @return ArrayOfCPAISWSAxeAnalytique
     */
    public function withCPAISWSAxeAnalytique($CPAISWSAxeAnalytique)
    {
        $new = clone $this;
        $new->CPAISWSAxeAnalytique = $CPAISWSAxeAnalytique;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSAxeAnalytique
     */
    public function getCPAISWSAxeAnalytique()
    {
        return $this->CPAISWSAxeAnalytique;
    }
}

