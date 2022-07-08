<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExtraListeManifestationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSExtraListeManifestationsResult
     */
    private $SWS_ExtraListeManifestationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSExtraListeManifestationsResult
     */
    public function getSWS_ExtraListeManifestationsResult()
    {
        return $this->SWS_ExtraListeManifestationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSExtraListeManifestationsResult $SWS_ExtraListeManifestationsResult
     * @return SWSExtraListeManifestationsResponse
     */
    public function withSWS_ExtraListeManifestationsResult($SWS_ExtraListeManifestationsResult)
    {
        $new = clone $this;
        $new->SWS_ExtraListeManifestationsResult = $SWS_ExtraListeManifestationsResult;

        return $new;
    }
}

