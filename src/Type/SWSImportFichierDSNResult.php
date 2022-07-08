<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSImportFichierDSNResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSRetourImportDSN
     */
    private $RetourImportDSN;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSRetourImportDSN
     */
    public function getRetourImportDSN()
    {
        return $this->RetourImportDSN;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSRetourImportDSN $RetourImportDSN
     * @return SWSImportFichierDSNResult
     */
    public function withRetourImportDSN($RetourImportDSN)
    {
        $new = clone $this;
        $new->RetourImportDSN = $RetourImportDSN;

        return $new;
    }
}

