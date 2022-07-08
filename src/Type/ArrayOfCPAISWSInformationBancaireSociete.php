<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationBancaireSociete>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationBancaireSociete>
 */
class ArrayOfCPAISWSInformationBancaireSociete implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationBancaireSociete
     */
    private $CPAISWSInformationBancaireSociete;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSInformationBancaireSociete[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationBancaireSociete>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationBancaireSociete>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSInformationBancaireSociete) ? $this->CPAISWSInformationBancaireSociete : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationBancaireSociete $CPAISWSInformationBancaireSociete
     * @return ArrayOfCPAISWSInformationBancaireSociete
     */
    public function withCPAISWSInformationBancaireSociete($CPAISWSInformationBancaireSociete)
    {
        $new = clone $this;
        $new->CPAISWSInformationBancaireSociete = $CPAISWSInformationBancaireSociete;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationBancaireSociete
     */
    public function getCPAISWSInformationBancaireSociete()
    {
        return $this->CPAISWSInformationBancaireSociete;
    }
}

