<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSystemStatus implements RequestInterface
{
    /**
     * @var string
     */
    private $Param1;

    /**
     * @var string
     */
    private $Param2;

    /**
     * Constructor
     *
     * @var string $Param1
     * @var string $Param2
     */
    public function __construct($Param1, $Param2)
    {
        $this->Param1 = $Param1;
        $this->Param2 = $Param2;
    }

    /**
     * @return string
     */
    public function getParam1()
    {
        return $this->Param1;
    }

    /**
     * @param string $Param1
     * @return SWSSystemStatus
     */
    public function withParam1($Param1)
    {
        $new = clone $this;
        $new->Param1 = $Param1;

        return $new;
    }

    /**
     * @return string
     */
    public function getParam2()
    {
        return $this->Param2;
    }

    /**
     * @param string $Param2
     * @return SWSSystemStatus
     */
    public function withParam2($Param2)
    {
        $new = clone $this;
        $new->Param2 = $Param2;

        return $new;
    }
}

