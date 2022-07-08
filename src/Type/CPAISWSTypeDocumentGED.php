<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSTypeDocumentGED
{
    /**
     * @var string
     */
    private $CodeType;

    /**
     * @var string
     */
    private $LibelleType;

    /**
     * @var int
     */
    private $NombreDocument;

    /**
     * @return string
     */
    public function getCodeType()
    {
        return $this->CodeType;
    }

    /**
     * @param string $CodeType
     * @return CPAISWSTypeDocumentGED
     */
    public function withCodeType($CodeType)
    {
        $new = clone $this;
        $new->CodeType = $CodeType;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleType()
    {
        return $this->LibelleType;
    }

    /**
     * @param string $LibelleType
     * @return CPAISWSTypeDocumentGED
     */
    public function withLibelleType($LibelleType)
    {
        $new = clone $this;
        $new->LibelleType = $LibelleType;

        return $new;
    }

    /**
     * @return int
     */
    public function getNombreDocument()
    {
        return $this->NombreDocument;
    }

    /**
     * @param int $NombreDocument
     * @return CPAISWSTypeDocumentGED
     */
    public function withNombreDocument($NombreDocument)
    {
        $new = clone $this;
        $new->NombreDocument = $NombreDocument;

        return $new;
    }
}

