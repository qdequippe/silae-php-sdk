<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExtraCreationManifestationResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSExtraCreationManifestationResult
     */
    private $SWS_ExtraCreationManifestationResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSExtraCreationManifestationResult
     */
    public function getSWS_ExtraCreationManifestationResult()
    {
        return $this->SWS_ExtraCreationManifestationResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSExtraCreationManifestationResult $SWS_ExtraCreationManifestationResult
     * @return SWSExtraCreationManifestationResponse
     */
    public function withSWS_ExtraCreationManifestationResult($SWS_ExtraCreationManifestationResult)
    {
        $new = clone $this;
        $new->SWS_ExtraCreationManifestationResult = $SWS_ExtraCreationManifestationResult;

        return $new;
    }
}

