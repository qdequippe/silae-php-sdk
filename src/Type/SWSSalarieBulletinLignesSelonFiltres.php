<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieBulletinLignesSelonFiltres implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignes
     */
    private $RequeteSalarieBulletinLignes;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    private $RequeteSalarieBulletinLignesFiltres;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignes $RequeteSalarieBulletinLignes
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignesFiltres $RequeteSalarieBulletinLignesFiltres
     */
    public function __construct($Token, $NumeroDossier, $RequeteSalarieBulletinLignes, $RequeteSalarieBulletinLignesFiltres)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->RequeteSalarieBulletinLignes = $RequeteSalarieBulletinLignes;
        $this->RequeteSalarieBulletinLignesFiltres = $RequeteSalarieBulletinLignesFiltres;
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
     * @return SWSSalarieBulletinLignesSelonFiltres
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
     * @return SWSSalarieBulletinLignesSelonFiltres
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignes
     */
    public function getRequeteSalarieBulletinLignes()
    {
        return $this->RequeteSalarieBulletinLignes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignes $RequeteSalarieBulletinLignes
     * @return SWSSalarieBulletinLignesSelonFiltres
     */
    public function withRequeteSalarieBulletinLignes($RequeteSalarieBulletinLignes)
    {
        $new = clone $this;
        $new->RequeteSalarieBulletinLignes = $RequeteSalarieBulletinLignes;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function getRequeteSalarieBulletinLignesFiltres()
    {
        return $this->RequeteSalarieBulletinLignesFiltres;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRequeteSalarieBulletinLignesFiltres $RequeteSalarieBulletinLignesFiltres
     * @return SWSSalarieBulletinLignesSelonFiltres
     */
    public function withRequeteSalarieBulletinLignesFiltres($RequeteSalarieBulletinLignesFiltres)
    {
        $new = clone $this;
        $new->RequeteSalarieBulletinLignesFiltres = $RequeteSalarieBulletinLignesFiltres;

        return $new;
    }
}

