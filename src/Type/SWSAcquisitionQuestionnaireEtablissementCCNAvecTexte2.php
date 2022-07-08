<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte2 implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $Code_CCN;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChamp2
     */
    private $ListeChamps;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $Code_CCN
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChamp2 $ListeChamps
     */
    public function __construct($Token, $Code_CCN, $ListeChamps)
    {
        $this->Token = $Token;
        $this->Code_CCN = $Code_CCN;
        $this->ListeChamps = $ListeChamps;
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
     * @return SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte2
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
    public function getCode_CCN()
    {
        return $this->Code_CCN;
    }

    /**
     * @param string $Code_CCN
     * @return SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte2
     */
    public function withCode_CCN($Code_CCN)
    {
        $new = clone $this;
        $new->Code_CCN = $Code_CCN;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChamp2
     */
    public function getListeChamps()
    {
        return $this->ListeChamps;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChamp2 $ListeChamps
     * @return SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte2
     */
    public function withListeChamps($ListeChamps)
    {
        $new = clone $this;
        $new->ListeChamps = $ListeChamps;

        return $new;
    }
}

