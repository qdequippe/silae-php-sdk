<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurContactLireVisitesMedicales implements RequestInterface
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
    private $ID_CLIENT;

    /**
     * @var int
     */
    private $ID_DROIT;

    /**
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var \DateTimeInterface
     */
    private $DateMin;

    /**
     * @var \DateTimeInterface
     */
    private $DateMax;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_CLIENT
     * @var int $ID_DROIT
     * @var int $ID_PAISALARIE
     * @var int $IdentifiantEmploi
     * @var \DateTimeInterface $DateMin
     * @var \DateTimeInterface $DateMax
     */
    public function __construct($Token, $ID_DOMAINE, $ID_CLIENT, $ID_DROIT, $ID_PAISALARIE, $IdentifiantEmploi, $DateMin, $DateMax)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_CLIENT = $ID_CLIENT;
        $this->ID_DROIT = $ID_DROIT;
        $this->ID_PAISALARIE = $ID_PAISALARIE;
        $this->IdentifiantEmploi = $IdentifiantEmploi;
        $this->DateMin = $DateMin;
        $this->DateMax = $DateMax;
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
     * @return SWSUtilisateurContactLireVisitesMedicales
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
     * @return SWSUtilisateurContactLireVisitesMedicales
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
    public function getID_CLIENT()
    {
        return $this->ID_CLIENT;
    }

    /**
     * @param int $ID_CLIENT
     * @return SWSUtilisateurContactLireVisitesMedicales
     */
    public function withID_CLIENT($ID_CLIENT)
    {
        $new = clone $this;
        $new->ID_CLIENT = $ID_CLIENT;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_DROIT()
    {
        return $this->ID_DROIT;
    }

    /**
     * @param int $ID_DROIT
     * @return SWSUtilisateurContactLireVisitesMedicales
     */
    public function withID_DROIT($ID_DROIT)
    {
        $new = clone $this;
        $new->ID_DROIT = $ID_DROIT;

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
     * @return SWSUtilisateurContactLireVisitesMedicales
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

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
     * @return SWSUtilisateurContactLireVisitesMedicales
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateMin()
    {
        return $this->DateMin;
    }

    /**
     * @param \DateTimeInterface $DateMin
     * @return SWSUtilisateurContactLireVisitesMedicales
     */
    public function withDateMin($DateMin)
    {
        $new = clone $this;
        $new->DateMin = $DateMin;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateMax()
    {
        return $this->DateMax;
    }

    /**
     * @param \DateTimeInterface $DateMax
     * @return SWSUtilisateurContactLireVisitesMedicales
     */
    public function withDateMax($DateMax)
    {
        $new = clone $this;
        $new->DateMax = $DateMax;

        return $new;
    }
}

