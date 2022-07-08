<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLireVisitesMedicalesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLireVisitesMedicalesResult
     */
    private $SWS_LireVisitesMedicalesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLireVisitesMedicalesResult
     */
    public function getSWS_LireVisitesMedicalesResult()
    {
        return $this->SWS_LireVisitesMedicalesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLireVisitesMedicalesResult $SWS_LireVisitesMedicalesResult
     * @return SWSLireVisitesMedicalesResponse
     */
    public function withSWS_LireVisitesMedicalesResult($SWS_LireVisitesMedicalesResult)
    {
        $new = clone $this;
        $new->SWS_LireVisitesMedicalesResult = $SWS_LireVisitesMedicalesResult;

        return $new;
    }
}

