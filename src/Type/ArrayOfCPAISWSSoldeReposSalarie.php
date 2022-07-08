<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeReposSalarie>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeReposSalarie>
 */
class ArrayOfCPAISWSSoldeReposSalarie implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeReposSalarie
     */
    private $CPAISWSSoldeReposSalarie;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeReposSalarie[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeReposSalarie>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeReposSalarie>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSoldeReposSalarie) ? $this->CPAISWSSoldeReposSalarie : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeReposSalarie $CPAISWSSoldeReposSalarie
     * @return ArrayOfCPAISWSSoldeReposSalarie
     */
    public function withCPAISWSSoldeReposSalarie($CPAISWSSoldeReposSalarie)
    {
        $new = clone $this;
        $new->CPAISWSSoldeReposSalarie = $CPAISWSSoldeReposSalarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSoldeReposSalarie
     */
    public function getCPAISWSSoldeReposSalarie()
    {
        return $this->CPAISWSSoldeReposSalarie;
    }
}

