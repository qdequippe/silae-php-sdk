<?php

namespace Qdequippe\SilaePhpSdk\Type;

class Options
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $MatriculeSalarie;

    /**
     * @var bool
     */
    private $InclureEVManuels;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $MatriculeSalarie
     * @return Options
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInclureEVManuels()
    {
        return $this->InclureEVManuels;
    }

    /**
     * @param bool $InclureEVManuels
     * @return Options
     */
    public function withInclureEVManuels($InclureEVManuels)
    {
        $new = clone $this;
        $new->InclureEVManuels = $InclureEVManuels;

        return $new;
    }
}

