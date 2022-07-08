<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoSaisieHeureTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoSaisieHeureTM>
 */
class ArrayOfCPAISWSInfoSaisieHeureTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoSaisieHeureTM
     */
    private $CPAISWSInfoSaisieHeureTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSInfoSaisieHeureTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoSaisieHeureTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoSaisieHeureTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSInfoSaisieHeureTM) ? $this->CPAISWSInfoSaisieHeureTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoSaisieHeureTM $CPAISWSInfoSaisieHeureTM
     * @return ArrayOfCPAISWSInfoSaisieHeureTM
     */
    public function withCPAISWSInfoSaisieHeureTM($CPAISWSInfoSaisieHeureTM)
    {
        $new = clone $this;
        $new->CPAISWSInfoSaisieHeureTM = $CPAISWSInfoSaisieHeureTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoSaisieHeureTM
     */
    public function getCPAISWSInfoSaisieHeureTM()
    {
        return $this->CPAISWSInfoSaisieHeureTM;
    }
}

