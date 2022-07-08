<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSEtablissementsAExclureCVAEResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $EtablissementsTraites;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getEtablissementsTraites()
    {
        return $this->EtablissementsTraites;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $EtablissementsTraites
     * @return SWSEtablissementsAExclureCVAEResult
     */
    public function withEtablissementsTraites($EtablissementsTraites)
    {
        $new = clone $this;
        $new->EtablissementsTraites = $EtablissementsTraites;

        return $new;
    }
}

