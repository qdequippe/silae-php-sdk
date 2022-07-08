<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeDocumentsGEDUtilisateurSalarieResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDescriptionCompleteDocumentGED
     */
    private $InformationsDocuments;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDescriptionCompleteDocumentGED
     */
    public function getInformationsDocuments()
    {
        return $this->InformationsDocuments;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDescriptionCompleteDocumentGED $InformationsDocuments
     * @return SWSListeDocumentsGEDUtilisateurSalarieResult
     */
    public function withInformationsDocuments($InformationsDocuments)
    {
        $new = clone $this;
        $new->InformationsDocuments = $InformationsDocuments;

        return $new;
    }
}

