<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSModificationHoraireEtablissement
{
    /**
     * @var bool
     */
    private $bNomGrilleHoraire;

    /**
     * @var string
     */
    private $NomGrilleHoraire;

    /**
     * @var bool
     */
    private $bHeuresTravaillees;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $HeuresTravaillees;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $HeuresDeNuit;

    /**
     * @var bool
     */
    private $bHeuresPayees;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $HeuresPayeesNormales;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $HeuresPayeesMajorees;

    /**
     * @var bool
     */
    private $bHeuresLibres1;

    /**
     * @var string
     */
    private $CodeHeuresLibres1;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $HeuresLibres1;

    /**
     * @var bool
     */
    private $bHeuresLibres2;

    /**
     * @var string
     */
    private $CodeHeuresLibres2;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $HeuresLibres2;

    /**
     * @var bool
     */
    private $bHeuresLibres3;

    /**
     * @var string
     */
    private $CodeHeuresLibres3;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $HeuresLibres3;

    /**
     * @var bool
     */
    private $bTotalMensuelHeuresNormales;

    /**
     * @var float
     */
    private $TotalMensuelHeuresNormales;

    /**
     * @var bool
     */
    private $bTotalMensuelHeuresMajorees;

    /**
     * @var float
     */
    private $TotalMensuelHeuresMajorees;

    /**
     * @var float
     */
    private $PourcentageHeuresMajorees;

    /**
     * @var bool
     */
    private $bTotalMensuelHeuresLibres1;

    /**
     * @var float
     */
    private $TotalMensuelHeuresLibres1;

    /**
     * @var bool
     */
    private $bTotalMensuelHeuresLibres2;

    /**
     * @var float
     */
    private $TotalMensuelHeuresLibres2;

    /**
     * @var bool
     */
    private $bTotalMensuelHeuresLibres3;

    /**
     * @var float
     */
    private $TotalMensuelHeuresLibres3;

    /**
     * @return bool
     */
    public function getBNomGrilleHoraire()
    {
        return $this->bNomGrilleHoraire;
    }

    /**
     * @param bool $bNomGrilleHoraire
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBNomGrilleHoraire($bNomGrilleHoraire)
    {
        $new = clone $this;
        $new->bNomGrilleHoraire = $bNomGrilleHoraire;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomGrilleHoraire()
    {
        return $this->NomGrilleHoraire;
    }

    /**
     * @param string $NomGrilleHoraire
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withNomGrilleHoraire($NomGrilleHoraire)
    {
        $new = clone $this;
        $new->NomGrilleHoraire = $NomGrilleHoraire;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBHeuresTravaillees()
    {
        return $this->bHeuresTravaillees;
    }

    /**
     * @param bool $bHeuresTravaillees
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBHeuresTravaillees($bHeuresTravaillees)
    {
        $new = clone $this;
        $new->bHeuresTravaillees = $bHeuresTravaillees;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getHeuresTravaillees()
    {
        return $this->HeuresTravaillees;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $HeuresTravaillees
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withHeuresTravaillees($HeuresTravaillees)
    {
        $new = clone $this;
        $new->HeuresTravaillees = $HeuresTravaillees;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getHeuresDeNuit()
    {
        return $this->HeuresDeNuit;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $HeuresDeNuit
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withHeuresDeNuit($HeuresDeNuit)
    {
        $new = clone $this;
        $new->HeuresDeNuit = $HeuresDeNuit;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBHeuresPayees()
    {
        return $this->bHeuresPayees;
    }

    /**
     * @param bool $bHeuresPayees
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBHeuresPayees($bHeuresPayees)
    {
        $new = clone $this;
        $new->bHeuresPayees = $bHeuresPayees;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getHeuresPayeesNormales()
    {
        return $this->HeuresPayeesNormales;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $HeuresPayeesNormales
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withHeuresPayeesNormales($HeuresPayeesNormales)
    {
        $new = clone $this;
        $new->HeuresPayeesNormales = $HeuresPayeesNormales;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getHeuresPayeesMajorees()
    {
        return $this->HeuresPayeesMajorees;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $HeuresPayeesMajorees
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withHeuresPayeesMajorees($HeuresPayeesMajorees)
    {
        $new = clone $this;
        $new->HeuresPayeesMajorees = $HeuresPayeesMajorees;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBHeuresLibres1()
    {
        return $this->bHeuresLibres1;
    }

    /**
     * @param bool $bHeuresLibres1
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBHeuresLibres1($bHeuresLibres1)
    {
        $new = clone $this;
        $new->bHeuresLibres1 = $bHeuresLibres1;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeHeuresLibres1()
    {
        return $this->CodeHeuresLibres1;
    }

    /**
     * @param string $CodeHeuresLibres1
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withCodeHeuresLibres1($CodeHeuresLibres1)
    {
        $new = clone $this;
        $new->CodeHeuresLibres1 = $CodeHeuresLibres1;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getHeuresLibres1()
    {
        return $this->HeuresLibres1;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $HeuresLibres1
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withHeuresLibres1($HeuresLibres1)
    {
        $new = clone $this;
        $new->HeuresLibres1 = $HeuresLibres1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBHeuresLibres2()
    {
        return $this->bHeuresLibres2;
    }

    /**
     * @param bool $bHeuresLibres2
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBHeuresLibres2($bHeuresLibres2)
    {
        $new = clone $this;
        $new->bHeuresLibres2 = $bHeuresLibres2;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeHeuresLibres2()
    {
        return $this->CodeHeuresLibres2;
    }

    /**
     * @param string $CodeHeuresLibres2
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withCodeHeuresLibres2($CodeHeuresLibres2)
    {
        $new = clone $this;
        $new->CodeHeuresLibres2 = $CodeHeuresLibres2;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getHeuresLibres2()
    {
        return $this->HeuresLibres2;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $HeuresLibres2
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withHeuresLibres2($HeuresLibres2)
    {
        $new = clone $this;
        $new->HeuresLibres2 = $HeuresLibres2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBHeuresLibres3()
    {
        return $this->bHeuresLibres3;
    }

    /**
     * @param bool $bHeuresLibres3
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBHeuresLibres3($bHeuresLibres3)
    {
        $new = clone $this;
        $new->bHeuresLibres3 = $bHeuresLibres3;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeHeuresLibres3()
    {
        return $this->CodeHeuresLibres3;
    }

    /**
     * @param string $CodeHeuresLibres3
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withCodeHeuresLibres3($CodeHeuresLibres3)
    {
        $new = clone $this;
        $new->CodeHeuresLibres3 = $CodeHeuresLibres3;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getHeuresLibres3()
    {
        return $this->HeuresLibres3;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $HeuresLibres3
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withHeuresLibres3($HeuresLibres3)
    {
        $new = clone $this;
        $new->HeuresLibres3 = $HeuresLibres3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTotalMensuelHeuresNormales()
    {
        return $this->bTotalMensuelHeuresNormales;
    }

    /**
     * @param bool $bTotalMensuelHeuresNormales
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBTotalMensuelHeuresNormales($bTotalMensuelHeuresNormales)
    {
        $new = clone $this;
        $new->bTotalMensuelHeuresNormales = $bTotalMensuelHeuresNormales;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalMensuelHeuresNormales()
    {
        return $this->TotalMensuelHeuresNormales;
    }

    /**
     * @param float $TotalMensuelHeuresNormales
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withTotalMensuelHeuresNormales($TotalMensuelHeuresNormales)
    {
        $new = clone $this;
        $new->TotalMensuelHeuresNormales = $TotalMensuelHeuresNormales;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTotalMensuelHeuresMajorees()
    {
        return $this->bTotalMensuelHeuresMajorees;
    }

    /**
     * @param bool $bTotalMensuelHeuresMajorees
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBTotalMensuelHeuresMajorees($bTotalMensuelHeuresMajorees)
    {
        $new = clone $this;
        $new->bTotalMensuelHeuresMajorees = $bTotalMensuelHeuresMajorees;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalMensuelHeuresMajorees()
    {
        return $this->TotalMensuelHeuresMajorees;
    }

    /**
     * @param float $TotalMensuelHeuresMajorees
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withTotalMensuelHeuresMajorees($TotalMensuelHeuresMajorees)
    {
        $new = clone $this;
        $new->TotalMensuelHeuresMajorees = $TotalMensuelHeuresMajorees;

        return $new;
    }

    /**
     * @return float
     */
    public function getPourcentageHeuresMajorees()
    {
        return $this->PourcentageHeuresMajorees;
    }

    /**
     * @param float $PourcentageHeuresMajorees
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withPourcentageHeuresMajorees($PourcentageHeuresMajorees)
    {
        $new = clone $this;
        $new->PourcentageHeuresMajorees = $PourcentageHeuresMajorees;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTotalMensuelHeuresLibres1()
    {
        return $this->bTotalMensuelHeuresLibres1;
    }

    /**
     * @param bool $bTotalMensuelHeuresLibres1
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBTotalMensuelHeuresLibres1($bTotalMensuelHeuresLibres1)
    {
        $new = clone $this;
        $new->bTotalMensuelHeuresLibres1 = $bTotalMensuelHeuresLibres1;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalMensuelHeuresLibres1()
    {
        return $this->TotalMensuelHeuresLibres1;
    }

    /**
     * @param float $TotalMensuelHeuresLibres1
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withTotalMensuelHeuresLibres1($TotalMensuelHeuresLibres1)
    {
        $new = clone $this;
        $new->TotalMensuelHeuresLibres1 = $TotalMensuelHeuresLibres1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTotalMensuelHeuresLibres2()
    {
        return $this->bTotalMensuelHeuresLibres2;
    }

    /**
     * @param bool $bTotalMensuelHeuresLibres2
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBTotalMensuelHeuresLibres2($bTotalMensuelHeuresLibres2)
    {
        $new = clone $this;
        $new->bTotalMensuelHeuresLibres2 = $bTotalMensuelHeuresLibres2;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalMensuelHeuresLibres2()
    {
        return $this->TotalMensuelHeuresLibres2;
    }

    /**
     * @param float $TotalMensuelHeuresLibres2
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withTotalMensuelHeuresLibres2($TotalMensuelHeuresLibres2)
    {
        $new = clone $this;
        $new->TotalMensuelHeuresLibres2 = $TotalMensuelHeuresLibres2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTotalMensuelHeuresLibres3()
    {
        return $this->bTotalMensuelHeuresLibres3;
    }

    /**
     * @param bool $bTotalMensuelHeuresLibres3
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withBTotalMensuelHeuresLibres3($bTotalMensuelHeuresLibres3)
    {
        $new = clone $this;
        $new->bTotalMensuelHeuresLibres3 = $bTotalMensuelHeuresLibres3;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalMensuelHeuresLibres3()
    {
        return $this->TotalMensuelHeuresLibres3;
    }

    /**
     * @param float $TotalMensuelHeuresLibres3
     * @return CPAISWSModificationHoraireEtablissement
     */
    public function withTotalMensuelHeuresLibres3($TotalMensuelHeuresLibres3)
    {
        $new = clone $this;
        $new->TotalMensuelHeuresLibres3 = $TotalMensuelHeuresLibres3;

        return $new;
    }
}

