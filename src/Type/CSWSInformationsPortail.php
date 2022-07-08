<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CSWSInformationsPortail
{
    /**
     * @var int
     */
    private $ID_DOMAINE;

    /**
     * @var int
     */
    private $ID_CLIENT;

    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $RaisonSociale;

    /**
     * @var string
     */
    private $Groupe;

    /**
     * @var bool
     */
    private $PortailSalarieActif;

    /**
     * @var int
     */
    private $PortailSalarieNatureIdentifiant;

    /**
     * @var string
     */
    private $PortailSalarieMailCC;

    /**
     * @var int
     */
    private $PortailSalarieControleSolde;

    /**
     * @var string
     */
    private $PortailSalarieDeltaSolde;

    /**
     * @var bool
     */
    private $PortailSalarieBlocageDemiJCP;

    /**
     * @var bool
     */
    private $PortailSalarieVoirEquipeSalarie;

    /**
     * @var bool
     */
    private $PortailSalarieVoirTous;

    /**
     * @var bool
     */
    private $PortailSalarieVoirGroupe;

    /**
     * @var bool
     */
    private $PortailSalarieVoirAbsPortailSeulement;

    /**
     * @var bool
     */
    private $PortailSalarieVoirAbsDetailInactif;

    /**
     * @var bool
     */
    private $PortailSalarieAccesImagesBulletins;

    /**
     * @var bool
     */
    private $PortailSalarieAnnexesBulletins;

    /**
     * @var bool
     */
    private $PortailSalarieNdfBul;

    /**
     * @return int
     */
    public function getID_DOMAINE()
    {
        return $this->ID_DOMAINE;
    }

    /**
     * @param int $ID_DOMAINE
     * @return CSWSInformationsPortail
     */
    public function withID_DOMAINE($ID_DOMAINE)
    {
        $new = clone $this;
        $new->ID_DOMAINE = $ID_DOMAINE;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_CLIENT()
    {
        return $this->ID_CLIENT;
    }

    /**
     * @param int $ID_CLIENT
     * @return CSWSInformationsPortail
     */
    public function withID_CLIENT($ID_CLIENT)
    {
        $new = clone $this;
        $new->ID_CLIENT = $ID_CLIENT;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CSWSInformationsPortail
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
    public function getRaisonSociale()
    {
        return $this->RaisonSociale;
    }

    /**
     * @param string $RaisonSociale
     * @return CSWSInformationsPortail
     */
    public function withRaisonSociale($RaisonSociale)
    {
        $new = clone $this;
        $new->RaisonSociale = $RaisonSociale;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupe()
    {
        return $this->Groupe;
    }

    /**
     * @param string $Groupe
     * @return CSWSInformationsPortail
     */
    public function withGroupe($Groupe)
    {
        $new = clone $this;
        $new->Groupe = $Groupe;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieActif()
    {
        return $this->PortailSalarieActif;
    }

    /**
     * @param bool $PortailSalarieActif
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieActif($PortailSalarieActif)
    {
        $new = clone $this;
        $new->PortailSalarieActif = $PortailSalarieActif;

        return $new;
    }

    /**
     * @return int
     */
    public function getPortailSalarieNatureIdentifiant()
    {
        return $this->PortailSalarieNatureIdentifiant;
    }

    /**
     * @param int $PortailSalarieNatureIdentifiant
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieNatureIdentifiant($PortailSalarieNatureIdentifiant)
    {
        $new = clone $this;
        $new->PortailSalarieNatureIdentifiant = $PortailSalarieNatureIdentifiant;

        return $new;
    }

    /**
     * @return string
     */
    public function getPortailSalarieMailCC()
    {
        return $this->PortailSalarieMailCC;
    }

    /**
     * @param string $PortailSalarieMailCC
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieMailCC($PortailSalarieMailCC)
    {
        $new = clone $this;
        $new->PortailSalarieMailCC = $PortailSalarieMailCC;

        return $new;
    }

    /**
     * @return int
     */
    public function getPortailSalarieControleSolde()
    {
        return $this->PortailSalarieControleSolde;
    }

    /**
     * @param int $PortailSalarieControleSolde
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieControleSolde($PortailSalarieControleSolde)
    {
        $new = clone $this;
        $new->PortailSalarieControleSolde = $PortailSalarieControleSolde;

        return $new;
    }

    /**
     * @return string
     */
    public function getPortailSalarieDeltaSolde()
    {
        return $this->PortailSalarieDeltaSolde;
    }

    /**
     * @param string $PortailSalarieDeltaSolde
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieDeltaSolde($PortailSalarieDeltaSolde)
    {
        $new = clone $this;
        $new->PortailSalarieDeltaSolde = $PortailSalarieDeltaSolde;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieBlocageDemiJCP()
    {
        return $this->PortailSalarieBlocageDemiJCP;
    }

    /**
     * @param bool $PortailSalarieBlocageDemiJCP
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieBlocageDemiJCP($PortailSalarieBlocageDemiJCP)
    {
        $new = clone $this;
        $new->PortailSalarieBlocageDemiJCP = $PortailSalarieBlocageDemiJCP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieVoirEquipeSalarie()
    {
        return $this->PortailSalarieVoirEquipeSalarie;
    }

    /**
     * @param bool $PortailSalarieVoirEquipeSalarie
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieVoirEquipeSalarie($PortailSalarieVoirEquipeSalarie)
    {
        $new = clone $this;
        $new->PortailSalarieVoirEquipeSalarie = $PortailSalarieVoirEquipeSalarie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieVoirTous()
    {
        return $this->PortailSalarieVoirTous;
    }

    /**
     * @param bool $PortailSalarieVoirTous
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieVoirTous($PortailSalarieVoirTous)
    {
        $new = clone $this;
        $new->PortailSalarieVoirTous = $PortailSalarieVoirTous;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieVoirGroupe()
    {
        return $this->PortailSalarieVoirGroupe;
    }

    /**
     * @param bool $PortailSalarieVoirGroupe
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieVoirGroupe($PortailSalarieVoirGroupe)
    {
        $new = clone $this;
        $new->PortailSalarieVoirGroupe = $PortailSalarieVoirGroupe;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieVoirAbsPortailSeulement()
    {
        return $this->PortailSalarieVoirAbsPortailSeulement;
    }

    /**
     * @param bool $PortailSalarieVoirAbsPortailSeulement
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieVoirAbsPortailSeulement($PortailSalarieVoirAbsPortailSeulement)
    {
        $new = clone $this;
        $new->PortailSalarieVoirAbsPortailSeulement = $PortailSalarieVoirAbsPortailSeulement;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieVoirAbsDetailInactif()
    {
        return $this->PortailSalarieVoirAbsDetailInactif;
    }

    /**
     * @param bool $PortailSalarieVoirAbsDetailInactif
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieVoirAbsDetailInactif($PortailSalarieVoirAbsDetailInactif)
    {
        $new = clone $this;
        $new->PortailSalarieVoirAbsDetailInactif = $PortailSalarieVoirAbsDetailInactif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieAccesImagesBulletins()
    {
        return $this->PortailSalarieAccesImagesBulletins;
    }

    /**
     * @param bool $PortailSalarieAccesImagesBulletins
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieAccesImagesBulletins($PortailSalarieAccesImagesBulletins)
    {
        $new = clone $this;
        $new->PortailSalarieAccesImagesBulletins = $PortailSalarieAccesImagesBulletins;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieAnnexesBulletins()
    {
        return $this->PortailSalarieAnnexesBulletins;
    }

    /**
     * @param bool $PortailSalarieAnnexesBulletins
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieAnnexesBulletins($PortailSalarieAnnexesBulletins)
    {
        $new = clone $this;
        $new->PortailSalarieAnnexesBulletins = $PortailSalarieAnnexesBulletins;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPortailSalarieNdfBul()
    {
        return $this->PortailSalarieNdfBul;
    }

    /**
     * @param bool $PortailSalarieNdfBul
     * @return CSWSInformationsPortail
     */
    public function withPortailSalarieNdfBul($PortailSalarieNdfBul)
    {
        $new = clone $this;
        $new->PortailSalarieNdfBul = $PortailSalarieNdfBul;

        return $new;
    }
}

