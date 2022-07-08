<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieAjouterAbsenceV2 implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsenceV2
     */
    private $Absence_V2;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsenceV2 $Absence_V2
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $Absence_V2)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->Absence_V2 = $Absence_V2;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return SWSSalarieAjouterAbsenceV2
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

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
     * @return SWSSalarieAjouterAbsenceV2
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
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return SWSSalarieAjouterAbsenceV2
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsenceV2
     */
    public function getAbsence_V2()
    {
        return $this->Absence_V2;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsenceV2 $Absence_V2
     * @return SWSSalarieAjouterAbsenceV2
     */
    public function withAbsence_V2($Absence_V2)
    {
        $new = clone $this;
        $new->Absence_V2 = $Absence_V2;

        return $new;
    }
}

