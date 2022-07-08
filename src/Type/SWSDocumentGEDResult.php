<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSDocumentGEDResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSDocumentGED
     */
    private $Document;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSDocumentGED
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSDocumentGED $Document
     * @return SWSDocumentGEDResult
     */
    public function withDocument($Document)
    {
        $new = clone $this;
        $new->Document = $Document;

        return $new;
    }
}

