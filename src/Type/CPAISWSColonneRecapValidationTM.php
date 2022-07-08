<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSColonneRecapValidationTM
{
    /**
     * @var string
     */
    private $CodeIdentifiant;

    /**
     * @var string
     */
    private $Nom;

    /**
     * @var string
     */
    private $Categorie;

    /**
     * @var int
     */
    private $Type_Variable;

    /**
     * @return string
     */
    public function getCodeIdentifiant()
    {
        return $this->CodeIdentifiant;
    }

    /**
     * @param string $CodeIdentifiant
     * @return CPAISWSColonneRecapValidationTM
     */
    public function withCodeIdentifiant($CodeIdentifiant)
    {
        $new = clone $this;
        $new->CodeIdentifiant = $CodeIdentifiant;

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
     * @return CPAISWSColonneRecapValidationTM
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
    public function getCategorie()
    {
        return $this->Categorie;
    }

    /**
     * @param string $Categorie
     * @return CPAISWSColonneRecapValidationTM
     */
    public function withCategorie($Categorie)
    {
        $new = clone $this;
        $new->Categorie = $Categorie;

        return $new;
    }

    /**
     * @return int
     */
    public function getType_Variable()
    {
        return $this->Type_Variable;
    }

    /**
     * @param int $Type_Variable
     * @return CPAISWSColonneRecapValidationTM
     */
    public function withType_Variable($Type_Variable)
    {
        $new = clone $this;
        $new->Type_Variable = $Type_Variable;

        return $new;
    }
}

