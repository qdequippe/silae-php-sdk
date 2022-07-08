<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseRecupererFichierVirement>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseRecupererFichierVirement>
 */
class ArrayOfCPAISWSReponseRecupererFichierVirement implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseRecupererFichierVirement
     */
    private $CPAISWSReponseRecupererFichierVirement;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSReponseRecupererFichierVirement[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseRecupererFichierVirement>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseRecupererFichierVirement>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSReponseRecupererFichierVirement) ? $this->CPAISWSReponseRecupererFichierVirement : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseRecupererFichierVirement $CPAISWSReponseRecupererFichierVirement
     * @return ArrayOfCPAISWSReponseRecupererFichierVirement
     */
    public function withCPAISWSReponseRecupererFichierVirement($CPAISWSReponseRecupererFichierVirement)
    {
        $new = clone $this;
        $new->CPAISWSReponseRecupererFichierVirement = $CPAISWSReponseRecupererFichierVirement;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseRecupererFichierVirement
     */
    public function getCPAISWSReponseRecupererFichierVirement()
    {
        return $this->CPAISWSReponseRecupererFichierVirement;
    }
}

