<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossierEx>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossierEx>
 */
class ArrayOfCSWSInformationsDossierEx implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossierEx
     */
    private $CSWSInformationsDossierEx;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossierEx[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossierEx>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossierEx>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CSWSInformationsDossierEx) ? $this->CSWSInformationsDossierEx : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossierEx $CSWSInformationsDossierEx
     * @return ArrayOfCSWSInformationsDossierEx
     */
    public function withCSWSInformationsDossierEx($CSWSInformationsDossierEx)
    {
        $new = clone $this;
        $new->CSWSInformationsDossierEx = $CSWSInformationsDossierEx;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CSWSInformationsDossierEx
     */
    public function getCSWSInformationsDossierEx()
    {
        return $this->CSWSInformationsDossierEx;
    }
}

