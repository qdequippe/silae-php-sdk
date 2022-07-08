<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalariesBulletinsResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseSalarieBulletins
     */
    private $Arr_SalariesBulletins;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseSalarieBulletins
     */
    public function getArr_SalariesBulletins()
    {
        return $this->Arr_SalariesBulletins;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSReponseSalarieBulletins $Arr_SalariesBulletins
     * @return SWSSalariesBulletinsResult
     */
    public function withArr_SalariesBulletins($Arr_SalariesBulletins)
    {
        $new = clone $this;
        $new->Arr_SalariesBulletins = $Arr_SalariesBulletins;

        return $new;
    }
}

