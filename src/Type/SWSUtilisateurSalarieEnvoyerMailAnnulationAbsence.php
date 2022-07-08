<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSalarieEnvoyerMailAnnulationAbsence implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var int
     */
    private $ID_DOMAINE;

    /**
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSMail
     */
    private $Mail;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_PAISALARIE
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSMail $Mail
     */
    public function __construct($Token, $ID_DOMAINE, $ID_PAISALARIE, $Mail)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_PAISALARIE = $ID_PAISALARIE;
        $this->Mail = $Mail;
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
     * @return SWSUtilisateurSalarieEnvoyerMailAnnulationAbsence
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_DOMAINE()
    {
        return $this->ID_DOMAINE;
    }

    /**
     * @param int $ID_DOMAINE
     * @return SWSUtilisateurSalarieEnvoyerMailAnnulationAbsence
     */
    public function withID_DOMAINE($ID_DOMAINE)
    {
        $new = clone $this;
        $new->ID_DOMAINE = $ID_DOMAINE;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return SWSUtilisateurSalarieEnvoyerMailAnnulationAbsence
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSMail
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSMail $Mail
     * @return SWSUtilisateurSalarieEnvoyerMailAnnulationAbsence
     */
    public function withMail($Mail)
    {
        $new = clone $this;
        $new->Mail = $Mail;

        return $new;
    }
}

