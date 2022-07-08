<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureEffectifEtablissementResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifEtablissement
     */
    private $EffectifEtablissement;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifEtablissement
     */
    public function getEffectifEtablissement()
    {
        return $this->EffectifEtablissement;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifEtablissement $EffectifEtablissement
     * @return SWSLectureEffectifEtablissementResult
     */
    public function withEffectifEtablissement($EffectifEtablissement)
    {
        $new = clone $this;
        $new->EffectifEtablissement = $EffectifEtablissement;

        return $new;
    }
}

