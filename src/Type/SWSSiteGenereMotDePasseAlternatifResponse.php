<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSiteGenereMotDePasseAlternatifResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSiteGenereMotDePasseAlternatifResult
     */
    private $SWS_SiteGenereMotDePasseAlternatifResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSiteGenereMotDePasseAlternatifResult
     */
    public function getSWS_SiteGenereMotDePasseAlternatifResult()
    {
        return $this->SWS_SiteGenereMotDePasseAlternatifResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSiteGenereMotDePasseAlternatifResult $SWS_SiteGenereMotDePasseAlternatifResult
     * @return SWSSiteGenereMotDePasseAlternatifResponse
     */
    public function withSWS_SiteGenereMotDePasseAlternatifResult($SWS_SiteGenereMotDePasseAlternatifResult)
    {
        $new = clone $this;
        $new->SWS_SiteGenereMotDePasseAlternatifResult = $SWS_SiteGenereMotDePasseAlternatifResult;

        return $new;
    }
}

