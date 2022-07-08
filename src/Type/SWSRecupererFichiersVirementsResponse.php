<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSRecupererFichiersVirementsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRecupererFichiersVirementsResult
     */
    private $SWS_RecupererFichiersVirementsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRecupererFichiersVirementsResult
     */
    public function getSWS_RecupererFichiersVirementsResult()
    {
        return $this->SWS_RecupererFichiersVirementsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRecupererFichiersVirementsResult $SWS_RecupererFichiersVirementsResult
     * @return SWSRecupererFichiersVirementsResponse
     */
    public function withSWS_RecupererFichiersVirementsResult($SWS_RecupererFichiersVirementsResult)
    {
        $new = clone $this;
        $new->SWS_RecupererFichiersVirementsResult = $SWS_RecupererFichiersVirementsResult;

        return $new;
    }
}

