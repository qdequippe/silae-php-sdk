<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSExtraListeManifestations implements RequestInterface
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
    private $Categorie;

    /**
     * @var \DateTimeInterface
     */
    private $DateDebutMin;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Categorie
     * @var \DateTimeInterface $DateDebutMin
     */
    public function __construct($Token, $NumeroDossier, $Categorie, $DateDebutMin)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Categorie = $Categorie;
        $this->DateDebutMin = $DateDebutMin;
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
     * @return SWSExtraListeManifestations
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
     * @return SWSExtraListeManifestations
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
    public function getCategorie()
    {
        return $this->Categorie;
    }

    /**
     * @param string $Categorie
     * @return SWSExtraListeManifestations
     */
    public function withCategorie($Categorie)
    {
        $new = clone $this;
        $new->Categorie = $Categorie;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebutMin()
    {
        return $this->DateDebutMin;
    }

    /**
     * @param \DateTimeInterface $DateDebutMin
     * @return SWSExtraListeManifestations
     */
    public function withDateDebutMin($DateDebutMin)
    {
        $new = clone $this;
        $new->DateDebutMin = $DateDebutMin;

        return $new;
    }
}

