<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEditionDetailDesCotisationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    private $SWS_EditionDetailDesCotisationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult
     */
    public function getSWS_EditionDetailDesCotisationsResult()
    {
        return $this->SWS_EditionDetailDesCotisationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEditionPaieResult $SWS_EditionDetailDesCotisationsResult
     * @return SWSEditionDetailDesCotisationsResponse
     */
    public function withSWS_EditionDetailDesCotisationsResult($SWS_EditionDetailDesCotisationsResult)
    {
        $new = clone $this;
        $new->SWS_EditionDetailDesCotisationsResult = $SWS_EditionDetailDesCotisationsResult;

        return $new;
    }
}

