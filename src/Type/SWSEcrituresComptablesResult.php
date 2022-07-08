<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSEcrituresComptablesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptables
     */
    private $EcrituresComptables;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptables
     */
    public function getEcrituresComptables()
    {
        return $this->EcrituresComptables;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEcrituresComptables $EcrituresComptables
     * @return SWSEcrituresComptablesResult
     */
    public function withEcrituresComptables($EcrituresComptables)
    {
        $new = clone $this;
        $new->EcrituresComptables = $EcrituresComptables;

        return $new;
    }
}

