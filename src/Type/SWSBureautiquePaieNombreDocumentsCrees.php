<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSBureautiquePaieNombreDocumentsCrees implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $NomDocument;

    /**
     * @var \DateTimeInterface
     */
    private $DateDebut;

    /**
     * @var \DateTimeInterface
     */
    private $DateFin;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NomDocument
     * @var \DateTimeInterface $DateDebut
     * @var \DateTimeInterface $DateFin
     */
    public function __construct($Token, $NomDocument, $DateDebut, $DateFin)
    {
        $this->Token = $Token;
        $this->NomDocument = $NomDocument;
        $this->DateDebut = $DateDebut;
        $this->DateFin = $DateFin;
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
     * @return SWSBureautiquePaieNombreDocumentsCrees
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
    public function getNomDocument()
    {
        return $this->NomDocument;
    }

    /**
     * @param string $NomDocument
     * @return SWSBureautiquePaieNombreDocumentsCrees
     */
    public function withNomDocument($NomDocument)
    {
        $new = clone $this;
        $new->NomDocument = $NomDocument;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * @param \DateTimeInterface $DateDebut
     * @return SWSBureautiquePaieNombreDocumentsCrees
     */
    public function withDateDebut($DateDebut)
    {
        $new = clone $this;
        $new->DateDebut = $DateDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateFin()
    {
        return $this->DateFin;
    }

    /**
     * @param \DateTimeInterface $DateFin
     * @return SWSBureautiquePaieNombreDocumentsCrees
     */
    public function withDateFin($DateFin)
    {
        $new = clone $this;
        $new->DateFin = $DateFin;

        return $new;
    }
}

