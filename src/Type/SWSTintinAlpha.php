<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSTintinAlpha implements RequestInterface
{
    /**
     * @var string
     */
    private $a;

    /**
     * @var string
     */
    private $b;

    /**
     * Constructor
     *
     * @var string $a
     * @var string $b
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return string
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param string $a
     * @return SWSTintinAlpha
     */
    public function withA($a)
    {
        $new = clone $this;
        $new->a = $a;

        return $new;
    }

    /**
     * @return string
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param string $b
     * @return SWSTintinAlpha
     */
    public function withB($b)
    {
        $new = clone $this;
        $new->b = $b;

        return $new;
    }
}

