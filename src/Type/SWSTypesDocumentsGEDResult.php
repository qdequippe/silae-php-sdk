<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSTypesDocumentsGEDResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSTypeDocumentGED
     */
    private $TypesDocuments;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSTypeDocumentGED
     */
    public function getTypesDocuments()
    {
        return $this->TypesDocuments;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSTypeDocumentGED $TypesDocuments
     * @return SWSTypesDocumentsGEDResult
     */
    public function withTypesDocuments($TypesDocuments)
    {
        $new = clone $this;
        $new->TypesDocuments = $TypesDocuments;

        return $new;
    }
}

