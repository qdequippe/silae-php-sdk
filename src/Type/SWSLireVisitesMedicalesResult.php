<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLireVisitesMedicalesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSVisiteMedicale
     */
    private $VisitesMedicales;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSVisiteMedicale
     */
    public function getVisitesMedicales()
    {
        return $this->VisitesMedicales;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSVisiteMedicale $VisitesMedicales
     * @return SWSLireVisitesMedicalesResult
     */
    public function withVisitesMedicales($VisitesMedicales)
    {
        $new = clone $this;
        $new->VisitesMedicales = $VisitesMedicales;

        return $new;
    }
}

