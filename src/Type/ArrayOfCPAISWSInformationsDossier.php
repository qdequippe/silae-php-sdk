<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDossier>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDossier>
 */
class ArrayOfCPAISWSInformationsDossier implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDossier
     */
    private $CPAISWSInformationsDossier;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDossier[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDossier>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDossier>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSInformationsDossier) ? $this->CPAISWSInformationsDossier : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDossier $CPAISWSInformationsDossier
     * @return ArrayOfCPAISWSInformationsDossier
     */
    public function withCPAISWSInformationsDossier($CPAISWSInformationsDossier)
    {
        $new = clone $this;
        $new->CPAISWSInformationsDossier = $CPAISWSInformationsDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDossier
     */
    public function getCPAISWSInformationsDossier()
    {
        return $this->CPAISWSInformationsDossier;
    }
}

