<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSalarieSupprimerDemandeAbsenceResult
{
    /**
     * @var bool
     */
    private $AbsenceSupprimee;

    /**
     * @return bool
     */
    public function getAbsenceSupprimee()
    {
        return $this->AbsenceSupprimee;
    }

    /**
     * @param bool $AbsenceSupprimee
     * @return SWSUtilisateurSalarieSupprimerDemandeAbsenceResult
     */
    public function withAbsenceSupprimee($AbsenceSupprimee)
    {
        $new = clone $this;
        $new->AbsenceSupprimee = $AbsenceSupprimee;

        return $new;
    }
}

