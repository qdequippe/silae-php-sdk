<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSCreationOrganismeResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSCreationOrganismeResult
     */
    private $SWS_CreationOrganismeResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSCreationOrganismeResult
     */
    public function getSWS_CreationOrganismeResult()
    {
        return $this->SWS_CreationOrganismeResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSCreationOrganismeResult $SWS_CreationOrganismeResult
     * @return SWSCreationOrganismeResponse
     */
    public function withSWS_CreationOrganismeResult($SWS_CreationOrganismeResult)
    {
        $new = clone $this;
        $new->SWS_CreationOrganismeResult = $SWS_CreationOrganismeResult;

        return $new;
    }
}

