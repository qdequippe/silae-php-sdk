<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationInformationBancaireSocieteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationInformationBancaireSocieteResult
     */
    private $SWS_ModificationInformationBancaireSocieteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationInformationBancaireSocieteResult
     */
    public function getSWS_ModificationInformationBancaireSocieteResult()
    {
        return $this->SWS_ModificationInformationBancaireSocieteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationInformationBancaireSocieteResult $SWS_ModificationInformationBancaireSocieteResult
     * @return SWSModificationInformationBancaireSocieteResponse
     */
    public function withSWS_ModificationInformationBancaireSocieteResult($SWS_ModificationInformationBancaireSocieteResult)
    {
        $new = clone $this;
        $new->SWS_ModificationInformationBancaireSocieteResult = $SWS_ModificationInformationBancaireSocieteResult;

        return $new;
    }
}

