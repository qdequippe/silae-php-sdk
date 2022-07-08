<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAjouteCompteRenduEdi94 implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $NumeroADS;

    /**
     * @var string
     */
    private $ADSACSARS;

    /**
     * @var string
     */
    private $StatutDeclaration;

    /**
     * @var string
     */
    private $StatutTelepaiement;

    /**
     * @var string
     */
    private $TypeMessage;

    /**
     * @var string
     */
    private $MessageTexte;

    /**
     * @var string
     */
    private $MessageBa;

    /**
     * @var string
     */
    private $Crm94NomFichier;

    /**
     * @var string
     */
    private $Crm94Xml;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroADS
     * @var string $ADSACSARS
     * @var string $StatutDeclaration
     * @var string $StatutTelepaiement
     * @var string $TypeMessage
     * @var string $MessageTexte
     * @var string $MessageBa
     * @var string $Crm94NomFichier
     * @var string $Crm94Xml
     */
    public function __construct($Token, $NumeroADS, $ADSACSARS, $StatutDeclaration, $StatutTelepaiement, $TypeMessage, $MessageTexte, $MessageBa, $Crm94NomFichier, $Crm94Xml)
    {
        $this->Token = $Token;
        $this->NumeroADS = $NumeroADS;
        $this->ADSACSARS = $ADSACSARS;
        $this->StatutDeclaration = $StatutDeclaration;
        $this->StatutTelepaiement = $StatutTelepaiement;
        $this->TypeMessage = $TypeMessage;
        $this->MessageTexte = $MessageTexte;
        $this->MessageBa = $MessageBa;
        $this->Crm94NomFichier = $Crm94NomFichier;
        $this->Crm94Xml = $Crm94Xml;
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
     * @return SWSAjouteCompteRenduEdi94
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
    public function getNumeroADS()
    {
        return $this->NumeroADS;
    }

    /**
     * @param string $NumeroADS
     * @return SWSAjouteCompteRenduEdi94
     */
    public function withNumeroADS($NumeroADS)
    {
        $new = clone $this;
        $new->NumeroADS = $NumeroADS;

        return $new;
    }

    /**
     * @return string
     */
    public function getADSACSARS()
    {
        return $this->ADSACSARS;
    }

    /**
     * @param string $ADSACSARS
     * @return SWSAjouteCompteRenduEdi94
     */
    public function withADSACSARS($ADSACSARS)
    {
        $new = clone $this;
        $new->ADSACSARS = $ADSACSARS;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatutDeclaration()
    {
        return $this->StatutDeclaration;
    }

    /**
     * @param string $StatutDeclaration
     * @return SWSAjouteCompteRenduEdi94
     */
    public function withStatutDeclaration($StatutDeclaration)
    {
        $new = clone $this;
        $new->StatutDeclaration = $StatutDeclaration;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatutTelepaiement()
    {
        return $this->StatutTelepaiement;
    }

    /**
     * @param string $StatutTelepaiement
     * @return SWSAjouteCompteRenduEdi94
     */
    public function withStatutTelepaiement($StatutTelepaiement)
    {
        $new = clone $this;
        $new->StatutTelepaiement = $StatutTelepaiement;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeMessage()
    {
        return $this->TypeMessage;
    }

    /**
     * @param string $TypeMessage
     * @return SWSAjouteCompteRenduEdi94
     */
    public function withTypeMessage($TypeMessage)
    {
        $new = clone $this;
        $new->TypeMessage = $TypeMessage;

        return $new;
    }

    /**
     * @return string
     */
    public function getMessageTexte()
    {
        return $this->MessageTexte;
    }

    /**
     * @param string $MessageTexte
     * @return SWSAjouteCompteRenduEdi94
     */
    public function withMessageTexte($MessageTexte)
    {
        $new = clone $this;
        $new->MessageTexte = $MessageTexte;

        return $new;
    }

    /**
     * @return string
     */
    public function getMessageBa()
    {
        return $this->MessageBa;
    }

    /**
     * @param string $MessageBa
     * @return SWSAjouteCompteRenduEdi94
     */
    public function withMessageBa($MessageBa)
    {
        $new = clone $this;
        $new->MessageBa = $MessageBa;

        return $new;
    }

    /**
     * @return string
     */
    public function getCrm94NomFichier()
    {
        return $this->Crm94NomFichier;
    }

    /**
     * @param string $Crm94NomFichier
     * @return SWSAjouteCompteRenduEdi94
     */
    public function withCrm94NomFichier($Crm94NomFichier)
    {
        $new = clone $this;
        $new->Crm94NomFichier = $Crm94NomFichier;

        return $new;
    }

    /**
     * @return string
     */
    public function getCrm94Xml()
    {
        return $this->Crm94Xml;
    }

    /**
     * @param string $Crm94Xml
     * @return SWSAjouteCompteRenduEdi94
     */
    public function withCrm94Xml($Crm94Xml)
    {
        $new = clone $this;
        $new->Crm94Xml = $Crm94Xml;

        return $new;
    }
}

