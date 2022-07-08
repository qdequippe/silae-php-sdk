<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactValiderAbsenceResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM
     */
    private $Absence;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSMail
     */
    private $Mail;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM
     */
    public function getAbsence()
    {
        return $this->Absence;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSAbsenceTM $Absence
     * @return SWSUtilisateurContactValiderAbsenceResult
     */
    public function withAbsence($Absence)
    {
        $new = clone $this;
        $new->Absence = $Absence;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSMail
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSMail $Mail
     * @return SWSUtilisateurContactValiderAbsenceResult
     */
    public function withMail($Mail)
    {
        $new = clone $this;
        $new->Mail = $Mail;

        return $new;
    }
}

