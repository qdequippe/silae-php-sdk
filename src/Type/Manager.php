<?php

namespace Qdequippe\SilaePhpSdk\Type;

class Manager
{
    /**
     * @var string
     */
    private $Identifiant;

    /**
     * @var string
     */
    private $Matricule;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $MatriculesSupervises;

    /**
     * @var string
     */
    private $Nom;

    /**
     * @var string
     */
    private $Prenom;

    /**
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->Identifiant;
    }

    /**
     * @param string $Identifiant
     * @return Manager
     */
    public function withIdentifiant($Identifiant)
    {
        $new = clone $this;
        $new->Identifiant = $Identifiant;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return Manager
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getMatriculesSupervises()
    {
        return $this->MatriculesSupervises;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $MatriculesSupervises
     * @return Manager
     */
    public function withMatriculesSupervises($MatriculesSupervises)
    {
        $new = clone $this;
        $new->MatriculesSupervises = $MatriculesSupervises;

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
     * @return Manager
     */
    public function withNom($Nom)
    {
        $new = clone $this;
        $new->Nom = $Nom;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param string $Prenom
     * @return Manager
     */
    public function withPrenom($Prenom)
    {
        $new = clone $this;
        $new->Prenom = $Prenom;

        return $new;
    }
}

