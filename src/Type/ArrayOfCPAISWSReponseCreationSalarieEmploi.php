<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseCreationSalarieEmploi>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseCreationSalarieEmploi>
 */
class ArrayOfCPAISWSReponseCreationSalarieEmploi implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseCreationSalarieEmploi
     */
    private $CPAISWSReponseCreationSalarieEmploi;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSReponseCreationSalarieEmploi[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseCreationSalarieEmploi>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseCreationSalarieEmploi>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSReponseCreationSalarieEmploi) ? $this->CPAISWSReponseCreationSalarieEmploi : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseCreationSalarieEmploi $CPAISWSReponseCreationSalarieEmploi
     * @return ArrayOfCPAISWSReponseCreationSalarieEmploi
     */
    public function withCPAISWSReponseCreationSalarieEmploi($CPAISWSReponseCreationSalarieEmploi)
    {
        $new = clone $this;
        $new->CPAISWSReponseCreationSalarieEmploi = $CPAISWSReponseCreationSalarieEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseCreationSalarieEmploi
     */
    public function getCPAISWSReponseCreationSalarieEmploi()
    {
        return $this->CPAISWSReponseCreationSalarieEmploi;
    }
}

