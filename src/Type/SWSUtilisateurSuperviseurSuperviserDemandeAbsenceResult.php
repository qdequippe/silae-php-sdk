<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSuperviseurSuperviserDemandeAbsenceResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSMail
     */
    private $Mail;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSMail
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSMail $Mail
     * @return SWSUtilisateurSuperviseurSuperviserDemandeAbsenceResult
     */
    public function withMail($Mail)
    {
        $new = clone $this;
        $new->Mail = $Mail;

        return $new;
    }
}

