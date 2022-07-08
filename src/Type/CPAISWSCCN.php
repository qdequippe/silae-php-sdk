<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSCCN
{
    /**
     * @var string
     */
    private $CodeCCN;

    /**
     * @var string
     */
    private $LibelleCCN;

    /**
     * @var string
     */
    private $CodeIDCC;

    /**
     * @var string
     */
    private $LibelleIDCC;

    /**
     * @var string
     */
    private $CodeJO;

    /**
     * @var string
     */
    private $LibelleJO;

    /**
     * @return string
     */
    public function getCodeCCN()
    {
        return $this->CodeCCN;
    }

    /**
     * @param string $CodeCCN
     * @return CPAISWSCCN
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
    public function getLibelleCCN()
    {
        return $this->LibelleCCN;
    }

    /**
     * @param string $LibelleCCN
     * @return CPAISWSCCN
     */
    public function withLibelleCCN($LibelleCCN)
    {
        $new = clone $this;
        $new->LibelleCCN = $LibelleCCN;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeIDCC()
    {
        return $this->CodeIDCC;
    }

    /**
     * @param string $CodeIDCC
     * @return CPAISWSCCN
     */
    public function withCodeIDCC($CodeIDCC)
    {
        $new = clone $this;
        $new->CodeIDCC = $CodeIDCC;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleIDCC()
    {
        return $this->LibelleIDCC;
    }

    /**
     * @param string $LibelleIDCC
     * @return CPAISWSCCN
     */
    public function withLibelleIDCC($LibelleIDCC)
    {
        $new = clone $this;
        $new->LibelleIDCC = $LibelleIDCC;

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
     * @return CPAISWSCCN
     */
    public function withCodeJO($CodeJO)
    {
        $new = clone $this;
        $new->CodeJO = $CodeJO;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleJO()
    {
        return $this->LibelleJO;
    }

    /**
     * @param string $LibelleJO
     * @return CPAISWSCCN
     */
    public function withLibelleJO($LibelleJO)
    {
        $new = clone $this;
        $new->LibelleJO = $LibelleJO;

        return $new;
    }
}

