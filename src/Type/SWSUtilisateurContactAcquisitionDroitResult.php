<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactAcquisitionDroitResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $DroitsAVrai;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getDroitsAVrai()
    {
        return $this->DroitsAVrai;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $DroitsAVrai
     * @return SWSUtilisateurContactAcquisitionDroitResult
     */
    public function withDroitsAVrai($DroitsAVrai)
    {
        $new = clone $this;
        $new->DroitsAVrai = $DroitsAVrai;

        return $new;
    }
}

