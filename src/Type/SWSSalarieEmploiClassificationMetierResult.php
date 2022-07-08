<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieEmploiClassificationMetierResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier
     */
    private $EmploiClassificationMetier;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier
     */
    public function getEmploiClassificationMetier()
    {
        return $this->EmploiClassificationMetier;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEmploiClassificationMetier $EmploiClassificationMetier
     * @return SWSSalarieEmploiClassificationMetierResult
     */
    public function withEmploiClassificationMetier($EmploiClassificationMetier)
    {
        $new = clone $this;
        $new->EmploiClassificationMetier = $EmploiClassificationMetier;

        return $new;
    }
}

