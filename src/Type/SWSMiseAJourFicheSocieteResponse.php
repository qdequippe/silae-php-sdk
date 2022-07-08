<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSMiseAJourFicheSocieteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSMiseAJourFicheSocieteResult
     */
    private $SWS_MiseAJourFicheSocieteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSMiseAJourFicheSocieteResult
     */
    public function getSWS_MiseAJourFicheSocieteResult()
    {
        return $this->SWS_MiseAJourFicheSocieteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSMiseAJourFicheSocieteResult $SWS_MiseAJourFicheSocieteResult
     * @return SWSMiseAJourFicheSocieteResponse
     */
    public function withSWS_MiseAJourFicheSocieteResult($SWS_MiseAJourFicheSocieteResult)
    {
        $new = clone $this;
        $new->SWS_MiseAJourFicheSocieteResult = $SWS_MiseAJourFicheSocieteResult;

        return $new;
    }
}

