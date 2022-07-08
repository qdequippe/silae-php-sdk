<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieBulletinLignesSelonFiltresResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinLignesResult
     */
    private $SWS_SalarieBulletinLignesSelonFiltresResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinLignesResult
     */
    public function getSWS_SalarieBulletinLignesSelonFiltresResult()
    {
        return $this->SWS_SalarieBulletinLignesSelonFiltresResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinLignesResult $SWS_SalarieBulletinLignesSelonFiltresResult
     * @return SWSSalarieBulletinLignesSelonFiltresResponse
     */
    public function withSWS_SalarieBulletinLignesSelonFiltresResult($SWS_SalarieBulletinLignesSelonFiltresResult)
    {
        $new = clone $this;
        $new->SWS_SalarieBulletinLignesSelonFiltresResult = $SWS_SalarieBulletinLignesSelonFiltresResult;

        return $new;
    }
}

