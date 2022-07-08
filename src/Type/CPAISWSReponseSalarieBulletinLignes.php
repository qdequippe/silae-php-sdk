<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSReponseSalarieBulletinLignes
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var string
     */
    private $IntituleEmploi;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSLigneBulletin
     */
    private $LignesBulletin;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSReponseSalarieBulletinLignes
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return CPAISWSReponseSalarieBulletinLignes
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSReponseSalarieBulletinLignes
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return string
     */
    public function getIntituleEmploi()
    {
        return $this->IntituleEmploi;
    }

    /**
     * @param string $IntituleEmploi
     * @return CPAISWSReponseSalarieBulletinLignes
     */
    public function withIntituleEmploi($IntituleEmploi)
    {
        $new = clone $this;
        $new->IntituleEmploi = $IntituleEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSLigneBulletin
     */
    public function getLignesBulletin()
    {
        return $this->LignesBulletin;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSLigneBulletin $LignesBulletin
     * @return CPAISWSReponseSalarieBulletinLignes
     */
    public function withLignesBulletin($LignesBulletin)
    {
        $new = clone $this;
        $new->LignesBulletin = $LignesBulletin;

        return $new;
    }
}

