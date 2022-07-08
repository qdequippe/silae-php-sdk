<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSExcelChercheValeurPaieEtablissementV2 implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $Dossier;

    /**
     * @var string
     */
    private $Etablissement;

    /**
     * @var string
     */
    private $Rubrique;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $Dossier
     * @var string $Etablissement
     * @var string $Rubrique
     */
    public function __construct($Token, $Dossier, $Etablissement, $Rubrique)
    {
        $this->Token = $Token;
        $this->Dossier = $Dossier;
        $this->Etablissement = $Etablissement;
        $this->Rubrique = $Rubrique;
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
     * @return SWSExcelChercheValeurPaieEtablissementV2
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
    public function getDossier()
    {
        return $this->Dossier;
    }

    /**
     * @param string $Dossier
     * @return SWSExcelChercheValeurPaieEtablissementV2
     */
    public function withDossier($Dossier)
    {
        $new = clone $this;
        $new->Dossier = $Dossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getEtablissement()
    {
        return $this->Etablissement;
    }

    /**
     * @param string $Etablissement
     * @return SWSExcelChercheValeurPaieEtablissementV2
     */
    public function withEtablissement($Etablissement)
    {
        $new = clone $this;
        $new->Etablissement = $Etablissement;

        return $new;
    }

    /**
     * @return string
     */
    public function getRubrique()
    {
        return $this->Rubrique;
    }

    /**
     * @param string $Rubrique
     * @return SWSExcelChercheValeurPaieEtablissementV2
     */
    public function withRubrique($Rubrique)
    {
        $new = clone $this;
        $new->Rubrique = $Rubrique;

        return $new;
    }
}

