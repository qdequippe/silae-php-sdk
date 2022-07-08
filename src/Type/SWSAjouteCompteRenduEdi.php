<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAjouteCompteRenduEdi implements RequestInterface
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
     */
    public function __construct($Token, $NumeroADS, $ADSACSARS, $StatutDeclaration, $StatutTelepaiement, $TypeMessage, $MessageTexte, $MessageBa)
    {
        $this->Token = $Token;
        $this->NumeroADS = $NumeroADS;
        $this->ADSACSARS = $ADSACSARS;
        $this->StatutDeclaration = $StatutDeclaration;
        $this->StatutTelepaiement = $StatutTelepaiement;
        $this->TypeMessage = $TypeMessage;
        $this->MessageTexte = $MessageTexte;
        $this->MessageBa = $MessageBa;
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
     * @return SWSAjouteCompteRenduEdi
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
     * @return SWSAjouteCompteRenduEdi
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
     * @return SWSAjouteCompteRenduEdi
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
     * @return SWSAjouteCompteRenduEdi
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
     * @return SWSAjouteCompteRenduEdi
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
     * @return SWSAjouteCompteRenduEdi
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
     * @return SWSAjouteCompteRenduEdi
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
     * @return SWSAjouteCompteRenduEdi
     */
    public function withMessageBa($MessageBa)
    {
        $new = clone $this;
        $new->MessageBa = $MessageBa;

        return $new;
    }
}

