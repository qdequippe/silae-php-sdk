<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactDossierRecupererPeriodeEnCoursResult
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeEnCours;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeEnCours()
    {
        return $this->PeriodeEnCours;
    }

    /**
     * @param \DateTimeInterface $PeriodeEnCours
     * @return SWSUtilisateurContactDossierRecupererPeriodeEnCoursResult
     */
    public function withPeriodeEnCours($PeriodeEnCours)
    {
        $new = clone $this;
        $new->PeriodeEnCours = $PeriodeEnCours;

        return $new;
    }
}

