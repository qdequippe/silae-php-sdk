<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSReponseSalarieBulletins
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfInt
     */
    private $Arr_ID_PAIBULLETIN;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfBoolean
     */
    private $Arr_PresenceAttestationPoleEmploi;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSReponseSalarieBulletins
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

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
     * @return CPAISWSReponseSalarieBulletins
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfInt
     */
    public function getArr_ID_PAIBULLETIN()
    {
        return $this->Arr_ID_PAIBULLETIN;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfInt $Arr_ID_PAIBULLETIN
     * @return CPAISWSReponseSalarieBulletins
     */
    public function withArr_ID_PAIBULLETIN($Arr_ID_PAIBULLETIN)
    {
        $new = clone $this;
        $new->Arr_ID_PAIBULLETIN = $Arr_ID_PAIBULLETIN;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfBoolean
     */
    public function getArr_PresenceAttestationPoleEmploi()
    {
        return $this->Arr_PresenceAttestationPoleEmploi;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfBoolean $Arr_PresenceAttestationPoleEmploi
     * @return CPAISWSReponseSalarieBulletins
     */
    public function withArr_PresenceAttestationPoleEmploi($Arr_PresenceAttestationPoleEmploi)
    {
        $new = clone $this;
        $new->Arr_PresenceAttestationPoleEmploi = $Arr_PresenceAttestationPoleEmploi;

        return $new;
    }
}

