<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieRecapValidationTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieRecapValidationTM>
 */
class ArrayOfCPAISWSSalarieRecapValidationTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieRecapValidationTM
     */
    private $CPAISWSSalarieRecapValidationTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieRecapValidationTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieRecapValidationTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieRecapValidationTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieRecapValidationTM) ? $this->CPAISWSSalarieRecapValidationTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieRecapValidationTM $CPAISWSSalarieRecapValidationTM
     * @return ArrayOfCPAISWSSalarieRecapValidationTM
     */
    public function withCPAISWSSalarieRecapValidationTM($CPAISWSSalarieRecapValidationTM)
    {
        $new = clone $this;
        $new->CPAISWSSalarieRecapValidationTM = $CPAISWSSalarieRecapValidationTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieRecapValidationTM
     */
    public function getCPAISWSSalarieRecapValidationTM()
    {
        return $this->CPAISWSSalarieRecapValidationTM;
    }
}

