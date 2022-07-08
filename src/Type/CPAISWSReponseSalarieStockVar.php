<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSReponseSalarieStockVar
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $CodesStockVar;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $ValeursStockVar;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSReponseSalarieStockVar
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getCodesStockVar()
    {
        return $this->CodesStockVar;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $CodesStockVar
     * @return CPAISWSReponseSalarieStockVar
     */
    public function withCodesStockVar($CodesStockVar)
    {
        $new = clone $this;
        $new->CodesStockVar = $CodesStockVar;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getValeursStockVar()
    {
        return $this->ValeursStockVar;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $ValeursStockVar
     * @return CPAISWSReponseSalarieStockVar
     */
    public function withValeursStockVar($ValeursStockVar)
    {
        $new = clone $this;
        $new->ValeursStockVar = $ValeursStockVar;

        return $new;
    }
}

