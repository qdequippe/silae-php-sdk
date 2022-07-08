<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiElementsVariablesTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiElementsVariablesTM>
 */
class ArrayOfCPAISWSSalarieEmploiElementsVariablesTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiElementsVariablesTM
     */
    private $CPAISWSSalarieEmploiElementsVariablesTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiElementsVariablesTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiElementsVariablesTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiElementsVariablesTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSalarieEmploiElementsVariablesTM) ? $this->CPAISWSSalarieEmploiElementsVariablesTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiElementsVariablesTM $CPAISWSSalarieEmploiElementsVariablesTM
     * @return ArrayOfCPAISWSSalarieEmploiElementsVariablesTM
     */
    public function withCPAISWSSalarieEmploiElementsVariablesTM($CPAISWSSalarieEmploiElementsVariablesTM)
    {
        $new = clone $this;
        $new->CPAISWSSalarieEmploiElementsVariablesTM = $CPAISWSSalarieEmploiElementsVariablesTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiElementsVariablesTM
     */
    public function getCPAISWSSalarieEmploiElementsVariablesTM()
    {
        return $this->CPAISWSSalarieEmploiElementsVariablesTM;
    }
}

