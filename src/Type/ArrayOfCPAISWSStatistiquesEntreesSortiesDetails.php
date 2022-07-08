<?php

namespace Qdequippe\SilaePhpSdk\Type;

use IteratorAggregate;

/**
 * @phpstan-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSortiesDetails>
 * @psalm-implements \IteratorAggregate<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSortiesDetails>
 */
class ArrayOfCPAISWSStatistiquesEntreesSortiesDetails implements IteratorAggregate
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSortiesDetails
     */
    private $CPAISWSStatistiquesEntreesSortiesDetails;

    /**
     * @return \ArrayIterator|\Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSortiesDetails[]
     * @phpstan-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSortiesDetails>
     * @psalm-return \ArrayIterator<array-key, \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSortiesDetails>
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator(is_array($this->CPAISWSStatistiquesEntreesSortiesDetails) ? $this->CPAISWSStatistiquesEntreesSortiesDetails : []);
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSortiesDetails $CPAISWSStatistiquesEntreesSortiesDetails
     * @return ArrayOfCPAISWSStatistiquesEntreesSortiesDetails
     */
    public function withCPAISWSStatistiquesEntreesSortiesDetails($CPAISWSStatistiquesEntreesSortiesDetails)
    {
        $new = clone $this;
        $new->CPAISWSStatistiquesEntreesSortiesDetails = $CPAISWSStatistiquesEntreesSortiesDetails;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSStatistiquesEntreesSortiesDetails
     */
    public function getCPAISWSStatistiquesEntreesSortiesDetails()
    {
        return $this->CPAISWSStatistiquesEntreesSortiesDetails;
    }
}

