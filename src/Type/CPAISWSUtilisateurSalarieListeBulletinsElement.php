<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSUtilisateurSalarieListeBulletinsElement
{
    /**
     * @var int
     */
    private $ID_PAIBULLETIN;

    /**
     * @var \DateTimeInterface
     */
    private $BUL_Periode;

    /**
     * @return int
     */
    public function getID_PAIBULLETIN()
    {
        return $this->ID_PAIBULLETIN;
    }

    /**
     * @param int $ID_PAIBULLETIN
     * @return CPAISWSUtilisateurSalarieListeBulletinsElement
     */
    public function withID_PAIBULLETIN($ID_PAIBULLETIN)
    {
        $new = clone $this;
        $new->ID_PAIBULLETIN = $ID_PAIBULLETIN;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBUL_Periode()
    {
        return $this->BUL_Periode;
    }

    /**
     * @param \DateTimeInterface $BUL_Periode
     * @return CPAISWSUtilisateurSalarieListeBulletinsElement
     */
    public function withBUL_Periode($BUL_Periode)
    {
        $new = clone $this;
        $new->BUL_Periode = $BUL_Periode;

        return $new;
    }
}

