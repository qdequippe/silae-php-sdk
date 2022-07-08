<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSRequeteLectureInfos
{
    /**
     * @var string
     */
    private $TableInformations;

    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $Champs;

    /**
     * @return string
     */
    public function getTableInformations()
    {
        return $this->TableInformations;
    }

    /**
     * @param string $TableInformations
     * @return CPAISWSRequeteLectureInfos
     */
    public function withTableInformations($TableInformations)
    {
        $new = clone $this;
        $new->TableInformations = $TableInformations;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSRequeteLectureInfos
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return CPAISWSRequeteLectureInfos
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSRequeteLectureInfos
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
     * @return CPAISWSRequeteLectureInfos
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getChamps()
    {
        return $this->Champs;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $Champs
     * @return CPAISWSRequeteLectureInfos
     */
    public function withChamps($Champs)
    {
        $new = clone $this;
        $new->Champs = $Champs;

        return $new;
    }
}

