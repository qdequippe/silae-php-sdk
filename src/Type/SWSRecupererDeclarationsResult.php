<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSRecupererDeclarationsResult
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
     * @return SWSRecupererDeclarationsResult
     */
    public function withDocument($Document)
    {
        $new = clone $this;
        $new->Document = $Document;

        return $new;
    }
}

