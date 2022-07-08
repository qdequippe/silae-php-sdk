<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSDescriptionCompleteDocumentGED
{
    /**
     * @var int
     */
    private $ID_DOCUMENT;

    /**
     * @var string
     */
    private $CodeType;

    /**
     * @var string
     */
    private $LibelleType;

    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var \DateTimeInterface
     */
    private $CreationDateDeCreation;

    /**
     * @var \DateTimeInterface
     */
    private $ModificationDateDeModification;

    /**
     * @var string
     */
    private $CreationUtilisateur;

    /**
     * @var string
     */
    private $ModificationUtilisateur;

    /**
     * @return int
     */
    public function getID_DOCUMENT()
    {
        return $this->ID_DOCUMENT;
    }

    /**
     * @param int $ID_DOCUMENT
     * @return CPAISWSDescriptionCompleteDocumentGED
     */
    public function withID_DOCUMENT($ID_DOCUMENT)
    {
        $new = clone $this;
        $new->ID_DOCUMENT = $ID_DOCUMENT;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeType()
    {
        return $this->CodeType;
    }

    /**
     * @param string $CodeType
     * @return CPAISWSDescriptionCompleteDocumentGED
     */
    public function withCodeType($CodeType)
    {
        $new = clone $this;
        $new->CodeType = $CodeType;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleType()
    {
        return $this->LibelleType;
    }

    /**
     * @param string $LibelleType
     * @return CPAISWSDescriptionCompleteDocumentGED
     */
    public function withLibelleType($LibelleType)
    {
        $new = clone $this;
        $new->LibelleType = $LibelleType;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSDescriptionCompleteDocumentGED
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreationDateDeCreation()
    {
        return $this->CreationDateDeCreation;
    }

    /**
     * @param \DateTimeInterface $CreationDateDeCreation
     * @return CPAISWSDescriptionCompleteDocumentGED
     */
    public function withCreationDateDeCreation($CreationDateDeCreation)
    {
        $new = clone $this;
        $new->CreationDateDeCreation = $CreationDateDeCreation;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getModificationDateDeModification()
    {
        return $this->ModificationDateDeModification;
    }

    /**
     * @param \DateTimeInterface $ModificationDateDeModification
     * @return CPAISWSDescriptionCompleteDocumentGED
     */
    public function withModificationDateDeModification($ModificationDateDeModification)
    {
        $new = clone $this;
        $new->ModificationDateDeModification = $ModificationDateDeModification;

        return $new;
    }

    /**
     * @return string
     */
    public function getCreationUtilisateur()
    {
        return $this->CreationUtilisateur;
    }

    /**
     * @param string $CreationUtilisateur
     * @return CPAISWSDescriptionCompleteDocumentGED
     */
    public function withCreationUtilisateur($CreationUtilisateur)
    {
        $new = clone $this;
        $new->CreationUtilisateur = $CreationUtilisateur;

        return $new;
    }

    /**
     * @return string
     */
    public function getModificationUtilisateur()
    {
        return $this->ModificationUtilisateur;
    }

    /**
     * @param string $ModificationUtilisateur
     * @return CPAISWSDescriptionCompleteDocumentGED
     */
    public function withModificationUtilisateur($ModificationUtilisateur)
    {
        $new = clone $this;
        $new->ModificationUtilisateur = $ModificationUtilisateur;

        return $new;
    }
}

