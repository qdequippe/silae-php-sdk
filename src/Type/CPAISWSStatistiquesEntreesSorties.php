<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSStatistiquesEntreesSorties
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $CodeAgence;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesEntreesSortiesDetails
     */
    private $StatistiquesEntreesSortiesDetails;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSStatistiquesEntreesSorties
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeAgence()
    {
        return $this->CodeAgence;
    }

    /**
     * @param string $CodeAgence
     * @return CPAISWSStatistiquesEntreesSorties
     */
    public function withCodeAgence($CodeAgence)
    {
        $new = clone $this;
        $new->CodeAgence = $CodeAgence;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesEntreesSortiesDetails
     */
    public function getStatistiquesEntreesSortiesDetails()
    {
        return $this->StatistiquesEntreesSortiesDetails;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSStatistiquesEntreesSortiesDetails $StatistiquesEntreesSortiesDetails
     * @return CPAISWSStatistiquesEntreesSorties
     */
    public function withStatistiquesEntreesSortiesDetails($StatistiquesEntreesSortiesDetails)
    {
        $new = clone $this;
        $new->StatistiquesEntreesSortiesDetails = $StatistiquesEntreesSortiesDetails;

        return $new;
    }
}

