<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactListeSalarieEmploisResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEtEmploiTM
     */
    private $SalariesEtEmplois;

    /**
     * @var int
     */
    private $Nombre;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEtEmploiTM
     */
    public function getSalariesEtEmplois()
    {
        return $this->SalariesEtEmplois;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEtEmploiTM $SalariesEtEmplois
     * @return SWSUtilisateurContactListeSalarieEmploisResult
     */
    public function withSalariesEtEmplois($SalariesEtEmplois)
    {
        $new = clone $this;
        $new->SalariesEtEmplois = $SalariesEtEmplois;

        return $new;
    }

    /**
     * @return int
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param int $Nombre
     * @return SWSUtilisateurContactListeSalarieEmploisResult
     */
    public function withNombre($Nombre)
    {
        $new = clone $this;
        $new->Nombre = $Nombre;

        return $new;
    }
}

