<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieSupervise
{
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
     * @var bool
     */
    private $AbsencesModifiables;

    /**
     * @return int
     */
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return CPAISWSSalarieSupervise
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
     * @return CPAISWSSalarieSupervise
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
     * @return CPAISWSSalarieSupervise
     */
    public function withNomSalarie($NomSalarie)
    {
        $new = clone $this;
        $new->NomSalarie = $NomSalarie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAbsencesModifiables()
    {
        return $this->AbsencesModifiables;
    }

    /**
     * @param bool $AbsencesModifiables
     * @return CPAISWSSalarieSupervise
     */
    public function withAbsencesModifiables($AbsencesModifiables)
    {
        $new = clone $this;
        $new->AbsencesModifiables = $AbsencesModifiables;

        return $new;
    }
}

