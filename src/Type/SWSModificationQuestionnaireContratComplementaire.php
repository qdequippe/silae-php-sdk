<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationQuestionnaireContratComplementaire implements RequestInterface
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
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChampByte
     */
    private $ReponseQCComp;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var int $IdentifiantEmploi
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChampByte $ReponseQCComp
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $IdentifiantEmploi, $ReponseQCComp)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->IdentifiantEmploi = $IdentifiantEmploi;
        $this->ReponseQCComp = $ReponseQCComp;
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
     * @return SWSModificationQuestionnaireContratComplementaire
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
     * @return SWSModificationQuestionnaireContratComplementaire
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
     * @return SWSModificationQuestionnaireContratComplementaire
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
     * @return SWSModificationQuestionnaireContratComplementaire
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChampByte
     */
    public function getReponseQCComp()
    {
        return $this->ReponseQCComp;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChampByte $ReponseQCComp
     * @return SWSModificationQuestionnaireContratComplementaire
     */
    public function withReponseQCComp($ReponseQCComp)
    {
        $new = clone $this;
        $new->ReponseQCComp = $ReponseQCComp;

        return $new;
    }
}

