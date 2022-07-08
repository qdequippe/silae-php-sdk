<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSRecupererFichiersVirementsChiffresResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRecupererFichiersVirementsChiffresResult
     */
    private $SWS_RecupererFichiersVirementsChiffresResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRecupererFichiersVirementsChiffresResult
     */
    public function getSWS_RecupererFichiersVirementsChiffresResult()
    {
        return $this->SWS_RecupererFichiersVirementsChiffresResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRecupererFichiersVirementsChiffresResult $SWS_RecupererFichiersVirementsChiffresResult
     * @return SWSRecupererFichiersVirementsChiffresResponse
     */
    public function withSWS_RecupererFichiersVirementsChiffresResult($SWS_RecupererFichiersVirementsChiffresResult)
    {
        $new = clone $this;
        $new->SWS_RecupererFichiersVirementsChiffresResult = $SWS_RecupererFichiersVirementsChiffresResult;

        return $new;
    }
}

