<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDonneesAxeAnalytiqueSalarie>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDonneesAxeAnalytiqueSalarie>
 */
class ArrayOfCPAISWSDonneesAxeAnalytiqueSalarie implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDonneesAxeAnalytiqueSalarie
     */
    private $CPAISWSDonneesAxeAnalytiqueSalarie;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSDonneesAxeAnalytiqueSalarie[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDonneesAxeAnalytiqueSalarie>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSDonneesAxeAnalytiqueSalarie>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSDonneesAxeAnalytiqueSalarie) ? $this->CPAISWSDonneesAxeAnalytiqueSalarie : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSDonneesAxeAnalytiqueSalarie $CPAISWSDonneesAxeAnalytiqueSalarie
     * @return ArrayOfCPAISWSDonneesAxeAnalytiqueSalarie
     */
    public function withCPAISWSDonneesAxeAnalytiqueSalarie($CPAISWSDonneesAxeAnalytiqueSalarie)
    {
        $new = clone $this;
        $new->CPAISWSDonneesAxeAnalytiqueSalarie = $CPAISWSDonneesAxeAnalytiqueSalarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSDonneesAxeAnalytiqueSalarie
     */
    public function getCPAISWSDonneesAxeAnalytiqueSalarie()
    {
        return $this->CPAISWSDonneesAxeAnalytiqueSalarie;
    }
}

