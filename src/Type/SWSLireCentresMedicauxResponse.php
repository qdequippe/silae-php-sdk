<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLireCentresMedicauxResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLireCentresMedicauxResult
     */
    private $SWS_LireCentresMedicauxResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLireCentresMedicauxResult
     */
    public function getSWS_LireCentresMedicauxResult()
    {
        return $this->SWS_LireCentresMedicauxResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLireCentresMedicauxResult $SWS_LireCentresMedicauxResult
     * @return SWSLireCentresMedicauxResponse
     */
    public function withSWS_LireCentresMedicauxResult($SWS_LireCentresMedicauxResult)
    {
        $new = clone $this;
        $new->SWS_LireCentresMedicauxResult = $SWS_LireCentresMedicauxResult;

        return $new;
    }
}

