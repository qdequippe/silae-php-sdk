<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\SWSInformationsOnglet>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\SWSInformationsOnglet>
 */
class ArrayOfSWSInformationsOnglet implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSInformationsOnglet
     */
    private $SWS_InformationsOnglet;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\SWSInformationsOnglet[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\SWSInformationsOnglet>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\SWSInformationsOnglet>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->SWS_InformationsOnglet) ? $this->SWS_InformationsOnglet : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSInformationsOnglet $SWS_InformationsOnglet
     * @return ArrayOfSWSInformationsOnglet
     */
    public function withSWS_InformationsOnglet($SWS_InformationsOnglet)
    {
        $new = clone $this;
        $new->SWS_InformationsOnglet = $SWS_InformationsOnglet;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSInformationsOnglet
     */
    public function getSWS_InformationsOnglet()
    {
        return $this->SWS_InformationsOnglet;
    }
}

