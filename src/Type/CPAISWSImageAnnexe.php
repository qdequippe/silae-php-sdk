<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSImageAnnexe
{
    /**
     * @var string
     */
    private $Image;

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param string $Image
     * @return CPAISWSImageAnnexe
     */
    public function withImage($Image)
    {
        $new = clone $this;
        $new->Image = $Image;

        return $new;
    }
}

