<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSExcelLogin implements RequestInterface
{
    /**
     * @var string
     */
    private $LoginSWS;

    /**
     * @var string
     */
    private $PwdSWS;

    /**
     * @var string
     */
    private $LoginSilae;

    /**
     * @var string
     */
    private $PwdSilae;

    /**
     * Constructor
     *
     * @var string $LoginSWS
     * @var string $PwdSWS
     * @var string $LoginSilae
     * @var string $PwdSilae
     */
    public function __construct($LoginSWS, $PwdSWS, $LoginSilae, $PwdSilae)
    {
        $this->LoginSWS = $LoginSWS;
        $this->PwdSWS = $PwdSWS;
        $this->LoginSilae = $LoginSilae;
        $this->PwdSilae = $PwdSilae;
    }

    /**
     * @return string
     */
    public function getLoginSWS()
    {
        return $this->LoginSWS;
    }

    /**
     * @param string $LoginSWS
     * @return SWSExcelLogin
     */
    public function withLoginSWS($LoginSWS)
    {
        $new = clone $this;
        $new->LoginSWS = $LoginSWS;

        return $new;
    }

    /**
     * @return string
     */
    public function getPwdSWS()
    {
        return $this->PwdSWS;
    }

    /**
     * @param string $PwdSWS
     * @return SWSExcelLogin
     */
    public function withPwdSWS($PwdSWS)
    {
        $new = clone $this;
        $new->PwdSWS = $PwdSWS;

        return $new;
    }

    /**
     * @return string
     */
    public function getLoginSilae()
    {
        return $this->LoginSilae;
    }

    /**
     * @param string $LoginSilae
     * @return SWSExcelLogin
     */
    public function withLoginSilae($LoginSilae)
    {
        $new = clone $this;
        $new->LoginSilae = $LoginSilae;

        return $new;
    }

    /**
     * @return string
     */
    public function getPwdSilae()
    {
        return $this->PwdSilae;
    }

    /**
     * @param string $PwdSilae
     * @return SWSExcelLogin
     */
    public function withPwdSilae($PwdSilae)
    {
        $new = clone $this;
        $new->PwdSilae = $PwdSilae;

        return $new;
    }
}

