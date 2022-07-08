<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieCumuls
{
    /**
     * @var bool
     */
    private $CP_ModifierCumuls;

    /**
     * @var float
     */
    private $CP_AcquisParReportN1;

    /**
     * @var float
     */
    private $CP_AcquisParAncienneteN1;

    /**
     * @var float
     */
    private $CP_AcquisParFractionnementN1;

    /**
     * @var float
     */
    private $CP_TotalAcquisN1;

    /**
     * @var float
     */
    private $CP_TotalPrisN1;

    /**
     * @var float
     */
    private $CP_ProvisionAcquiseParReportN1;

    /**
     * @var float
     */
    private $CP_TotalProvisionAcquiseN1;

    /**
     * @var float
     */
    private $CP_TotalProvisionConsommeeN1;

    /**
     * @var float
     */
    private $CP_TotalAcquisN;

    /**
     * @var float
     */
    private $CP_TotalPrisN;

    /**
     * @var float
     */
    private $CP_TotalProvisionAcquiseN;

    /**
     * @var float
     */
    private $CP_TotalProvisionConsommeeN;

    /**
     * @var bool
     */
    private $RTT_ModifierCumuls;

    /**
     * @var float
     */
    private $RTT_JoursAcquis;

    /**
     * @var float
     */
    private $RTT_JoursPris;

    /**
     * @var bool
     */
    private $RCR_ModifierCumuls;

    /**
     * @var float
     */
    private $RCR_HeuresAcquises;

    /**
     * @var float
     */
    private $RCR_HeuresPrises;

    /**
     * @var bool
     */
    private $RCC_ModifierCumuls;

    /**
     * @var float
     */
    private $RCC_HeuresAcquises;

    /**
     * @var float
     */
    private $RCC_HeuresPrises;

    /**
     * @var bool
     */
    private $RCO_ModifierCumuls;

    /**
     * @var float
     */
    private $RCO_HeuresAcquises;

    /**
     * @var float
     */
    private $RCO_HeuresPrises;

    /**
     * @return bool
     */
    public function getCP_ModifierCumuls()
    {
        return $this->CP_ModifierCumuls;
    }

    /**
     * @param bool $CP_ModifierCumuls
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_ModifierCumuls($CP_ModifierCumuls)
    {
        $new = clone $this;
        $new->CP_ModifierCumuls = $CP_ModifierCumuls;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_AcquisParReportN1()
    {
        return $this->CP_AcquisParReportN1;
    }

    /**
     * @param float $CP_AcquisParReportN1
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_AcquisParReportN1($CP_AcquisParReportN1)
    {
        $new = clone $this;
        $new->CP_AcquisParReportN1 = $CP_AcquisParReportN1;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_AcquisParAncienneteN1()
    {
        return $this->CP_AcquisParAncienneteN1;
    }

    /**
     * @param float $CP_AcquisParAncienneteN1
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_AcquisParAncienneteN1($CP_AcquisParAncienneteN1)
    {
        $new = clone $this;
        $new->CP_AcquisParAncienneteN1 = $CP_AcquisParAncienneteN1;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_AcquisParFractionnementN1()
    {
        return $this->CP_AcquisParFractionnementN1;
    }

    /**
     * @param float $CP_AcquisParFractionnementN1
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_AcquisParFractionnementN1($CP_AcquisParFractionnementN1)
    {
        $new = clone $this;
        $new->CP_AcquisParFractionnementN1 = $CP_AcquisParFractionnementN1;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_TotalAcquisN1()
    {
        return $this->CP_TotalAcquisN1;
    }

    /**
     * @param float $CP_TotalAcquisN1
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_TotalAcquisN1($CP_TotalAcquisN1)
    {
        $new = clone $this;
        $new->CP_TotalAcquisN1 = $CP_TotalAcquisN1;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_TotalPrisN1()
    {
        return $this->CP_TotalPrisN1;
    }

    /**
     * @param float $CP_TotalPrisN1
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_TotalPrisN1($CP_TotalPrisN1)
    {
        $new = clone $this;
        $new->CP_TotalPrisN1 = $CP_TotalPrisN1;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_ProvisionAcquiseParReportN1()
    {
        return $this->CP_ProvisionAcquiseParReportN1;
    }

    /**
     * @param float $CP_ProvisionAcquiseParReportN1
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_ProvisionAcquiseParReportN1($CP_ProvisionAcquiseParReportN1)
    {
        $new = clone $this;
        $new->CP_ProvisionAcquiseParReportN1 = $CP_ProvisionAcquiseParReportN1;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_TotalProvisionAcquiseN1()
    {
        return $this->CP_TotalProvisionAcquiseN1;
    }

    /**
     * @param float $CP_TotalProvisionAcquiseN1
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_TotalProvisionAcquiseN1($CP_TotalProvisionAcquiseN1)
    {
        $new = clone $this;
        $new->CP_TotalProvisionAcquiseN1 = $CP_TotalProvisionAcquiseN1;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_TotalProvisionConsommeeN1()
    {
        return $this->CP_TotalProvisionConsommeeN1;
    }

    /**
     * @param float $CP_TotalProvisionConsommeeN1
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_TotalProvisionConsommeeN1($CP_TotalProvisionConsommeeN1)
    {
        $new = clone $this;
        $new->CP_TotalProvisionConsommeeN1 = $CP_TotalProvisionConsommeeN1;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_TotalAcquisN()
    {
        return $this->CP_TotalAcquisN;
    }

    /**
     * @param float $CP_TotalAcquisN
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_TotalAcquisN($CP_TotalAcquisN)
    {
        $new = clone $this;
        $new->CP_TotalAcquisN = $CP_TotalAcquisN;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_TotalPrisN()
    {
        return $this->CP_TotalPrisN;
    }

    /**
     * @param float $CP_TotalPrisN
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_TotalPrisN($CP_TotalPrisN)
    {
        $new = clone $this;
        $new->CP_TotalPrisN = $CP_TotalPrisN;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_TotalProvisionAcquiseN()
    {
        return $this->CP_TotalProvisionAcquiseN;
    }

    /**
     * @param float $CP_TotalProvisionAcquiseN
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_TotalProvisionAcquiseN($CP_TotalProvisionAcquiseN)
    {
        $new = clone $this;
        $new->CP_TotalProvisionAcquiseN = $CP_TotalProvisionAcquiseN;

        return $new;
    }

    /**
     * @return float
     */
    public function getCP_TotalProvisionConsommeeN()
    {
        return $this->CP_TotalProvisionConsommeeN;
    }

    /**
     * @param float $CP_TotalProvisionConsommeeN
     * @return CPAISWSSalarieCumuls
     */
    public function withCP_TotalProvisionConsommeeN($CP_TotalProvisionConsommeeN)
    {
        $new = clone $this;
        $new->CP_TotalProvisionConsommeeN = $CP_TotalProvisionConsommeeN;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRTT_ModifierCumuls()
    {
        return $this->RTT_ModifierCumuls;
    }

    /**
     * @param bool $RTT_ModifierCumuls
     * @return CPAISWSSalarieCumuls
     */
    public function withRTT_ModifierCumuls($RTT_ModifierCumuls)
    {
        $new = clone $this;
        $new->RTT_ModifierCumuls = $RTT_ModifierCumuls;

        return $new;
    }

    /**
     * @return float
     */
    public function getRTT_JoursAcquis()
    {
        return $this->RTT_JoursAcquis;
    }

    /**
     * @param float $RTT_JoursAcquis
     * @return CPAISWSSalarieCumuls
     */
    public function withRTT_JoursAcquis($RTT_JoursAcquis)
    {
        $new = clone $this;
        $new->RTT_JoursAcquis = $RTT_JoursAcquis;

        return $new;
    }

    /**
     * @return float
     */
    public function getRTT_JoursPris()
    {
        return $this->RTT_JoursPris;
    }

    /**
     * @param float $RTT_JoursPris
     * @return CPAISWSSalarieCumuls
     */
    public function withRTT_JoursPris($RTT_JoursPris)
    {
        $new = clone $this;
        $new->RTT_JoursPris = $RTT_JoursPris;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRCR_ModifierCumuls()
    {
        return $this->RCR_ModifierCumuls;
    }

    /**
     * @param bool $RCR_ModifierCumuls
     * @return CPAISWSSalarieCumuls
     */
    public function withRCR_ModifierCumuls($RCR_ModifierCumuls)
    {
        $new = clone $this;
        $new->RCR_ModifierCumuls = $RCR_ModifierCumuls;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCR_HeuresAcquises()
    {
        return $this->RCR_HeuresAcquises;
    }

    /**
     * @param float $RCR_HeuresAcquises
     * @return CPAISWSSalarieCumuls
     */
    public function withRCR_HeuresAcquises($RCR_HeuresAcquises)
    {
        $new = clone $this;
        $new->RCR_HeuresAcquises = $RCR_HeuresAcquises;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCR_HeuresPrises()
    {
        return $this->RCR_HeuresPrises;
    }

    /**
     * @param float $RCR_HeuresPrises
     * @return CPAISWSSalarieCumuls
     */
    public function withRCR_HeuresPrises($RCR_HeuresPrises)
    {
        $new = clone $this;
        $new->RCR_HeuresPrises = $RCR_HeuresPrises;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRCC_ModifierCumuls()
    {
        return $this->RCC_ModifierCumuls;
    }

    /**
     * @param bool $RCC_ModifierCumuls
     * @return CPAISWSSalarieCumuls
     */
    public function withRCC_ModifierCumuls($RCC_ModifierCumuls)
    {
        $new = clone $this;
        $new->RCC_ModifierCumuls = $RCC_ModifierCumuls;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCC_HeuresAcquises()
    {
        return $this->RCC_HeuresAcquises;
    }

    /**
     * @param float $RCC_HeuresAcquises
     * @return CPAISWSSalarieCumuls
     */
    public function withRCC_HeuresAcquises($RCC_HeuresAcquises)
    {
        $new = clone $this;
        $new->RCC_HeuresAcquises = $RCC_HeuresAcquises;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCC_HeuresPrises()
    {
        return $this->RCC_HeuresPrises;
    }

    /**
     * @param float $RCC_HeuresPrises
     * @return CPAISWSSalarieCumuls
     */
    public function withRCC_HeuresPrises($RCC_HeuresPrises)
    {
        $new = clone $this;
        $new->RCC_HeuresPrises = $RCC_HeuresPrises;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRCO_ModifierCumuls()
    {
        return $this->RCO_ModifierCumuls;
    }

    /**
     * @param bool $RCO_ModifierCumuls
     * @return CPAISWSSalarieCumuls
     */
    public function withRCO_ModifierCumuls($RCO_ModifierCumuls)
    {
        $new = clone $this;
        $new->RCO_ModifierCumuls = $RCO_ModifierCumuls;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCO_HeuresAcquises()
    {
        return $this->RCO_HeuresAcquises;
    }

    /**
     * @param float $RCO_HeuresAcquises
     * @return CPAISWSSalarieCumuls
     */
    public function withRCO_HeuresAcquises($RCO_HeuresAcquises)
    {
        $new = clone $this;
        $new->RCO_HeuresAcquises = $RCO_HeuresAcquises;

        return $new;
    }

    /**
     * @return float
     */
    public function getRCO_HeuresPrises()
    {
        return $this->RCO_HeuresPrises;
    }

    /**
     * @param float $RCO_HeuresPrises
     * @return CPAISWSSalarieCumuls
     */
    public function withRCO_HeuresPrises($RCO_HeuresPrises)
    {
        $new = clone $this;
        $new->RCO_HeuresPrises = $RCO_HeuresPrises;

        return $new;
    }
}

