<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSRecuperationEquipesCongesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfManager
     */
    private $ListeManager;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfManager
     */
    public function getListeManager()
    {
        return $this->ListeManager;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfManager $ListeManager
     * @return SWSRecuperationEquipesCongesResult
     */
    public function withListeManager($ListeManager)
    {
        $new = clone $this;
        $new->ListeManager = $ListeManager;

        return $new;
    }
}

