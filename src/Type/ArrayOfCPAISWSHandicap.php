<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSHandicap>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSHandicap>
 */
class ArrayOfCPAISWSHandicap implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSHandicap
     */
    private $CPAISWSHandicap;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSHandicap[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSHandicap>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSHandicap>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSHandicap) ? $this->CPAISWSHandicap : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSHandicap $CPAISWSHandicap
     * @return ArrayOfCPAISWSHandicap
     */
    public function withCPAISWSHandicap($CPAISWSHandicap)
    {
        $new = clone $this;
        $new->CPAISWSHandicap = $CPAISWSHandicap;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSHandicap
     */
    public function getCPAISWSHandicap()
    {
        return $this->CPAISWSHandicap;
    }
}

