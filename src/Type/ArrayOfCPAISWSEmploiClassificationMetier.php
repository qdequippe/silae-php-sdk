<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier>
 */
class ArrayOfCPAISWSEmploiClassificationMetier implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier
     */
    private $CPAISWSEmploiClassificationMetier;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSEmploiClassificationMetier) ? $this->CPAISWSEmploiClassificationMetier : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier $CPAISWSEmploiClassificationMetier
     * @return ArrayOfCPAISWSEmploiClassificationMetier
     */
    public function withCPAISWSEmploiClassificationMetier($CPAISWSEmploiClassificationMetier)
    {
        $new = clone $this;
        $new->CPAISWSEmploiClassificationMetier = $CPAISWSEmploiClassificationMetier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier
     */
    public function getCPAISWSEmploiClassificationMetier()
    {
        return $this->CPAISWSEmploiClassificationMetier;
    }
}

