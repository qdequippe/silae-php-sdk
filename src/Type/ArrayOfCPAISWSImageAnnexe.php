<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSImageAnnexe>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSImageAnnexe>
 */
class ArrayOfCPAISWSImageAnnexe implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSImageAnnexe
     */
    private $CPAISWSImageAnnexe;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSImageAnnexe[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSImageAnnexe>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSImageAnnexe>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSImageAnnexe) ? $this->CPAISWSImageAnnexe : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSImageAnnexe $CPAISWSImageAnnexe
     * @return ArrayOfCPAISWSImageAnnexe
     */
    public function withCPAISWSImageAnnexe($CPAISWSImageAnnexe)
    {
        $new = clone $this;
        $new->CPAISWSImageAnnexe = $CPAISWSImageAnnexe;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSImageAnnexe
     */
    public function getCPAISWSImageAnnexe()
    {
        return $this->CPAISWSImageAnnexe;
    }
}

