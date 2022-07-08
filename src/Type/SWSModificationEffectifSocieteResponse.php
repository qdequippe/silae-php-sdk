<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationEffectifSocieteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationEffectifSocieteResult
     */
    private $SWS_ModificationEffectifSocieteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationEffectifSocieteResult
     */
    public function getSWS_ModificationEffectifSocieteResult()
    {
        return $this->SWS_ModificationEffectifSocieteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationEffectifSocieteResult $SWS_ModificationEffectifSocieteResult
     * @return SWSModificationEffectifSocieteResponse
     */
    public function withSWS_ModificationEffectifSocieteResult($SWS_ModificationEffectifSocieteResult)
    {
        $new = clone $this;
        $new->SWS_ModificationEffectifSocieteResult = $SWS_ModificationEffectifSocieteResult;

        return $new;
    }
}

