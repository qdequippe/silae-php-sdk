<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieTM
{
    /**
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var string
     */
    private $Matricule;

    /**
     * @var string
     */
    private $NomSalarie;

    /**
     * @return int
     */
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return CPAISWSSalarieTM
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
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return CPAISWSSalarieTM
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
    public function getNomSalarie()
    {
        return $this->NomSalarie;
    }

    /**
     * @param string $NomSalarie
     * @return CPAISWSSalarieTM
     */
    public function withNomSalarie($NomSalarie)
    {
        $new = clone $this;
        $new->NomSalarie = $NomSalarie;

        return $new;
    }
}

