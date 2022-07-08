<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CCTASWSCompteNumeroIntitule>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CCTASWSCompteNumeroIntitule>
 */
class ArrayOfCCTASWSCompteNumeroIntitule implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CCTASWSCompteNumeroIntitule
     */
    private $CCTASWSCompteNumeroIntitule;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CCTASWSCompteNumeroIntitule[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CCTASWSCompteNumeroIntitule>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CCTASWSCompteNumeroIntitule>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CCTASWSCompteNumeroIntitule) ? $this->CCTASWSCompteNumeroIntitule : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CCTASWSCompteNumeroIntitule $CCTASWSCompteNumeroIntitule
     * @return ArrayOfCCTASWSCompteNumeroIntitule
     */
    public function withCCTASWSCompteNumeroIntitule($CCTASWSCompteNumeroIntitule)
    {
        $new = clone $this;
        $new->CCTASWSCompteNumeroIntitule = $CCTASWSCompteNumeroIntitule;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CCTASWSCompteNumeroIntitule
     */
    public function getCCTASWSCompteNumeroIntitule()
    {
        return $this->CCTASWSCompteNumeroIntitule;
    }
}

