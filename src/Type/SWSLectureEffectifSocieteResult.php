<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureEffectifSocieteResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifSociete
     */
    private $EffectifSociete;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifSociete
     */
    public function getEffectifSociete()
    {
        return $this->EffectifSociete;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifSociete $EffectifSociete
     * @return SWSLectureEffectifSocieteResult
     */
    public function withEffectifSociete($EffectifSociete)
    {
        $new = clone $this;
        $new->EffectifSociete = $EffectifSociete;

        return $new;
    }
}

