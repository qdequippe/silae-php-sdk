<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEtatDeclarationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEtatDeclarationsResult
     */
    private $SWS_EtatDeclarationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEtatDeclarationsResult
     */
    public function getSWS_EtatDeclarationsResult()
    {
        return $this->SWS_EtatDeclarationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEtatDeclarationsResult $SWS_EtatDeclarationsResult
     * @return SWSEtatDeclarationsResponse
     */
    public function withSWS_EtatDeclarationsResult($SWS_EtatDeclarationsResult)
    {
        $new = clone $this;
        $new->SWS_EtatDeclarationsResult = $SWS_EtatDeclarationsResult;

        return $new;
    }
}

