<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSDocQuery implements RequestInterface
{
    /**
     * @var string
     */
    private $p1;

    /**
     * @var string
     */
    private $p2;

    /**
     * @var string
     */
    private $p3;

    /**
     * Constructor
     *
     * @var string $p1
     * @var string $p2
     * @var string $p3
     */
    public function __construct($p1, $p2, $p3)
    {
        $this->p1 = $p1;
        $this->p2 = $p2;
        $this->p3 = $p3;
    }

    /**
     * @return string
     */
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * @param string $p1
     * @return SWSDocQuery
     */
    public function withP1($p1)
    {
        $new = clone $this;
        $new->p1 = $p1;

        return $new;
    }

    /**
     * @return string
     */
    public function getP2()
    {
        return $this->p2;
    }

    /**
     * @param string $p2
     * @return SWSDocQuery
     */
    public function withP2($p2)
    {
        $new = clone $this;
        $new->p2 = $p2;

        return $new;
    }

    /**
     * @return string
     */
    public function getP3()
    {
        return $this->p3;
    }

    /**
     * @param string $p3
     * @return SWSDocQuery
     */
    public function withP3($p3)
    {
        $new = clone $this;
        $new->p3 = $p3;

        return $new;
    }
}

