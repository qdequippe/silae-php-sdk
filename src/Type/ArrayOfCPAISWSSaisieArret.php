<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieArret>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieArret>
 */
class ArrayOfCPAISWSSaisieArret implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieArret
     */
    private $CPAISWSSaisieArret;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieArret[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieArret>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieArret>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSSaisieArret) ? $this->CPAISWSSaisieArret : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieArret $CPAISWSSaisieArret
     * @return ArrayOfCPAISWSSaisieArret
     */
    public function withCPAISWSSaisieArret($CPAISWSSaisieArret)
    {
        $new = clone $this;
        $new->CPAISWSSaisieArret = $CPAISWSSaisieArret;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSaisieArret
     */
    public function getCPAISWSSaisieArret()
    {
        return $this->CPAISWSSaisieArret;
    }
}

