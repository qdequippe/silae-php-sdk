<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactLireVisitesMedicalesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPortailVisiteMedicale
     */
    private $VisitesMedicales;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPortailVisiteMedicale
     */
    public function getVisitesMedicales()
    {
        return $this->VisitesMedicales;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPortailVisiteMedicale $VisitesMedicales
     * @return SWSUtilisateurContactLireVisitesMedicalesResult
     */
    public function withVisitesMedicales($VisitesMedicales)
    {
        $new = clone $this;
        $new->VisitesMedicales = $VisitesMedicales;

        return $new;
    }
}

