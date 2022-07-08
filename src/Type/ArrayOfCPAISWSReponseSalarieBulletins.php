<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletins>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletins>
 */
class ArrayOfCPAISWSReponseSalarieBulletins implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletins
     */
    private $CPAISWSReponseSalarieBulletins;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletins[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletins>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletins>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSReponseSalarieBulletins) ? $this->CPAISWSReponseSalarieBulletins : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletins $CPAISWSReponseSalarieBulletins
     * @return ArrayOfCPAISWSReponseSalarieBulletins
     */
    public function withCPAISWSReponseSalarieBulletins($CPAISWSReponseSalarieBulletins)
    {
        $new = clone $this;
        $new->CPAISWSReponseSalarieBulletins = $CPAISWSReponseSalarieBulletins;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletins
     */
    public function getCPAISWSReponseSalarieBulletins()
    {
        return $this->CPAISWSReponseSalarieBulletins;
    }
}

