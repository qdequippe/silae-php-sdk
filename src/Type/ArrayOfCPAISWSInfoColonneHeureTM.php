<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoColonneHeureTM>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoColonneHeureTM>
 */
class ArrayOfCPAISWSInfoColonneHeureTM implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoColonneHeureTM
     */
    private $CPAISWSInfoColonneHeureTM;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSInfoColonneHeureTM[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoColonneHeureTM>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoColonneHeureTM>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSInfoColonneHeureTM) ? $this->CPAISWSInfoColonneHeureTM : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoColonneHeureTM $CPAISWSInfoColonneHeureTM
     * @return ArrayOfCPAISWSInfoColonneHeureTM
     */
    public function withCPAISWSInfoColonneHeureTM($CPAISWSInfoColonneHeureTM)
    {
        $new = clone $this;
        $new->CPAISWSInfoColonneHeureTM = $CPAISWSInfoColonneHeureTM;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSInfoColonneHeureTM
     */
    public function getCPAISWSInfoColonneHeureTM()
    {
        return $this->CPAISWSInfoColonneHeureTM;
    }
}

