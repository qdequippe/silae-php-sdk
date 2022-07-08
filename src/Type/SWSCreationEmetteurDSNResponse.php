<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSCreationEmetteurDSNResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSCreationEmetteurDSNResult
     */
    private $SWS_CreationEmetteurDSNResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSCreationEmetteurDSNResult
     */
    public function getSWS_CreationEmetteurDSNResult()
    {
        return $this->SWS_CreationEmetteurDSNResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSCreationEmetteurDSNResult $SWS_CreationEmetteurDSNResult
     * @return SWSCreationEmetteurDSNResponse
     */
    public function withSWS_CreationEmetteurDSNResult($SWS_CreationEmetteurDSNResult)
    {
        $new = clone $this;
        $new->SWS_CreationEmetteurDSNResult = $SWS_CreationEmetteurDSNResult;

        return $new;
    }
}

