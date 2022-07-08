<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSDescriptionDocumentGED
{
    /**
     * @var int
     */
    private $ID_DOCUMENT;

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
     * @return CPAISWSDescriptionDocumentGED
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
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSDescriptionDocumentGED
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
     * @return CPAISWSDescriptionDocumentGED
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
     * @return CPAISWSDescriptionDocumentGED
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
     * @return CPAISWSDescriptionDocumentGED
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
     * @return CPAISWSDescriptionDocumentGED
     */
    public function withModificationUtilisateur($ModificationUtilisateur)
    {
        $new = clone $this;
        $new->ModificationUtilisateur = $ModificationUtilisateur;

        return $new;
    }
}

