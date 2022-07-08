<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSClassificationMetierCompleteResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEmploiClassificationMetier
     */
    private $EmploisClassificationsMetiers;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEmploiClassificationMetier
     */
    public function getEmploisClassificationsMetiers()
    {
        return $this->EmploisClassificationsMetiers;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEmploiClassificationMetier $EmploisClassificationsMetiers
     * @return SWSClassificationMetierCompleteResult
     */
    public function withEmploisClassificationsMetiers($EmploisClassificationsMetiers)
    {
        $new = clone $this;
        $new->EmploisClassificationsMetiers = $EmploisClassificationsMetiers;

        return $new;
    }
}

