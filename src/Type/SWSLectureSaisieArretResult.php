<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureSaisieArretResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSaisieArret
     */
    private $SaisieArrets;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSaisieArret
     */
    public function getSaisieArrets()
    {
        return $this->SaisieArrets;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSaisieArret $SaisieArrets
     * @return SWSLectureSaisieArretResult
     */
    public function withSaisieArrets($SaisieArrets)
    {
        $new = clone $this;
        $new->SaisieArrets = $SaisieArrets;

        return $new;
    }
}

