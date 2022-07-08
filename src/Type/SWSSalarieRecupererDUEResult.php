<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieRecupererDUEResult
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
     * @return SWSSalarieRecupererDUEResult
     */
    public function withDocument($Document)
    {
        $new = clone $this;
        $new->Document = $Document;

        return $new;
    }
}

