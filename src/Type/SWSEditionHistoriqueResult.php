<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSEditionHistoriqueResult
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
     * @return SWSEditionHistoriqueResult
     */
    public function withDocument($Document)
    {
        $new = clone $this;
        $new->Document = $Document;

        return $new;
    }
}

