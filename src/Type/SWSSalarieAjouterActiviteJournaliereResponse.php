<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterActiviteJournaliereResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterActiviteJournaliereResult
     */
    private $SWS_SalarieAjouterActiviteJournaliereResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterActiviteJournaliereResult
     */
    public function getSWS_SalarieAjouterActiviteJournaliereResult()
    {
        return $this->SWS_SalarieAjouterActiviteJournaliereResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterActiviteJournaliereResult $SWS_SalarieAjouterActiviteJournaliereResult
     * @return SWSSalarieAjouterActiviteJournaliereResponse
     */
    public function withSWS_SalarieAjouterActiviteJournaliereResult($SWS_SalarieAjouterActiviteJournaliereResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterActiviteJournaliereResult = $SWS_SalarieAjouterActiviteJournaliereResult;

        return $new;
    }
}

