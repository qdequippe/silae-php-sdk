<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSAjouteCompteRenduEdi94Result
{
    /**
     * @var int
     */
    private $NbSalariesPresentsXML;

    /**
     * @var int
     */
    private $NbSalariesTrouves;

    /**
     * @var int
     */
    private $NbTauxSalariesCrees;

    /**
     * @var int
     */
    private $NbTauxSalariesMisAJour;

    /**
     * @return int
     */
    public function getNbSalariesPresentsXML()
    {
        return $this->NbSalariesPresentsXML;
    }

    /**
     * @param int $NbSalariesPresentsXML
     * @return SWSAjouteCompteRenduEdi94Result
     */
    public function withNbSalariesPresentsXML($NbSalariesPresentsXML)
    {
        $new = clone $this;
        $new->NbSalariesPresentsXML = $NbSalariesPresentsXML;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbSalariesTrouves()
    {
        return $this->NbSalariesTrouves;
    }

    /**
     * @param int $NbSalariesTrouves
     * @return SWSAjouteCompteRenduEdi94Result
     */
    public function withNbSalariesTrouves($NbSalariesTrouves)
    {
        $new = clone $this;
        $new->NbSalariesTrouves = $NbSalariesTrouves;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbTauxSalariesCrees()
    {
        return $this->NbTauxSalariesCrees;
    }

    /**
     * @param int $NbTauxSalariesCrees
     * @return SWSAjouteCompteRenduEdi94Result
     */
    public function withNbTauxSalariesCrees($NbTauxSalariesCrees)
    {
        $new = clone $this;
        $new->NbTauxSalariesCrees = $NbTauxSalariesCrees;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbTauxSalariesMisAJour()
    {
        return $this->NbTauxSalariesMisAJour;
    }

    /**
     * @param int $NbTauxSalariesMisAJour
     * @return SWSAjouteCompteRenduEdi94Result
     */
    public function withNbTauxSalariesMisAJour($NbTauxSalariesMisAJour)
    {
        $new = clone $this;
        $new->NbTauxSalariesMisAJour = $NbTauxSalariesMisAJour;

        return $new;
    }
}

