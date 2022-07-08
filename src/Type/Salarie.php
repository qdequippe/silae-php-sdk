<?php

namespace Qdequippe\SilaePhpSdk\Type;

class Salarie
{
    /**
     * @var string
     */
    private $Matricule;

    /**
     * @var string
     */
    private $Nom;

    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfValeurEV
     */
    private $ListeValeursEV;

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return Salarie
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

        return $new;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param string $Nom
     * @return Salarie
     */
    public function withNom($Nom)
    {
        $new = clone $this;
        $new->Nom = $Nom;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return Salarie
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfValeurEV
     */
    public function getListeValeursEV()
    {
        return $this->ListeValeursEV;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfValeurEV $ListeValeursEV
     * @return Salarie
     */
    public function withListeValeursEV($ListeValeursEV)
    {
        $new = clone $this;
        $new->ListeValeursEV = $ListeValeursEV;

        return $new;
    }
}

