<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSCCNSociete
{
    /**
     * @var string
     */
    private $CodeCCN;

    /**
     * @var string
     */
    private $IDCC;

    /**
     * @var string
     */
    private $CodeJO;

    /**
     * @var bool
     */
    private $ForceApplicationExtension;

    /**
     * @var string
     */
    private $Syndicat;

    /**
     * @return string
     */
    public function getCodeCCN()
    {
        return $this->CodeCCN;
    }

    /**
     * @param string $CodeCCN
     * @return CPAISWSCCNSociete
     */
    public function withCodeCCN($CodeCCN)
    {
        $new = clone $this;
        $new->CodeCCN = $CodeCCN;

        return $new;
    }

    /**
     * @return string
     */
    public function getIDCC()
    {
        return $this->IDCC;
    }

    /**
     * @param string $IDCC
     * @return CPAISWSCCNSociete
     */
    public function withIDCC($IDCC)
    {
        $new = clone $this;
        $new->IDCC = $IDCC;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeJO()
    {
        return $this->CodeJO;
    }

    /**
     * @param string $CodeJO
     * @return CPAISWSCCNSociete
     */
    public function withCodeJO($CodeJO)
    {
        $new = clone $this;
        $new->CodeJO = $CodeJO;

        return $new;
    }

    /**
     * @return bool
     */
    public function getForceApplicationExtension()
    {
        return $this->ForceApplicationExtension;
    }

    /**
     * @param bool $ForceApplicationExtension
     * @return CPAISWSCCNSociete
     */
    public function withForceApplicationExtension($ForceApplicationExtension)
    {
        $new = clone $this;
        $new->ForceApplicationExtension = $ForceApplicationExtension;

        return $new;
    }

    /**
     * @return string
     */
    public function getSyndicat()
    {
        return $this->Syndicat;
    }

    /**
     * @param string $Syndicat
     * @return CPAISWSCCNSociete
     */
    public function withSyndicat($Syndicat)
    {
        $new = clone $this;
        $new->Syndicat = $Syndicat;

        return $new;
    }
}

