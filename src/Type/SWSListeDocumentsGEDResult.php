<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeDocumentsGEDResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDescriptionDocumentGED
     */
    private $InformationsDocuments;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDescriptionDocumentGED
     */
    public function getInformationsDocuments()
    {
        return $this->InformationsDocuments;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDescriptionDocumentGED $InformationsDocuments
     * @return SWSListeDocumentsGEDResult
     */
    public function withInformationsDocuments($InformationsDocuments)
    {
        $new = clone $this;
        $new->InformationsDocuments = $InformationsDocuments;

        return $new;
    }
}

