<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentListeSalarieEmploi
{
    /**
     * @var bool
     */
    private $RetournerListe;

    /**
     * @var bool
     */
    private $RetournerNombre;

    /**
     * @var int
     */
    private $TypeEmplois;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $FiltreSalarie;

    /**
     * @return bool
     */
    public function getRetournerListe()
    {
        return $this->RetournerListe;
    }

    /**
     * @param bool $RetournerListe
     * @return CPAISWSArgumentListeSalarieEmploi
     */
    public function withRetournerListe($RetournerListe)
    {
        $new = clone $this;
        $new->RetournerListe = $RetournerListe;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRetournerNombre()
    {
        return $this->RetournerNombre;
    }

    /**
     * @param bool $RetournerNombre
     * @return CPAISWSArgumentListeSalarieEmploi
     */
    public function withRetournerNombre($RetournerNombre)
    {
        $new = clone $this;
        $new->RetournerNombre = $RetournerNombre;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeEmplois()
    {
        return $this->TypeEmplois;
    }

    /**
     * @param int $TypeEmplois
     * @return CPAISWSArgumentListeSalarieEmploi
     */
    public function withTypeEmplois($TypeEmplois)
    {
        $new = clone $this;
        $new->TypeEmplois = $TypeEmplois;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getFiltreSalarie()
    {
        return $this->FiltreSalarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $FiltreSalarie
     * @return CPAISWSArgumentListeSalarieEmploi
     */
    public function withFiltreSalarie($FiltreSalarie)
    {
        $new = clone $this;
        $new->FiltreSalarie = $FiltreSalarie;

        return $new;
    }
}

