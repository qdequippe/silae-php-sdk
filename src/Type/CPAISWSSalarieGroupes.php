<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieGroupes
{
    /**
     * @var string
     */
    private $RaisonSociale;

    /**
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var string
     */
    private $NomSalarie;

    /**
     * @var int
     */
    private $TypeGroupe;

    /**
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->RaisonSociale;
    }

    /**
     * @param string $RaisonSociale
     * @return CPAISWSSalarieGroupes
     */
    public function withRaisonSociale($RaisonSociale)
    {
        $new = clone $this;
        $new->RaisonSociale = $RaisonSociale;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return CPAISWSSalarieGroupes
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSSalarieGroupes
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomSalarie()
    {
        return $this->NomSalarie;
    }

    /**
     * @param string $NomSalarie
     * @return CPAISWSSalarieGroupes
     */
    public function withNomSalarie($NomSalarie)
    {
        $new = clone $this;
        $new->NomSalarie = $NomSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeGroupe()
    {
        return $this->TypeGroupe;
    }

    /**
     * @param int $TypeGroupe
     * @return CPAISWSSalarieGroupes
     */
    public function withTypeGroupe($TypeGroupe)
    {
        $new = clone $this;
        $new->TypeGroupe = $TypeGroupe;

        return $new;
    }
}

