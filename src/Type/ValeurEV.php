<?php

namespace Qdequippe\SilaePhpSdk\Type;

class ValeurEV
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\BaseTaux
     */
    private $BaseTaux;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $valeur;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\BaseTaux
     */
    public function getBaseTaux()
    {
        return $this->BaseTaux;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\BaseTaux $BaseTaux
     * @return ValeurEV
     */
    public function withBaseTaux($BaseTaux)
    {
        $new = clone $this;
        $new->BaseTaux = $BaseTaux;

        return $new;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ValeurEV
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param string $valeur
     * @return ValeurEV
     */
    public function withValeur($valeur)
    {
        $new = clone $this;
        $new->valeur = $valeur;

        return $new;
    }
}

