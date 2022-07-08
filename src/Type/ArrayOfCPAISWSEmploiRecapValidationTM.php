<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiRecapValidationTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiRecapValidationTM>
 */
class ArrayOfCPAISWSEmploiRecapValidationTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiRecapValidationTM
     */
    private $CPAISWSEmploiRecapValidationTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiRecapValidationTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiRecapValidationTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiRecapValidationTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSEmploiRecapValidationTM) ? $this->CPAISWSEmploiRecapValidationTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiRecapValidationTM $CPAISWSEmploiRecapValidationTM
     * @return ArrayOfCPAISWSEmploiRecapValidationTM
     */
    public function withCPAISWSEmploiRecapValidationTM($CPAISWSEmploiRecapValidationTM)
    {
        $new = clone $this;
        $new->CPAISWSEmploiRecapValidationTM = $CPAISWSEmploiRecapValidationTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiRecapValidationTM
     */
    public function getCPAISWSEmploiRecapValidationTM()
    {
        return $this->CPAISWSEmploiRecapValidationTM;
    }
}

