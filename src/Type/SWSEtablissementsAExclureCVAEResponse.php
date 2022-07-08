<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEtablissementsAExclureCVAEResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEtablissementsAExclureCVAEResult
     */
    private $SWS_EtablissementsAExclureCVAEResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEtablissementsAExclureCVAEResult
     */
    public function getSWS_EtablissementsAExclureCVAEResult()
    {
        return $this->SWS_EtablissementsAExclureCVAEResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEtablissementsAExclureCVAEResult $SWS_EtablissementsAExclureCVAEResult
     * @return SWSEtablissementsAExclureCVAEResponse
     */
    public function withSWS_EtablissementsAExclureCVAEResult($SWS_EtablissementsAExclureCVAEResult)
    {
        $new = clone $this;
        $new->SWS_EtablissementsAExclureCVAEResult = $SWS_EtablissementsAExclureCVAEResult;

        return $new;
    }
}

