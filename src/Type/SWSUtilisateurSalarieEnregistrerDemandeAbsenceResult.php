<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSalarieEnregistrerDemandeAbsenceResult
{
    /**
     * @var bool
     */
    private $AbsenceEnregistree;

    /**
     * @var int
     */
    private $ID_PAIABSENCE;

    /**
     * @return bool
     */
    public function getAbsenceEnregistree()
    {
        return $this->AbsenceEnregistree;
    }

    /**
     * @param bool $AbsenceEnregistree
     * @return SWSUtilisateurSalarieEnregistrerDemandeAbsenceResult
     */
    public function withAbsenceEnregistree($AbsenceEnregistree)
    {
        $new = clone $this;
        $new->AbsenceEnregistree = $AbsenceEnregistree;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_PAIABSENCE()
    {
        return $this->ID_PAIABSENCE;
    }

    /**
     * @param int $ID_PAIABSENCE
     * @return SWSUtilisateurSalarieEnregistrerDemandeAbsenceResult
     */
    public function withID_PAIABSENCE($ID_PAIABSENCE)
    {
        $new = clone $this;
        $new->ID_PAIABSENCE = $ID_PAIABSENCE;

        return $new;
    }
}

