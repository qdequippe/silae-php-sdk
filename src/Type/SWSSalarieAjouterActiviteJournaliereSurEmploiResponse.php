<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterActiviteJournaliereSurEmploiResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterActiviteJournaliereResult
     */
    private $SWS_SalarieAjouterActiviteJournaliereSurEmploiResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterActiviteJournaliereResult
     */
    public function getSWS_SalarieAjouterActiviteJournaliereSurEmploiResult()
    {
        return $this->SWS_SalarieAjouterActiviteJournaliereSurEmploiResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterActiviteJournaliereResult $SWS_SalarieAjouterActiviteJournaliereSurEmploiResult
     * @return SWSSalarieAjouterActiviteJournaliereSurEmploiResponse
     */
    public function withSWS_SalarieAjouterActiviteJournaliereSurEmploiResult($SWS_SalarieAjouterActiviteJournaliereSurEmploiResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterActiviteJournaliereSurEmploiResult = $SWS_SalarieAjouterActiviteJournaliereSurEmploiResult;

        return $new;
    }
}

