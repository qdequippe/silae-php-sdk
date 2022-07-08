<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSEditionPaieResult
{
    /**
     * @var string
     */
    private $Document;

    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * @param string $Document
     * @return SWSEditionPaieResult
     */
    public function withDocument($Document)
    {
        $new = clone $this;
        $new->Document = $Document;

        return $new;
    }
}

