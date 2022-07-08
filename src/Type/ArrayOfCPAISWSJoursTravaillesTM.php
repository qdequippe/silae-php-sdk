<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSJoursTravaillesTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSJoursTravaillesTM>
 */
class ArrayOfCPAISWSJoursTravaillesTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSJoursTravaillesTM
     */
    private $CPAISWSJoursTravaillesTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSJoursTravaillesTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSJoursTravaillesTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSJoursTravaillesTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSJoursTravaillesTM) ? $this->CPAISWSJoursTravaillesTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSJoursTravaillesTM $CPAISWSJoursTravaillesTM
     * @return ArrayOfCPAISWSJoursTravaillesTM
     */
    public function withCPAISWSJoursTravaillesTM($CPAISWSJoursTravaillesTM)
    {
        $new = clone $this;
        $new->CPAISWSJoursTravaillesTM = $CPAISWSJoursTravaillesTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSJoursTravaillesTM
     */
    public function getCPAISWSJoursTravaillesTM()
    {
        return $this->CPAISWSJoursTravaillesTM;
    }
}

