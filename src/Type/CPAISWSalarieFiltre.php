<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSalarieFiltre
{
    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $ID_Parent;

    /**
     * @var string
     */
    private $Libelle;

    /**
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     * @return CPAISWSalarieFiltre
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    /**
     * @return string
     */
    public function getID_Parent()
    {
        return $this->ID_Parent;
    }

    /**
     * @param string $ID_Parent
     * @return CPAISWSalarieFiltre
     */
    public function withID_Parent($ID_Parent)
    {
        $new = clone $this;
        $new->ID_Parent = $ID_Parent;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSalarieFiltre
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }
}

