<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSModificationHoraireSalarie
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
     * @var bool
     */
    private $bTauxHeuresLibres1;

    /**
     * @var float
     */
    private $TauxHeuresLibres1;

    /**
     * @var bool
     */
    private $bTauxHeuresLibres2;

    /**
     * @var float
     */
    private $TauxHeuresLibres2;

    /**
     * @var bool
     */
    private $bTauxHeuresLibres3;

    /**
     * @var float
     */
    private $TauxHeuresLibres3;

    /**
     * @return bool
     */
    public function getBNomGrilleHoraire()
    {
        return $this->bNomGrilleHoraire;
    }

    /**
     * @param bool $bNomGrilleHoraire
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
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
     * @return CPAISWSModificationHoraireSalarie
     */
    public function withTotalMensuelHeuresLibres3($TotalMensuelHeuresLibres3)
    {
        $new = clone $this;
        $new->TotalMensuelHeuresLibres3 = $TotalMensuelHeuresLibres3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTauxHeuresLibres1()
    {
        return $this->bTauxHeuresLibres1;
    }

    /**
     * @param bool $bTauxHeuresLibres1
     * @return CPAISWSModificationHoraireSalarie
     */
    public function withBTauxHeuresLibres1($bTauxHeuresLibres1)
    {
        $new = clone $this;
        $new->bTauxHeuresLibres1 = $bTauxHeuresLibres1;

        return $new;
    }

    /**
     * @return float
     */
    public function getTauxHeuresLibres1()
    {
        return $this->TauxHeuresLibres1;
    }

    /**
     * @param float $TauxHeuresLibres1
     * @return CPAISWSModificationHoraireSalarie
     */
    public function withTauxHeuresLibres1($TauxHeuresLibres1)
    {
        $new = clone $this;
        $new->TauxHeuresLibres1 = $TauxHeuresLibres1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTauxHeuresLibres2()
    {
        return $this->bTauxHeuresLibres2;
    }

    /**
     * @param bool $bTauxHeuresLibres2
     * @return CPAISWSModificationHoraireSalarie
     */
    public function withBTauxHeuresLibres2($bTauxHeuresLibres2)
    {
        $new = clone $this;
        $new->bTauxHeuresLibres2 = $bTauxHeuresLibres2;

        return $new;
    }

    /**
     * @return float
     */
    public function getTauxHeuresLibres2()
    {
        return $this->TauxHeuresLibres2;
    }

    /**
     * @param float $TauxHeuresLibres2
     * @return CPAISWSModificationHoraireSalarie
     */
    public function withTauxHeuresLibres2($TauxHeuresLibres2)
    {
        $new = clone $this;
        $new->TauxHeuresLibres2 = $TauxHeuresLibres2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTauxHeuresLibres3()
    {
        return $this->bTauxHeuresLibres3;
    }

    /**
     * @param bool $bTauxHeuresLibres3
     * @return CPAISWSModificationHoraireSalarie
     */
    public function withBTauxHeuresLibres3($bTauxHeuresLibres3)
    {
        $new = clone $this;
        $new->bTauxHeuresLibres3 = $bTauxHeuresLibres3;

        return $new;
    }

    /**
     * @return float
     */
    public function getTauxHeuresLibres3()
    {
        return $this->TauxHeuresLibres3;
    }

    /**
     * @param float $TauxHeuresLibres3
     * @return CPAISWSModificationHoraireSalarie
     */
    public function withTauxHeuresLibres3($TauxHeuresLibres3)
    {
        $new = clone $this;
        $new->TauxHeuresLibres3 = $TauxHeuresLibres3;

        return $new;
    }
}

