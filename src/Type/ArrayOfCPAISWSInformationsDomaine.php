<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomaine>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomaine>
 */
class ArrayOfCPAISWSInformationsDomaine implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomaine
     */
    private $CPAISWSInformationsDomaine;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomaine[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomaine>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomaine>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSInformationsDomaine) ? $this->CPAISWSInformationsDomaine : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomaine $CPAISWSInformationsDomaine
     * @return ArrayOfCPAISWSInformationsDomaine
     */
    public function withCPAISWSInformationsDomaine($CPAISWSInformationsDomaine)
    {
        $new = clone $this;
        $new->CPAISWSInformationsDomaine = $CPAISWSInformationsDomaine;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomaine
     */
    public function getCPAISWSInformationsDomaine()
    {
        return $this->CPAISWSInformationsDomaine;
    }
}

