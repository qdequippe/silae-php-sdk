<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSuperviseurInformationsPortailResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSInformationsPortail
     */
    private $InformationsPortail;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CSWSInformationsPortail
     */
    public function getInformationsPortail()
    {
        return $this->InformationsPortail;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CSWSInformationsPortail $InformationsPortail
     * @return SWSUtilisateurSuperviseurInformationsPortailResult
     */
    public function withInformationsPortail($InformationsPortail)
    {
        $new = clone $this;
        $new->InformationsPortail = $InformationsPortail;

        return $new;
    }
}

