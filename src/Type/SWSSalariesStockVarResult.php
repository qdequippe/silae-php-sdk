<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalariesStockVarResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseSalarieStockVar
     */
    private $SalariesStockVar;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseSalarieStockVar
     */
    public function getSalariesStockVar()
    {
        return $this->SalariesStockVar;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseSalarieStockVar $SalariesStockVar
     * @return SWSSalariesStockVarResult
     */
    public function withSalariesStockVar($SalariesStockVar)
    {
        $new = clone $this;
        $new->SalariesStockVar = $SalariesStockVar;

        return $new;
    }
}

