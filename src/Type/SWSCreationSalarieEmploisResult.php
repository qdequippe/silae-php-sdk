<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSCreationSalarieEmploisResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseCreationSalarieEmploi
     */
    private $ResultatsCreationsEmplois;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseCreationSalarieEmploi
     */
    public function getResultatsCreationsEmplois()
    {
        return $this->ResultatsCreationsEmplois;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseCreationSalarieEmploi $ResultatsCreationsEmplois
     * @return SWSCreationSalarieEmploisResult
     */
    public function withResultatsCreationsEmplois($ResultatsCreationsEmplois)
    {
        $new = clone $this;
        $new->ResultatsCreationsEmplois = $ResultatsCreationsEmplois;

        return $new;
    }
}

