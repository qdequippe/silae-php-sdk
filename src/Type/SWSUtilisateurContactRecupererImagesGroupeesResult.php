<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactRecupererImagesGroupeesResult
{
    /**
     * @var string
     */
    private $ImagesGroupees;

    /**
     * @return string
     */
    public function getImagesGroupees()
    {
        return $this->ImagesGroupees;
    }

    /**
     * @param string $ImagesGroupees
     * @return SWSUtilisateurContactRecupererImagesGroupeesResult
     */
    public function withImagesGroupees($ImagesGroupees)
    {
        $new = clone $this;
        $new->ImagesGroupees = $ImagesGroupees;

        return $new;
    }
}

