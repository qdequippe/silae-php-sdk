<?php

namespace Qdequippe\SilaePhpSdk\Type;

class ElementVariable
{
    /**
     * @var string
     */
    private $CodeIdentifiantEV;

    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var string
     */
    private $Famille;

    /**
     * @var string
     */
    private $TypeVariable;

    /**
     * @var string
     */
    private $Format;

    /**
     * @var string
     */
    private $Manuel;

    /**
     * @var int
     */
    private $id;

    /**
     * @return string
     */
    public function getCodeIdentifiantEV()
    {
        return $this->CodeIdentifiantEV;
    }

    /**
     * @param string $CodeIdentifiantEV
     * @return ElementVariable
     */
    public function withCodeIdentifiantEV($CodeIdentifiantEV)
    {
        $new = clone $this;
        $new->CodeIdentifiantEV = $CodeIdentifiantEV;

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
     * @return ElementVariable
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }

    /**
     * @return string
     */
    public function getFamille()
    {
        return $this->Famille;
    }

    /**
     * @param string $Famille
     * @return ElementVariable
     */
    public function withFamille($Famille)
    {
        $new = clone $this;
        $new->Famille = $Famille;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeVariable()
    {
        return $this->TypeVariable;
    }

    /**
     * @param string $TypeVariable
     * @return ElementVariable
     */
    public function withTypeVariable($TypeVariable)
    {
        $new = clone $this;
        $new->TypeVariable = $TypeVariable;

        return $new;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * @param string $Format
     * @return ElementVariable
     */
    public function withFormat($Format)
    {
        $new = clone $this;
        $new->Format = $Format;

        return $new;
    }

    /**
     * @return string
     */
    public function getManuel()
    {
        return $this->Manuel;
    }

    /**
     * @param string $Manuel
     * @return ElementVariable
     */
    public function withManuel($Manuel)
    {
        $new = clone $this;
        $new->Manuel = $Manuel;

        return $new;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ElementVariable
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }
}

