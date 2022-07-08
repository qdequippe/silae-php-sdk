<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSColonneRecapValidationTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSColonneRecapValidationTM>
 */
class ArrayOfCPAISWSColonneRecapValidationTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSColonneRecapValidationTM
     */
    private $CPAISWSColonneRecapValidationTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSColonneRecapValidationTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSColonneRecapValidationTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSColonneRecapValidationTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSColonneRecapValidationTM) ? $this->CPAISWSColonneRecapValidationTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSColonneRecapValidationTM $CPAISWSColonneRecapValidationTM
     * @return ArrayOfCPAISWSColonneRecapValidationTM
     */
    public function withCPAISWSColonneRecapValidationTM($CPAISWSColonneRecapValidationTM)
    {
        $new = clone $this;
        $new->CPAISWSColonneRecapValidationTM = $CPAISWSColonneRecapValidationTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSColonneRecapValidationTM
     */
    public function getCPAISWSColonneRecapValidationTM()
    {
        return $this->CPAISWSColonneRecapValidationTM;
    }
}

