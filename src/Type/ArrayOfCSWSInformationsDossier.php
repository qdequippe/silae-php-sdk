<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossier>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossier>
 */
class ArrayOfCSWSInformationsDossier implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossier
     */
    private $CSWSInformationsDossier;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossier[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossier>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossier>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CSWSInformationsDossier) ? $this->CSWSInformationsDossier : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossier $CSWSInformationsDossier
     * @return ArrayOfCSWSInformationsDossier
     */
    public function withCSWSInformationsDossier($CSWSInformationsDossier)
    {
        $new = clone $this;
        $new->CSWSInformationsDossier = $CSWSInformationsDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossier
     */
    public function getCSWSInformationsDossier()
    {
        return $this->CSWSInformationsDossier;
    }
}

