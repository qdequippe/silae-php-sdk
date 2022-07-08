<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationEffectifEtablissementResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationEffectifEtablissementResult
     */
    private $SWS_ModificationEffectifEtablissementResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationEffectifEtablissementResult
     */
    public function getSWS_ModificationEffectifEtablissementResult()
    {
        return $this->SWS_ModificationEffectifEtablissementResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationEffectifEtablissementResult $SWS_ModificationEffectifEtablissementResult
     * @return SWSModificationEffectifEtablissementResponse
     */
    public function withSWS_ModificationEffectifEtablissementResult($SWS_ModificationEffectifEtablissementResult)
    {
        $new = clone $this;
        $new->SWS_ModificationEffectifEtablissementResult = $SWS_ModificationEffectifEtablissementResult;

        return $new;
    }
}

