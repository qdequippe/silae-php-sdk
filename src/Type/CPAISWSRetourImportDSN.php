<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSRetourImportDSN
{
    /**
     * @var bool
     */
    private $ExistenceErreur;

    /**
     * @var bool
     */
    private $ImportDansDossier;

    /**
     * @var bool
     */
    private $ImportDansDomaine;

    /**
     * @var bool
     */
    private $ImportDansEtablissement;

    /**
     * @var bool
     */
    private $DSNMensuelleExistante;

    /**
     * @var string
     */
    private $ErreurAnalyse;

    /**
     * @var bool
     */
    private $ErreurImport;

    /**
     * @var bool
     */
    private $ErreurBlocanteImport;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CompteRendu;

    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $NomInterneEtablissementPricipal;

    /**
     * @var string
     */
    private $NomInterneEtablissementDeclare;

    /**
     * @return bool
     */
    public function getExistenceErreur()
    {
        return $this->ExistenceErreur;
    }

    /**
     * @param bool $ExistenceErreur
     * @return CPAISWSRetourImportDSN
     */
    public function withExistenceErreur($ExistenceErreur)
    {
        $new = clone $this;
        $new->ExistenceErreur = $ExistenceErreur;

        return $new;
    }

    /**
     * @return bool
     */
    public function getImportDansDossier()
    {
        return $this->ImportDansDossier;
    }

    /**
     * @param bool $ImportDansDossier
     * @return CPAISWSRetourImportDSN
     */
    public function withImportDansDossier($ImportDansDossier)
    {
        $new = clone $this;
        $new->ImportDansDossier = $ImportDansDossier;

        return $new;
    }

    /**
     * @return bool
     */
    public function getImportDansDomaine()
    {
        return $this->ImportDansDomaine;
    }

    /**
     * @param bool $ImportDansDomaine
     * @return CPAISWSRetourImportDSN
     */
    public function withImportDansDomaine($ImportDansDomaine)
    {
        $new = clone $this;
        $new->ImportDansDomaine = $ImportDansDomaine;

        return $new;
    }

    /**
     * @return bool
     */
    public function getImportDansEtablissement()
    {
        return $this->ImportDansEtablissement;
    }

    /**
     * @param bool $ImportDansEtablissement
     * @return CPAISWSRetourImportDSN
     */
    public function withImportDansEtablissement($ImportDansEtablissement)
    {
        $new = clone $this;
        $new->ImportDansEtablissement = $ImportDansEtablissement;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDSNMensuelleExistante()
    {
        return $this->DSNMensuelleExistante;
    }

    /**
     * @param bool $DSNMensuelleExistante
     * @return CPAISWSRetourImportDSN
     */
    public function withDSNMensuelleExistante($DSNMensuelleExistante)
    {
        $new = clone $this;
        $new->DSNMensuelleExistante = $DSNMensuelleExistante;

        return $new;
    }

    /**
     * @return string
     */
    public function getErreurAnalyse()
    {
        return $this->ErreurAnalyse;
    }

    /**
     * @param string $ErreurAnalyse
     * @return CPAISWSRetourImportDSN
     */
    public function withErreurAnalyse($ErreurAnalyse)
    {
        $new = clone $this;
        $new->ErreurAnalyse = $ErreurAnalyse;

        return $new;
    }

    /**
     * @return bool
     */
    public function getErreurImport()
    {
        return $this->ErreurImport;
    }

    /**
     * @param bool $ErreurImport
     * @return CPAISWSRetourImportDSN
     */
    public function withErreurImport($ErreurImport)
    {
        $new = clone $this;
        $new->ErreurImport = $ErreurImport;

        return $new;
    }

    /**
     * @return bool
     */
    public function getErreurBlocanteImport()
    {
        return $this->ErreurBlocanteImport;
    }

    /**
     * @param bool $ErreurBlocanteImport
     * @return CPAISWSRetourImportDSN
     */
    public function withErreurBlocanteImport($ErreurBlocanteImport)
    {
        $new = clone $this;
        $new->ErreurBlocanteImport = $ErreurBlocanteImport;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCompteRendu()
    {
        return $this->CompteRendu;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CompteRendu
     * @return CPAISWSRetourImportDSN
     */
    public function withCompteRendu($CompteRendu)
    {
        $new = clone $this;
        $new->CompteRendu = $CompteRendu;

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
     * @return CPAISWSRetourImportDSN
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
    public function getNomInterneEtablissementPricipal()
    {
        return $this->NomInterneEtablissementPricipal;
    }

    /**
     * @param string $NomInterneEtablissementPricipal
     * @return CPAISWSRetourImportDSN
     */
    public function withNomInterneEtablissementPricipal($NomInterneEtablissementPricipal)
    {
        $new = clone $this;
        $new->NomInterneEtablissementPricipal = $NomInterneEtablissementPricipal;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomInterneEtablissementDeclare()
    {
        return $this->NomInterneEtablissementDeclare;
    }

    /**
     * @param string $NomInterneEtablissementDeclare
     * @return CPAISWSRetourImportDSN
     */
    public function withNomInterneEtablissementDeclare($NomInterneEtablissementDeclare)
    {
        $new = clone $this;
        $new->NomInterneEtablissementDeclare = $NomInterneEtablissementDeclare;

        return $new;
    }
}

