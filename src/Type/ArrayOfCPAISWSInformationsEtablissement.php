<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsEtablissement>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsEtablissement>
 */
class ArrayOfCPAISWSInformationsEtablissement implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsEtablissement
     */
    private $CPAISWSInformationsEtablissement;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsEtablissement[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsEtablissement>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsEtablissement>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSInformationsEtablissement) ? $this->CPAISWSInformationsEtablissement : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsEtablissement $CPAISWSInformationsEtablissement
     * @return ArrayOfCPAISWSInformationsEtablissement
     */
    public function withCPAISWSInformationsEtablissement($CPAISWSInformationsEtablissement)
    {
        $new = clone $this;
        $new->CPAISWSInformationsEtablissement = $CPAISWSInformationsEtablissement;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsEtablissement
     */
    public function getCPAISWSInformationsEtablissement()
    {
        return $this->CPAISWSInformationsEtablissement;
    }
}

