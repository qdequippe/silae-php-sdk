<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSRecuperationEquipesCongesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRecuperationEquipesCongesResult
     */
    private $SWS_RecuperationEquipesCongesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRecuperationEquipesCongesResult
     */
    public function getSWS_RecuperationEquipesCongesResult()
    {
        return $this->SWS_RecuperationEquipesCongesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRecuperationEquipesCongesResult $SWS_RecuperationEquipesCongesResult
     * @return SWSRecuperationEquipesCongesResponse
     */
    public function withSWS_RecuperationEquipesCongesResult($SWS_RecuperationEquipesCongesResult)
    {
        $new = clone $this;
        $new->SWS_RecuperationEquipesCongesResult = $SWS_RecuperationEquipesCongesResult;

        return $new;
    }
}

