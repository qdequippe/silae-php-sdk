<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEnregistrerVisiteMedicaleResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEnregistrerVisiteMedicaleResult
     */
    private $SWS_EnregistrerVisiteMedicaleResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEnregistrerVisiteMedicaleResult
     */
    public function getSWS_EnregistrerVisiteMedicaleResult()
    {
        return $this->SWS_EnregistrerVisiteMedicaleResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEnregistrerVisiteMedicaleResult $SWS_EnregistrerVisiteMedicaleResult
     * @return SWSEnregistrerVisiteMedicaleResponse
     */
    public function withSWS_EnregistrerVisiteMedicaleResult($SWS_EnregistrerVisiteMedicaleResult)
    {
        $new = clone $this;
        $new->SWS_EnregistrerVisiteMedicaleResult = $SWS_EnregistrerVisiteMedicaleResult;

        return $new;
    }
}

