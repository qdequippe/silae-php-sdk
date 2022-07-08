<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CSWSInformationsDossier
{
    /**
     * @var string
     */
    private $Numero;

    /**
     * @var string
     */
    private $RaisonSociale;

    /**
     * @var string
     */
    private $Siret;

    /**
     * @var string
     */
    private $Groupe;

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param string $Numero
     * @return CSWSInformationsDossier
     */
    public function withNumero($Numero)
    {
        $new = clone $this;
        $new->Numero = $Numero;

        return $new;
    }

    /**
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->RaisonSociale;
    }

    /**
     * @param string $RaisonSociale
     * @return CSWSInformationsDossier
     */
    public function withRaisonSociale($RaisonSociale)
    {
        $new = clone $this;
        $new->RaisonSociale = $RaisonSociale;

        return $new;
    }

    /**
     * @return string
     */
    public function getSiret()
    {
        return $this->Siret;
    }

    /**
     * @param string $Siret
     * @return CSWSInformationsDossier
     */
    public function withSiret($Siret)
    {
        $new = clone $this;
        $new->Siret = $Siret;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupe()
    {
        return $this->Groupe;
    }

    /**
     * @param string $Groupe
     * @return CSWSInformationsDossier
     */
    public function withGroupe($Groupe)
    {
        $new = clone $this;
        $new->Groupe = $Groupe;

        return $new;
    }
}

