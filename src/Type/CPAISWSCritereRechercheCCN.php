<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSCritereRechercheCCN
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $ListeCodesNAF;

    /**
     * @var string
     */
    private $CodeIDCC;

    /**
     * @var string
     */
    private $CodeJO;

    /**
     * @var string
     */
    private $TexteLibre;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getListeCodesNAF()
    {
        return $this->ListeCodesNAF;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $ListeCodesNAF
     * @return CPAISWSCritereRechercheCCN
     */
    public function withListeCodesNAF($ListeCodesNAF)
    {
        $new = clone $this;
        $new->ListeCodesNAF = $ListeCodesNAF;

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
     * @return CPAISWSCritereRechercheCCN
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
    public function getCodeJO()
    {
        return $this->CodeJO;
    }

    /**
     * @param string $CodeJO
     * @return CPAISWSCritereRechercheCCN
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
    public function getTexteLibre()
    {
        return $this->TexteLibre;
    }

    /**
     * @param string $TexteLibre
     * @return CPAISWSCritereRechercheCCN
     */
    public function withTexteLibre($TexteLibre)
    {
        $new = clone $this;
        $new->TexteLibre = $TexteLibre;

        return $new;
    }
}

