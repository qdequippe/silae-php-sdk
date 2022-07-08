<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSRecupererImageResult
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
     * @return SWSRecupererImageResult
     */
    public function withImage($Image)
    {
        $new = clone $this;
        $new->Image = $Image;

        return $new;
    }
}

