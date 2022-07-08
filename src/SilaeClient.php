<?php

namespace Qdequippe\SilaePhpSdk;

use Phpro\SoapClient\Caller\Caller;
use Qdequippe\SilaePhpSdk\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class SilaeClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|Type\SWSRecuperationEquipesConges $parameters
     * @return ResultInterface|Type\SWSRecuperationEquipesCongesResponse
     * @throws SoapException
     */
    public function sWS_RecuperationEquipesConges(\Qdequippe\SilaePhpSdk\Type\SWSRecuperationEquipesConges $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSRecuperationEquipesCongesResponse
    {
        return ($this->caller)('SWS_RecuperationEquipesConges', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExtraCreationManifestation $parameters
     * @return ResultInterface|Type\SWSExtraCreationManifestationResponse
     * @throws SoapException
     */
    public function sWS_ExtraCreationManifestation(\Qdequippe\SilaePhpSdk\Type\SWSExtraCreationManifestation $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExtraCreationManifestationResponse
    {
        return ($this->caller)('SWS_ExtraCreationManifestation', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExtraSalarieAcquisitionVacations $parameters
     * @return ResultInterface|Type\SWSExtraSalarieAcquisitionVacationsResponse
     * @throws SoapException
     */
    public function sWS_ExtraSalarieAcquisitionVacations(\Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieAcquisitionVacations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieAcquisitionVacationsResponse
    {
        return ($this->caller)('SWS_ExtraSalarieAcquisitionVacations', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExtraSalarieAjouterVacations $parameters
     * @return ResultInterface|Type\SWSExtraSalarieAjouterVacationsResponse
     * @throws SoapException
     */
    public function sWS_ExtraSalarieAjouterVacations(\Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieAjouterVacations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieAjouterVacationsResponse
    {
        return ($this->caller)('SWS_ExtraSalarieAjouterVacations', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExtraSalarieReinitialiserVacations $parameters
     * @return ResultInterface|Type\SWSExtraSalarieReinitialiserVacationsResponse
     * @throws SoapException
     */
    public function sWS_ExtraSalarieReinitialiserVacations(\Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieReinitialiserVacations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieReinitialiserVacationsResponse
    {
        return ($this->caller)('SWS_ExtraSalarieReinitialiserVacations', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExtraSalarieCalculerBulletin $parameters
     * @return ResultInterface|Type\SWSExtraSalarieCalculerBulletinResponse
     * @throws SoapException
     */
    public function sWS_ExtraSalarieCalculerBulletin(\Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieCalculerBulletin $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieCalculerBulletinResponse
    {
        return ($this->caller)('SWS_ExtraSalarieCalculerBulletin', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieListeBulletins $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieListeBulletinsResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieListeBulletins(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieListeBulletins $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieListeBulletinsResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieListeBulletins', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieRecupererImage $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieRecupererImageResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieRecupererImage(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererImage $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererImageResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieRecupererImage', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieRecupererImageDossier $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieRecupererImageDossierResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieRecupererImageDossier(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererImageDossier $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererImageDossierResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieRecupererImageDossier', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSTypesDocumentsGEDSalarie $parameters
     * @return ResultInterface|Type\SWSTypesDocumentsGEDSalarieResponse
     * @throws SoapException
     */
    public function sWS_TypesDocumentsGEDSalarie(\Qdequippe\SilaePhpSdk\Type\SWSTypesDocumentsGEDSalarie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSTypesDocumentsGEDSalarieResponse
    {
        return ($this->caller)('SWS_TypesDocumentsGEDSalarie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSTypesDocumentsGEDSociete $parameters
     * @return ResultInterface|Type\SWSTypesDocumentsGEDSocieteResponse
     * @throws SoapException
     */
    public function sWS_TypesDocumentsGEDSociete(\Qdequippe\SilaePhpSdk\Type\SWSTypesDocumentsGEDSociete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSTypesDocumentsGEDSocieteResponse
    {
        return ($this->caller)('SWS_TypesDocumentsGEDSociete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeDocumentsGEDSalarie $parameters
     * @return ResultInterface|Type\SWSListeDocumentsGEDSalarieResponse
     * @throws SoapException
     */
    public function sWS_ListeDocumentsGEDSalarie(\Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDSalarie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDSalarieResponse
    {
        return ($this->caller)('SWS_ListeDocumentsGEDSalarie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeDocumentsGEDSociete $parameters
     * @return ResultInterface|Type\SWSListeDocumentsGEDSocieteResponse
     * @throws SoapException
     */
    public function sWS_ListeDocumentsGEDSociete(\Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDSociete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeDocumentsGEDSocieteResponse
    {
        return ($this->caller)('SWS_ListeDocumentsGEDSociete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieListeDocumentsGED $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieListeDocumentsGEDResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieListeDocumentsGED(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieListeDocumentsGED $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieListeDocumentsGEDResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieListeDocumentsGED', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSDocumentGEDSalarie $parameters
     * @return ResultInterface|Type\SWSDocumentGEDSalarieResponse
     * @throws SoapException
     */
    public function sWS_DocumentGEDSalarie(\Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDSalarie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDSalarieResponse
    {
        return ($this->caller)('SWS_DocumentGEDSalarie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSDocumentGEDSociete $parameters
     * @return ResultInterface|Type\SWSDocumentGEDSocieteResponse
     * @throws SoapException
     */
    public function sWS_DocumentGEDSociete(\Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDSociete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSDocumentGEDSocieteResponse
    {
        return ($this->caller)('SWS_DocumentGEDSociete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieDocumentGED $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieDocumentGEDResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieDocumentGED(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieDocumentGED $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieDocumentGEDResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieDocumentGED', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieRecupererInfosConges $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieRecupererInfosCongesResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieRecupererInfosConges(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererInfosConges $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererInfosCongesResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieRecupererInfosConges', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieRecupererAbsences $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieRecupererAbsencesResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieRecupererAbsences(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererAbsences $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererAbsencesResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieRecupererAbsences', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieRecupererAbsencesGroupees $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieRecupererAbsencesGroupeesResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieRecupererAbsencesGroupees(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererAbsencesGroupees $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererAbsencesGroupeesResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieRecupererAbsencesGroupees', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieRecupererCodesAbsenceAutorises $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieRecupererCodesAbsenceAutorisesResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieRecupererCodesAbsenceAutorises(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererCodesAbsenceAutorises $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieRecupererCodesAbsenceAutorisesResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieRecupererCodesAbsenceAutorises', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieEnregistrerDemandeAbsence $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieEnregistrerDemandeAbsenceResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieEnregistrerDemandeAbsence(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieEnregistrerDemandeAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieEnregistrerDemandeAbsenceResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieEnregistrerDemandeAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieSupprimerDemandeAbsence $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieSupprimerDemandeAbsenceResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieSupprimerDemandeAbsence(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieSupprimerDemandeAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieSupprimerDemandeAbsenceResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieSupprimerDemandeAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieObtenirMailAnnulationAbsence $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieObtenirMailAnnulationAbsenceResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieObtenirMailAnnulationAbsence(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieObtenirMailAnnulationAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieObtenirMailAnnulationAbsenceResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieObtenirMailAnnulationAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieEnvoyerMailAnnulationAbsence $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieEnvoyerMailAnnulationAbsenceResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieEnvoyerMailAnnulationAbsence(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieEnvoyerMailAnnulationAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieEnvoyerMailAnnulationAbsenceResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieEnvoyerMailAnnulationAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurInformationsPortail $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurInformationsPortailResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurInformationsPortail(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurInformationsPortail $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurInformationsPortailResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurInformationsPortail', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurRecupererAbsences $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurRecupererAbsencesResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurRecupererAbsences(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererAbsences $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererAbsencesResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurRecupererAbsences', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurRecupererAbsencesGroupees $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurRecupererAbsencesGroupees(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererAbsencesGroupees $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererAbsencesGroupeesResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurRecupererAbsencesGroupees', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieSimulerCompteurs $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieSimulerCompteursResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieSimulerCompteurs(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieSimulerCompteurs $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieSimulerCompteursResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieSimulerCompteurs', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurValiderDemandeAbsence $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurValiderDemandeAbsenceResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurValiderDemandeAbsence(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurValiderDemandeAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurValiderDemandeAbsenceResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurValiderDemandeAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurRejeterDemandeAbsence $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurRejeterDemandeAbsenceResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurRejeterDemandeAbsence(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRejeterDemandeAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRejeterDemandeAbsenceResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurRejeterDemandeAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurValiderDemandesAbsence $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurValiderDemandesAbsenceResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurValiderDemandesAbsence(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurValiderDemandesAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurValiderDemandesAbsenceResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurValiderDemandesAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurRejeterDemandesAbsence $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurRejeterDemandesAbsenceResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurRejeterDemandesAbsence(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRejeterDemandesAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRejeterDemandesAbsenceResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurRejeterDemandesAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurEnvoyerMail $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurEnvoyerMailResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurEnvoyerMail(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurEnvoyerMail $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurEnvoyerMailResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurEnvoyerMail', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarie $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarie(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarieResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurRecupererCodesAbsenceAutorisesPourSalarie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurRecupererDemandesConges $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurRecupererDemandesCongesResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurRecupererDemandesConges(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesConges $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesCongesResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurRecupererDemandesConges', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurRecupererDemandesConges2 $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurRecupererDemandesConges2Response
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurRecupererDemandesConges2(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesConges2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDemandesConges2Response
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurRecupererDemandesConges2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurRecupererDetailCongesSalarie $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurRecupererDetailCongesSalarieResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurRecupererDetailCongesSalarie(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDetailCongesSalarie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurRecupererDetailCongesSalarieResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurRecupererDetailCongesSalarie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurAjouterAbsencesMultiples $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurAjouterAbsencesMultiplesResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurAjouterAbsencesMultiples(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurAjouterAbsencesMultiples $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurAjouterAbsencesMultiplesResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurAjouterAbsencesMultiples', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurSimulerCompteursSalarie $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurSimulerCompteursSalarieResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurSimulerCompteursSalarie(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSimulerCompteursSalarie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSimulerCompteursSalarieResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurSimulerCompteursSalarie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSiteGenereMotDePasseAlternatif $parameters
     * @return ResultInterface|Type\SWSSiteGenereMotDePasseAlternatifResponse
     * @throws SoapException
     */
    public function sWS_SiteGenereMotDePasseAlternatif(\Qdequippe\SilaePhpSdk\Type\SWSSiteGenereMotDePasseAlternatif $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSiteGenereMotDePasseAlternatifResponse
    {
        return ($this->caller)('SWS_SiteGenereMotDePasseAlternatif', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSComptesNumeroIntitule $parameters
     * @return ResultInterface|Type\SWSComptesNumeroIntituleResponse
     * @throws SoapException
     */
    public function sWS_ComptesNumeroIntitule(\Qdequippe\SilaePhpSdk\Type\SWSComptesNumeroIntitule $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSComptesNumeroIntituleResponse
    {
        return ($this->caller)('SWS_ComptesNumeroIntitule', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSRecuperationInformationsDomainesEtUtilisateurs $parameters
     * @return ResultInterface|Type\SWSRecuperationInformationsDomainesEtUtilisateursResponse
     * @throws SoapException
     */
    public function sWS_RecuperationInformationsDomainesEtUtilisateurs(\Qdequippe\SilaePhpSdk\Type\SWSRecuperationInformationsDomainesEtUtilisateurs $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSRecuperationInformationsDomainesEtUtilisateursResponse
    {
        return ($this->caller)('SWS_RecuperationInformationsDomainesEtUtilisateurs', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSTintin $parameters
     * @return ResultInterface|Type\SWSTintinResponse
     * @throws SoapException
     */
    public function sWS_Tintin(\Qdequippe\SilaePhpSdk\Type\SWSTintin $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSTintinResponse
    {
        return ($this->caller)('SWS_Tintin', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSTintinAlpha $parameters
     * @return ResultInterface|Type\SWSTintinAlphaResponse
     * @throws SoapException
     */
    public function sWS_TintinAlpha(\Qdequippe\SilaePhpSdk\Type\SWSTintinAlpha $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSTintinAlphaResponse
    {
        return ($this->caller)('SWS_TintinAlpha', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSTintinBeta $parameters
     * @return ResultInterface|Type\SWSTintinBetaResponse
     * @throws SoapException
     */
    public function sWS_TintinBeta(\Qdequippe\SilaePhpSdk\Type\SWSTintinBeta $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSTintinBetaResponse
    {
        return ($this->caller)('SWS_TintinBeta', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSTintinGamma $parameters
     * @return ResultInterface|Type\SWSTintinGammaResponse
     * @throws SoapException
     */
    public function sWS_TintinGamma(\Qdequippe\SilaePhpSdk\Type\SWSTintinGamma $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSTintinGammaResponse
    {
        return ($this->caller)('SWS_TintinGamma', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSTintinDelta $parameters
     * @return ResultInterface|Type\SWSTintinDeltaResponse
     * @throws SoapException
     */
    public function sWS_TintinDelta(\Qdequippe\SilaePhpSdk\Type\SWSTintinDelta $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSTintinDeltaResponse
    {
        return ($this->caller)('SWS_TintinDelta', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSDocQuery $parameters
     * @return ResultInterface|Type\SWSDocQueryResponse
     * @throws SoapException
     */
    public function sWS_DocQuery(\Qdequippe\SilaePhpSdk\Type\SWSDocQuery $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSDocQueryResponse
    {
        return ($this->caller)('SWS_DocQuery', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSDefinitionPeriodeComptableDossier $parameters
     * @return ResultInterface|Type\SWSDefinitionPeriodeComptableDossierResponse
     * @throws SoapException
     */
    public function sWS_DefinitionPeriodeComptableDossier(\Qdequippe\SilaePhpSdk\Type\SWSDefinitionPeriodeComptableDossier $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSDefinitionPeriodeComptableDossierResponse
    {
        return ($this->caller)('SWS_DefinitionPeriodeComptableDossier', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSRAZPeriodeComptableDossier $parameters
     * @return ResultInterface|Type\SWSRAZPeriodeComptableDossierResponse
     * @throws SoapException
     */
    public function sWS_RAZPeriodeComptableDossier(\Qdequippe\SilaePhpSdk\Type\SWSRAZPeriodeComptableDossier $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSRAZPeriodeComptableDossierResponse
    {
        return ($this->caller)('SWS_RAZPeriodeComptableDossier', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEtablissementsAExclureCVAE $parameters
     * @return ResultInterface|Type\SWSEtablissementsAExclureCVAEResponse
     * @throws SoapException
     */
    public function sWS_EtablissementsAExclureCVAE(\Qdequippe\SilaePhpSdk\Type\SWSEtablissementsAExclureCVAE $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEtablissementsAExclureCVAEResponse
    {
        return ($this->caller)('SWS_EtablissementsAExclureCVAE', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSImportFichierDSN $parameters
     * @return ResultInterface|Type\SWSImportFichierDSNResponse
     * @throws SoapException
     */
    public function sWS_ImportFichierDSN(\Qdequippe\SilaePhpSdk\Type\SWSImportFichierDSN $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSImportFichierDSNResponse
    {
        return ($this->caller)('SWS_ImportFichierDSN', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSCreationDossierParImportFichierDSN $parameters
     * @return ResultInterface|Type\SWSCreationDossierParImportFichierDSNResponse
     * @throws SoapException
     */
    public function sWS_CreationDossierParImportFichierDSN(\Qdequippe\SilaePhpSdk\Type\SWSCreationDossierParImportFichierDSN $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSCreationDossierParImportFichierDSNResponse
    {
        return ($this->caller)('SWS_CreationDossierParImportFichierDSN', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSCreationEmetteurDSN $parameters
     * @return ResultInterface|Type\SWSCreationEmetteurDSNResponse
     * @throws SoapException
     */
    public function sWS_CreationEmetteurDSN(\Qdequippe\SilaePhpSdk\Type\SWSCreationEmetteurDSN $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSCreationEmetteurDSNResponse
    {
        return ($this->caller)('SWS_CreationEmetteurDSN', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSImportXmlParametrageOrganismeDSN $parameters
     * @return ResultInterface|Type\SWSImportXmlParametrageOrganismeDSNResponse
     * @throws SoapException
     */
    public function sWS_ImportXmlParametrageOrganismeDSN(\Qdequippe\SilaePhpSdk\Type\SWSImportXmlParametrageOrganismeDSN $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSImportXmlParametrageOrganismeDSNResponse
    {
        return ($this->caller)('SWS_ImportXmlParametrageOrganismeDSN', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSInitialisationAncienNumeroContratDSN $parameters
     * @return ResultInterface|Type\SWSInitialisationAncienNumeroContratDSNResponse
     * @throws SoapException
     */
    public function sWS_InitialisationAncienNumeroContratDSN(\Qdequippe\SilaePhpSdk\Type\SWSInitialisationAncienNumeroContratDSN $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSInitialisationAncienNumeroContratDSNResponse
    {
        return ($this->caller)('SWS_InitialisationAncienNumeroContratDSN', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSActivationDSN $parameters
     * @return ResultInterface|Type\SWSActivationDSNResponse
     * @throws SoapException
     */
    public function sWS_ActivationDSN(\Qdequippe\SilaePhpSdk\Type\SWSActivationDSN $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSActivationDSNResponse
    {
        return ($this->caller)('SWS_ActivationDSN', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSMiseAJourFicheSociete $parameters
     * @return ResultInterface|Type\SWSMiseAJourFicheSocieteResponse
     * @throws SoapException
     */
    public function sWS_MiseAJourFicheSociete(\Qdequippe\SilaePhpSdk\Type\SWSMiseAJourFicheSociete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSMiseAJourFicheSocieteResponse
    {
        return ($this->caller)('SWS_MiseAJourFicheSociete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSMiseAJourFicheEtablissement $parameters
     * @return ResultInterface|Type\SWSMiseAJourFicheEtablissementResponse
     * @throws SoapException
     */
    public function sWS_MiseAJourFicheEtablissement(\Qdequippe\SilaePhpSdk\Type\SWSMiseAJourFicheEtablissement $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSMiseAJourFicheEtablissementResponse
    {
        return ($this->caller)('SWS_MiseAJourFicheEtablissement', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationEffectifSociete $parameters
     * @return ResultInterface|Type\SWSModificationEffectifSocieteResponse
     * @throws SoapException
     */
    public function sWS_ModificationEffectifSociete(\Qdequippe\SilaePhpSdk\Type\SWSModificationEffectifSociete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationEffectifSocieteResponse
    {
        return ($this->caller)('SWS_ModificationEffectifSociete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationCCNSociete $parameters
     * @return ResultInterface|Type\SWSModificationCCNSocieteResponse
     * @throws SoapException
     */
    public function sWS_ModificationCCNSociete(\Qdequippe\SilaePhpSdk\Type\SWSModificationCCNSociete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationCCNSocieteResponse
    {
        return ($this->caller)('SWS_ModificationCCNSociete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationEffortConstruction $parameters
     * @return ResultInterface|Type\SWSModificationEffortConstructionResponse
     * @throws SoapException
     */
    public function sWS_ModificationEffortConstruction(\Qdequippe\SilaePhpSdk\Type\SWSModificationEffortConstruction $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationEffortConstructionResponse
    {
        return ($this->caller)('SWS_ModificationEffortConstruction', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationFNAL $parameters
     * @return ResultInterface|Type\SWSModificationFNALResponse
     * @throws SoapException
     */
    public function sWS_ModificationFNAL(\Qdequippe\SilaePhpSdk\Type\SWSModificationFNAL $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationFNALResponse
    {
        return ($this->caller)('SWS_ModificationFNAL', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationInformationBancaireSociete $parameters
     * @return ResultInterface|Type\SWSModificationInformationBancaireSocieteResponse
     * @throws SoapException
     */
    public function sWS_ModificationInformationBancaireSociete(\Qdequippe\SilaePhpSdk\Type\SWSModificationInformationBancaireSociete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationInformationBancaireSocieteResponse
    {
        return ($this->caller)('SWS_ModificationInformationBancaireSociete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationTaxeTransport $parameters
     * @return ResultInterface|Type\SWSModificationTaxeTransportResponse
     * @throws SoapException
     */
    public function sWS_ModificationTaxeTransport(\Qdequippe\SilaePhpSdk\Type\SWSModificationTaxeTransport $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationTaxeTransportResponse
    {
        return ($this->caller)('SWS_ModificationTaxeTransport', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationEffectifEtablissement $parameters
     * @return ResultInterface|Type\SWSModificationEffectifEtablissementResponse
     * @throws SoapException
     */
    public function sWS_ModificationEffectifEtablissement(\Qdequippe\SilaePhpSdk\Type\SWSModificationEffectifEtablissement $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationEffectifEtablissementResponse
    {
        return ($this->caller)('SWS_ModificationEffectifEtablissement', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationChampSalarie $parameters
     * @return ResultInterface|Type\SWSModificationChampSalarieResponse
     * @throws SoapException
     */
    public function sWS_ModificationChampSalarie(\Qdequippe\SilaePhpSdk\Type\SWSModificationChampSalarie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationChampSalarieResponse
    {
        return ($this->caller)('SWS_ModificationChampSalarie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationChampSalarie2 $parameters
     * @return ResultInterface|Type\SWSModificationChampSalarie2Response
     * @throws SoapException
     */
    public function sWS_ModificationChampSalarie2(\Qdequippe\SilaePhpSdk\Type\SWSModificationChampSalarie2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationChampSalarie2Response
    {
        return ($this->caller)('SWS_ModificationChampSalarie2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationPersonnesLiees $parameters
     * @return ResultInterface|Type\SWSModificationPersonnesLieesResponse
     * @throws SoapException
     */
    public function sWS_ModificationPersonnesLiees(\Qdequippe\SilaePhpSdk\Type\SWSModificationPersonnesLiees $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationPersonnesLieesResponse
    {
        return ($this->caller)('SWS_ModificationPersonnesLiees', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationHandicap $parameters
     * @return ResultInterface|Type\SWSModificationHandicapResponse
     * @throws SoapException
     */
    public function sWS_ModificationHandicap(\Qdequippe\SilaePhpSdk\Type\SWSModificationHandicap $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationHandicapResponse
    {
        return ($this->caller)('SWS_ModificationHandicap', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationSalarieProtege $parameters
     * @return ResultInterface|Type\SWSModificationSalarieProtegeResponse
     * @throws SoapException
     */
    public function sWS_ModificationSalarieProtege(\Qdequippe\SilaePhpSdk\Type\SWSModificationSalarieProtege $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationSalarieProtegeResponse
    {
        return ($this->caller)('SWS_ModificationSalarieProtege', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSRechercheCCN $parameters
     * @return ResultInterface|Type\SWSRechercheCCNResponse
     * @throws SoapException
     */
    public function sWS_RechercheCCN(\Qdequippe\SilaePhpSdk\Type\SWSRechercheCCN $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSRechercheCCNResponse
    {
        return ($this->caller)('SWS_RechercheCCN', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAcquisitionQuestionnaireCCN $parameters
     * @return ResultInterface|Type\SWSAcquisitionQuestionnaireCCNResponse
     * @throws SoapException
     */
    public function sWS_AcquisitionQuestionnaireCCN(\Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireCCN $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireCCNResponse
    {
        return ($this->caller)('SWS_AcquisitionQuestionnaireCCN', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAcquisitionQuestionnaireCCN2 $parameters
     * @return ResultInterface|Type\SWSAcquisitionQuestionnaireCCN2Response
     * @throws SoapException
     */
    public function sWS_AcquisitionQuestionnaireCCN2(\Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireCCN2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireCCN2Response
    {
        return ($this->caller)('SWS_AcquisitionQuestionnaireCCN2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAcquisitionQuestionnaireCCNAvecTexte $parameters
     * @return ResultInterface|Type\SWSAcquisitionQuestionnaireCCNAvecTexteResponse
     * @throws SoapException
     */
    public function sWS_AcquisitionQuestionnaireCCNAvecTexte(\Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireCCNAvecTexte $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireCCNAvecTexteResponse
    {
        return ($this->caller)('SWS_AcquisitionQuestionnaireCCNAvecTexte', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAcquisitionQuestionnaireCCNAvecTexte2 $parameters
     * @return ResultInterface|Type\SWSAcquisitionQuestionnaireCCNAvecTexte2Response
     * @throws SoapException
     */
    public function sWS_AcquisitionQuestionnaireCCNAvecTexte2(\Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireCCNAvecTexte2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireCCNAvecTexte2Response
    {
        return ($this->caller)('SWS_AcquisitionQuestionnaireCCNAvecTexte2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAcquisitionQuestionnaireEtablissementCCN $parameters
     * @return ResultInterface|Type\SWSAcquisitionQuestionnaireEtablissementCCNResponse
     * @throws SoapException
     */
    public function sWS_AcquisitionQuestionnaireEtablissementCCN(\Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireEtablissementCCN $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireEtablissementCCNResponse
    {
        return ($this->caller)('SWS_AcquisitionQuestionnaireEtablissementCCN', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAcquisitionQuestionnaireEtablissementCCN2 $parameters
     * @return ResultInterface|Type\SWSAcquisitionQuestionnaireEtablissementCCN2Response
     * @throws SoapException
     */
    public function sWS_AcquisitionQuestionnaireEtablissementCCN2(\Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireEtablissementCCN2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireEtablissementCCN2Response
    {
        return ($this->caller)('SWS_AcquisitionQuestionnaireEtablissementCCN2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte $parameters
     * @return ResultInterface|Type\SWSAcquisitionQuestionnaireEtablissementCCNAvecTexteResponse
     * @throws SoapException
     */
    public function sWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte(\Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireEtablissementCCNAvecTexteResponse
    {
        return ($this->caller)('SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte2 $parameters
     * @return ResultInterface|Type\SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte2Response
     * @throws SoapException
     */
    public function sWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte2(\Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireEtablissementCCNAvecTexte2Response
    {
        return ($this->caller)('SWS_AcquisitionQuestionnaireEtablissementCCNAvecTexte2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationQuestionnaireCCNEtablissement $parameters
     * @return ResultInterface|Type\SWSModificationQuestionnaireCCNEtablissementResponse
     * @throws SoapException
     */
    public function sWS_ModificationQuestionnaireCCNEtablissement(\Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireCCNEtablissement $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireCCNEtablissementResponse
    {
        return ($this->caller)('SWS_ModificationQuestionnaireCCNEtablissement', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationQuestionnaireCCNEtablissement2 $parameters
     * @return ResultInterface|Type\SWSModificationQuestionnaireCCNEtablissement2Response
     * @throws SoapException
     */
    public function sWS_ModificationQuestionnaireCCNEtablissement2(\Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireCCNEtablissement2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireCCNEtablissement2Response
    {
        return ($this->caller)('SWS_ModificationQuestionnaireCCNEtablissement2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationSaisieArret $parameters
     * @return ResultInterface|Type\SWSModificationSaisieArretResponse
     * @throws SoapException
     */
    public function sWS_ModificationSaisieArret(\Qdequippe\SilaePhpSdk\Type\SWSModificationSaisieArret $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationSaisieArretResponse
    {
        return ($this->caller)('SWS_ModificationSaisieArret', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAcquisitionQuestionnaireContratComplementaire $parameters
     * @return ResultInterface|Type\SWSAcquisitionQuestionnaireContratComplementaireResponse
     * @throws SoapException
     */
    public function sWS_AcquisitionQuestionnaireContratComplementaire(\Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireContratComplementaire $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionQuestionnaireContratComplementaireResponse
    {
        return ($this->caller)('SWS_AcquisitionQuestionnaireContratComplementaire', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationQuestionnaireContratComplementaire $parameters
     * @return ResultInterface|Type\SWSModificationQuestionnaireContratComplementaireResponse
     * @throws SoapException
     */
    public function sWS_ModificationQuestionnaireContratComplementaire(\Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireContratComplementaire $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationQuestionnaireContratComplementaireResponse
    {
        return ($this->caller)('SWS_ModificationQuestionnaireContratComplementaire', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationGrilleHoraireEtablissement $parameters
     * @return ResultInterface|Type\SWSModificationGrilleHoraireEtablissementResponse
     * @throws SoapException
     */
    public function sWS_ModificationGrilleHoraireEtablissement(\Qdequippe\SilaePhpSdk\Type\SWSModificationGrilleHoraireEtablissement $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationGrilleHoraireEtablissementResponse
    {
        return ($this->caller)('SWS_ModificationGrilleHoraireEtablissement', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationGrilleHoraireSalarie $parameters
     * @return ResultInterface|Type\SWSModificationGrilleHoraireSalarieResponse
     * @throws SoapException
     */
    public function sWS_ModificationGrilleHoraireSalarie(\Qdequippe\SilaePhpSdk\Type\SWSModificationGrilleHoraireSalarie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationGrilleHoraireSalarieResponse
    {
        return ($this->caller)('SWS_ModificationGrilleHoraireSalarie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSModificationDroitsFonctionnelsProductionPaie $parameters
     * @return ResultInterface|Type\SWSModificationDroitsFonctionnelsProductionPaieResponse
     * @throws SoapException
     */
    public function sWS_ModificationDroitsFonctionnelsProductionPaie(\Qdequippe\SilaePhpSdk\Type\SWSModificationDroitsFonctionnelsProductionPaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSModificationDroitsFonctionnelsProductionPaieResponse
    {
        return ($this->caller)('SWS_ModificationDroitsFonctionnelsProductionPaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSMatriculeSalarie $parameters
     * @return ResultInterface|Type\SWSMatriculeSalarieResponse
     * @throws SoapException
     */
    public function sWS_MatriculeSalarie(\Qdequippe\SilaePhpSdk\Type\SWSMatriculeSalarie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSMatriculeSalarieResponse
    {
        return ($this->caller)('SWS_MatriculeSalarie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSMatriculeSalarieDepuisID $parameters
     * @return ResultInterface|Type\SWSMatriculeSalarieDepuisIDResponse
     * @throws SoapException
     */
    public function sWS_MatriculeSalarieDepuisID(\Qdequippe\SilaePhpSdk\Type\SWSMatriculeSalarieDepuisID $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSMatriculeSalarieDepuisIDResponse
    {
        return ($this->caller)('SWS_MatriculeSalarieDepuisID', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSIDSalarieDepuisMatricule $parameters
     * @return ResultInterface|Type\SWSIDSalarieDepuisMatriculeResponse
     * @throws SoapException
     */
    public function sWS_IDSalarieDepuisMatricule(\Qdequippe\SilaePhpSdk\Type\SWSIDSalarieDepuisMatricule $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSIDSalarieDepuisMatriculeResponse
    {
        return ($this->caller)('SWS_IDSalarieDepuisMatricule', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureEffectifSociete $parameters
     * @return ResultInterface|Type\SWSLectureEffectifSocieteResponse
     * @throws SoapException
     */
    public function sWS_LectureEffectifSociete(\Qdequippe\SilaePhpSdk\Type\SWSLectureEffectifSociete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureEffectifSocieteResponse
    {
        return ($this->caller)('SWS_LectureEffectifSociete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureCCNSociete $parameters
     * @return ResultInterface|Type\SWSLectureCCNSocieteResponse
     * @throws SoapException
     */
    public function sWS_LectureCCNSociete(\Qdequippe\SilaePhpSdk\Type\SWSLectureCCNSociete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureCCNSocieteResponse
    {
        return ($this->caller)('SWS_LectureCCNSociete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureEffortConstruction $parameters
     * @return ResultInterface|Type\SWSLectureEffortConstructionResponse
     * @throws SoapException
     */
    public function sWS_LectureEffortConstruction(\Qdequippe\SilaePhpSdk\Type\SWSLectureEffortConstruction $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureEffortConstructionResponse
    {
        return ($this->caller)('SWS_LectureEffortConstruction', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureFNAL $parameters
     * @return ResultInterface|Type\SWSLectureFNALResponse
     * @throws SoapException
     */
    public function sWS_LectureFNAL(\Qdequippe\SilaePhpSdk\Type\SWSLectureFNAL $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureFNALResponse
    {
        return ($this->caller)('SWS_LectureFNAL', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureInformationBancaireSociete $parameters
     * @return ResultInterface|Type\SWSLectureInformationBancaireSocieteResponse
     * @throws SoapException
     */
    public function sWS_LectureInformationBancaireSociete(\Qdequippe\SilaePhpSdk\Type\SWSLectureInformationBancaireSociete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationBancaireSocieteResponse
    {
        return ($this->caller)('SWS_LectureInformationBancaireSociete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureTaxeTransport $parameters
     * @return ResultInterface|Type\SWSLectureTaxeTransportResponse
     * @throws SoapException
     */
    public function sWS_LectureTaxeTransport(\Qdequippe\SilaePhpSdk\Type\SWSLectureTaxeTransport $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureTaxeTransportResponse
    {
        return ($this->caller)('SWS_LectureTaxeTransport', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureEffectifEtablissement $parameters
     * @return ResultInterface|Type\SWSLectureEffectifEtablissementResponse
     * @throws SoapException
     */
    public function sWS_LectureEffectifEtablissement(\Qdequippe\SilaePhpSdk\Type\SWSLectureEffectifEtablissement $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureEffectifEtablissementResponse
    {
        return ($this->caller)('SWS_LectureEffectifEtablissement', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLecturePersonnesLiees $parameters
     * @return ResultInterface|Type\SWSLecturePersonnesLieesResponse
     * @throws SoapException
     */
    public function sWS_LecturePersonnesLiees(\Qdequippe\SilaePhpSdk\Type\SWSLecturePersonnesLiees $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLecturePersonnesLieesResponse
    {
        return ($this->caller)('SWS_LecturePersonnesLiees', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureHandicap $parameters
     * @return ResultInterface|Type\SWSLectureHandicapResponse
     * @throws SoapException
     */
    public function sWS_LectureHandicap(\Qdequippe\SilaePhpSdk\Type\SWSLectureHandicap $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureHandicapResponse
    {
        return ($this->caller)('SWS_LectureHandicap', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureSalarieProtege $parameters
     * @return ResultInterface|Type\SWSLectureSalarieProtegeResponse
     * @throws SoapException
     */
    public function sWS_LectureSalarieProtege(\Qdequippe\SilaePhpSdk\Type\SWSLectureSalarieProtege $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureSalarieProtegeResponse
    {
        return ($this->caller)('SWS_LectureSalarieProtege', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureSaisieArret $parameters
     * @return ResultInterface|Type\SWSLectureSaisieArretResponse
     * @throws SoapException
     */
    public function sWS_LectureSaisieArret(\Qdequippe\SilaePhpSdk\Type\SWSLectureSaisieArret $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureSaisieArretResponse
    {
        return ($this->caller)('SWS_LectureSaisieArret', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureAxesAnalytiques $parameters
     * @return ResultInterface|Type\SWSLectureAxesAnalytiquesResponse
     * @throws SoapException
     */
    public function sWS_LectureAxesAnalytiques(\Qdequippe\SilaePhpSdk\Type\SWSLectureAxesAnalytiques $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureAxesAnalytiquesResponse
    {
        return ($this->caller)('SWS_LectureAxesAnalytiques', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAjoutSousCategorieAxeAnalytique $parameters
     * @return ResultInterface|Type\SWSAjoutSousCategorieAxeAnalytiqueResponse
     * @throws SoapException
     */
    public function sWS_AjoutSousCategorieAxeAnalytique(\Qdequippe\SilaePhpSdk\Type\SWSAjoutSousCategorieAxeAnalytique $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAjoutSousCategorieAxeAnalytiqueResponse
    {
        return ($this->caller)('SWS_AjoutSousCategorieAxeAnalytique', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureAxesAnalytiquesSalaries $parameters
     * @return ResultInterface|Type\SWSLectureAxesAnalytiquesSalariesResponse
     * @throws SoapException
     */
    public function sWS_LectureAxesAnalytiquesSalaries(\Qdequippe\SilaePhpSdk\Type\SWSLectureAxesAnalytiquesSalaries $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureAxesAnalytiquesSalariesResponse
    {
        return ($this->caller)('SWS_LectureAxesAnalytiquesSalaries', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAjouteCompteRenduEdi $parameters
     * @return ResultInterface|Type\SWSAjouteCompteRenduEdiResponse
     * @throws SoapException
     */
    public function sWS_AjouteCompteRenduEdi(\Qdequippe\SilaePhpSdk\Type\SWSAjouteCompteRenduEdi $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAjouteCompteRenduEdiResponse
    {
        return ($this->caller)('SWS_AjouteCompteRenduEdi', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAjouteCompteRenduEdi94 $parameters
     * @return ResultInterface|Type\SWSAjouteCompteRenduEdi94Response
     * @throws SoapException
     */
    public function sWS_AjouteCompteRenduEdi94(\Qdequippe\SilaePhpSdk\Type\SWSAjouteCompteRenduEdi94 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAjouteCompteRenduEdi94Response
    {
        return ($this->caller)('SWS_AjouteCompteRenduEdi94', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEtatDeclarations $parameters
     * @return ResultInterface|Type\SWSEtatDeclarationsResponse
     * @throws SoapException
     */
    public function sWS_EtatDeclarations(\Qdequippe\SilaePhpSdk\Type\SWSEtatDeclarations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEtatDeclarationsResponse
    {
        return ($this->caller)('SWS_EtatDeclarations', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeUtilisateursDossierPaie $parameters
     * @return ResultInterface|Type\SWSListeUtilisateursDossierPaieResponse
     * @throws SoapException
     */
    public function sWS_ListeUtilisateursDossierPaie(\Qdequippe\SilaePhpSdk\Type\SWSListeUtilisateursDossierPaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeUtilisateursDossierPaieResponse
    {
        return ($this->caller)('SWS_ListeUtilisateursDossierPaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeDSNMensuelles $parameters
     * @return ResultInterface|Type\SWSListeDSNMensuellesResponse
     * @throws SoapException
     */
    public function sWS_ListeDSNMensuelles(\Qdequippe\SilaePhpSdk\Type\SWSListeDSNMensuelles $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeDSNMensuellesResponse
    {
        return ($this->caller)('SWS_ListeDSNMensuelles', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAcquisitionContenuPartielDSN $parameters
     * @return ResultInterface|Type\SWSAcquisitionContenuPartielDSNResponse
     * @throws SoapException
     */
    public function sWS_AcquisitionContenuPartielDSN(\Qdequippe\SilaePhpSdk\Type\SWSAcquisitionContenuPartielDSN $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionContenuPartielDSNResponse
    {
        return ($this->caller)('SWS_AcquisitionContenuPartielDSN', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSRechercheDeclarationEvenementielle $parameters
     * @return ResultInterface|Type\SWSRechercheDeclarationEvenementielleResponse
     * @throws SoapException
     */
    public function sWS_RechercheDeclarationEvenementielle(\Qdequippe\SilaePhpSdk\Type\SWSRechercheDeclarationEvenementielle $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSRechercheDeclarationEvenementielleResponse
    {
        return ($this->caller)('SWS_RechercheDeclarationEvenementielle', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSalarieAcquisitionSA $parameters
     * @return ResultInterface|Type\SWSUtilisateurSalarieAcquisitionSAResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSalarieAcquisitionSA(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieAcquisitionSA $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSalarieAcquisitionSAResponse
    {
        return ($this->caller)('SWS_UtilisateurSalarieAcquisitionSA', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurSuperviseurAcquisitionSA $parameters
     * @return ResultInterface|Type\SWSUtilisateurSuperviseurAcquisitionSAResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurSuperviseurAcquisitionSA(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurAcquisitionSA $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurAcquisitionSAResponse
    {
        return ($this->caller)('SWS_UtilisateurSuperviseurAcquisitionSA', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSystemStatus $parameters
     * @return ResultInterface|Type\SWSSystemStatusResponse
     * @throws SoapException
     */
    public function sWS_SystemStatus(\Qdequippe\SilaePhpSdk\Type\SWSSystemStatus $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSystemStatusResponse
    {
        return ($this->caller)('SWS_SystemStatus', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLireCentresMedicaux $parameters
     * @return ResultInterface|Type\SWSLireCentresMedicauxResponse
     * @throws SoapException
     */
    public function sWS_LireCentresMedicaux(\Qdequippe\SilaePhpSdk\Type\SWSLireCentresMedicaux $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLireCentresMedicauxResponse
    {
        return ($this->caller)('SWS_LireCentresMedicaux', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEnregistrerCentreMedical $parameters
     * @return ResultInterface|Type\SWSEnregistrerCentreMedicalResponse
     * @throws SoapException
     */
    public function sWS_EnregistrerCentreMedical(\Qdequippe\SilaePhpSdk\Type\SWSEnregistrerCentreMedical $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEnregistrerCentreMedicalResponse
    {
        return ($this->caller)('SWS_EnregistrerCentreMedical', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSupprimerCentreMedical $parameters
     * @return ResultInterface|Type\SWSSupprimerCentreMedicalResponse
     * @throws SoapException
     */
    public function sWS_SupprimerCentreMedical(\Qdequippe\SilaePhpSdk\Type\SWSSupprimerCentreMedical $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSupprimerCentreMedicalResponse
    {
        return ($this->caller)('SWS_SupprimerCentreMedical', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLireVisitesMedicales $parameters
     * @return ResultInterface|Type\SWSLireVisitesMedicalesResponse
     * @throws SoapException
     */
    public function sWS_LireVisitesMedicales(\Qdequippe\SilaePhpSdk\Type\SWSLireVisitesMedicales $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLireVisitesMedicalesResponse
    {
        return ($this->caller)('SWS_LireVisitesMedicales', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEnregistrerVisiteMedicale $parameters
     * @return ResultInterface|Type\SWSEnregistrerVisiteMedicaleResponse
     * @throws SoapException
     */
    public function sWS_EnregistrerVisiteMedicale(\Qdequippe\SilaePhpSdk\Type\SWSEnregistrerVisiteMedicale $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEnregistrerVisiteMedicaleResponse
    {
        return ($this->caller)('SWS_EnregistrerVisiteMedicale', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSupprimerVisiteMedicale $parameters
     * @return ResultInterface|Type\SWSSupprimerVisiteMedicaleResponse
     * @throws SoapException
     */
    public function sWS_SupprimerVisiteMedicale(\Qdequippe\SilaePhpSdk\Type\SWSSupprimerVisiteMedicale $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSupprimerVisiteMedicaleResponse
    {
        return ($this->caller)('SWS_SupprimerVisiteMedicale', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeMatriculesDupliques $parameters
     * @return ResultInterface|Type\SWSListeMatriculesDupliquesResponse
     * @throws SoapException
     */
    public function sWS_ListeMatriculesDupliques(\Qdequippe\SilaePhpSdk\Type\SWSListeMatriculesDupliques $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeMatriculesDupliquesResponse
    {
        return ($this->caller)('SWS_ListeMatriculesDupliques', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeMatriculesDupliquesDansDomaine $parameters
     * @return ResultInterface|Type\SWSListeMatriculesDupliquesDansDomaineResponse
     * @throws SoapException
     */
    public function sWS_ListeMatriculesDupliquesDansDomaine(\Qdequippe\SilaePhpSdk\Type\SWSListeMatriculesDupliquesDansDomaine $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeMatriculesDupliquesDansDomaineResponse
    {
        return ($this->caller)('SWS_ListeMatriculesDupliquesDansDomaine', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExistenceMatricule $parameters
     * @return ResultInterface|Type\SWSExistenceMatriculeResponse
     * @throws SoapException
     */
    public function sWS_ExistenceMatricule(\Qdequippe\SilaePhpSdk\Type\SWSExistenceMatricule $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExistenceMatriculeResponse
    {
        return ($this->caller)('SWS_ExistenceMatricule', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSRecuperationListeEV $parameters
     * @return ResultInterface|Type\SWSRecuperationListeEVResponse
     * @throws SoapException
     */
    public function sWS_RecuperationListeEV(\Qdequippe\SilaePhpSdk\Type\SWSRecuperationListeEV $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSRecuperationListeEVResponse
    {
        return ($this->caller)('SWS_RecuperationListeEV', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSiteLogin $parameters
     * @return ResultInterface|Type\SWSSiteLoginResponse
     * @throws SoapException
     */
    public function sWS_SiteLogin(\Qdequippe\SilaePhpSdk\Type\SWSSiteLogin $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSiteLoginResponse
    {
        return ($this->caller)('SWS_SiteLogin', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLoginSimple $parameters
     * @return ResultInterface|Type\SWSLoginSimpleResponse
     * @throws SoapException
     */
    public function sWS_LoginSimple(\Qdequippe\SilaePhpSdk\Type\SWSLoginSimple $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLoginSimpleResponse
    {
        return ($this->caller)('SWS_LoginSimple', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSiteLoginRep $parameters
     * @return ResultInterface|Type\SWSSiteLoginRepResponse
     * @throws SoapException
     */
    public function sWS_SiteLoginRep(\Qdequippe\SilaePhpSdk\Type\SWSSiteLoginRep $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSiteLoginRepResponse
    {
        return ($this->caller)('SWS_SiteLoginRep', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSiteLoginEx $parameters
     * @return ResultInterface|Type\SWSSiteLoginExResponse
     * @throws SoapException
     */
    public function sWS_SiteLoginEx(\Qdequippe\SilaePhpSdk\Type\SWSSiteLoginEx $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSiteLoginExResponse
    {
        return ($this->caller)('SWS_SiteLoginEx', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSiteLoginEx2 $parameters
     * @return ResultInterface|Type\SWSSiteLoginEx2Response
     * @throws SoapException
     */
    public function sWS_SiteLoginEx2(\Qdequippe\SilaePhpSdk\Type\SWSSiteLoginEx2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSiteLoginEx2Response
    {
        return ($this->caller)('SWS_SiteLoginEx2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSiteLoginExDir $parameters
     * @return ResultInterface|Type\SWSSiteLoginExDirResponse
     * @throws SoapException
     */
    public function sWS_SiteLoginExDir(\Qdequippe\SilaePhpSdk\Type\SWSSiteLoginExDir $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSiteLoginExDirResponse
    {
        return ($this->caller)('SWS_SiteLoginExDir', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAppliquerDroitEditeur $parameters
     * @return ResultInterface|Type\SWSAppliquerDroitEditeurResponse
     * @throws SoapException
     */
    public function sWS_AppliquerDroitEditeur(\Qdequippe\SilaePhpSdk\Type\SWSAppliquerDroitEditeur $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAppliquerDroitEditeurResponse
    {
        return ($this->caller)('SWS_AppliquerDroitEditeur', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSResultatLogin $parameters
     * @return ResultInterface|Type\SWSResultatLoginResponse
     * @throws SoapException
     */
    public function sWS_ResultatLogin(\Qdequippe\SilaePhpSdk\Type\SWSResultatLogin $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSResultatLoginResponse
    {
        return ($this->caller)('SWS_ResultatLogin', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSChangeMotDePasse $parameters
     * @return ResultInterface|Type\SWSChangeMotDePasseResponse
     * @throws SoapException
     */
    public function sWS_ChangeMotDePasse(\Qdequippe\SilaePhpSdk\Type\SWSChangeMotDePasse $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSChangeMotDePasseResponse
    {
        return ($this->caller)('SWS_ChangeMotDePasse', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSUtilisateurChangerMotDePasse $parameters
     * @return ResultInterface|Type\SWSUtilisateurChangerMotDePasseResponse
     * @throws SoapException
     */
    public function sWS_UtilisateurChangerMotDePasse(\Qdequippe\SilaePhpSdk\Type\SWSUtilisateurChangerMotDePasse $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurChangerMotDePasseResponse
    {
        return ($this->caller)('SWS_UtilisateurChangerMotDePasse', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLogout $parameters
     * @return ResultInterface|Type\SWSLogoutResponse
     * @throws SoapException
     */
    public function sWS_Logout(\Qdequippe\SilaePhpSdk\Type\SWSLogout $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLogoutResponse
    {
        return ($this->caller)('SWS_Logout', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLogoutSimple $parameters
     * @return ResultInterface|Type\SWSLogoutSimpleResponse
     * @throws SoapException
     */
    public function sWS_LogoutSimple(\Qdequippe\SilaePhpSdk\Type\SWSLogoutSimple $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLogoutSimpleResponse
    {
        return ($this->caller)('SWS_LogoutSimple', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEtatSession $parameters
     * @return ResultInterface|Type\SWSEtatSessionResponse
     * @throws SoapException
     */
    public function sWS_EtatSession(\Qdequippe\SilaePhpSdk\Type\SWSEtatSession $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEtatSessionResponse
    {
        return ($this->caller)('SWS_EtatSession', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeNumerosDossiers $parameters
     * @return ResultInterface|Type\SWSListeNumerosDossiersResponse
     * @throws SoapException
     */
    public function sWS_ListeNumerosDossiers(\Qdequippe\SilaePhpSdk\Type\SWSListeNumerosDossiers $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeNumerosDossiersResponse
    {
        return ($this->caller)('SWS_ListeNumerosDossiers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeDossiers $parameters
     * @return ResultInterface|Type\SWSListeDossiersResponse
     * @throws SoapException
     */
    public function sWS_ListeDossiers(\Qdequippe\SilaePhpSdk\Type\SWSListeDossiers $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeDossiersResponse
    {
        return ($this->caller)('SWS_ListeDossiers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExcelLogin $parameters
     * @return ResultInterface|Type\SWSExcelLoginResponse
     * @throws SoapException
     */
    public function sWS_ExcelLogin(\Qdequippe\SilaePhpSdk\Type\SWSExcelLogin $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExcelLoginResponse
    {
        return ($this->caller)('SWS_ExcelLogin', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExcelChercheValeurPaieClientV2 $parameters
     * @return ResultInterface|Type\SWSExcelChercheValeurPaieClientV2Response
     * @throws SoapException
     */
    public function sWS_ExcelChercheValeurPaieClientV2(\Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurPaieClientV2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurPaieClientV2Response
    {
        return ($this->caller)('SWS_ExcelChercheValeurPaieClientV2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExcelChercheValeurPaieEtablissementV2 $parameters
     * @return ResultInterface|Type\SWSExcelChercheValeurPaieEtablissementV2Response
     * @throws SoapException
     */
    public function sWS_ExcelChercheValeurPaieEtablissementV2(\Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurPaieEtablissementV2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurPaieEtablissementV2Response
    {
        return ($this->caller)('SWS_ExcelChercheValeurPaieEtablissementV2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExcelChercheValeurPaieSalarieV2 $parameters
     * @return ResultInterface|Type\SWSExcelChercheValeurPaieSalarieV2Response
     * @throws SoapException
     */
    public function sWS_ExcelChercheValeurPaieSalarieV2(\Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurPaieSalarieV2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurPaieSalarieV2Response
    {
        return ($this->caller)('SWS_ExcelChercheValeurPaieSalarieV2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExcelChercheValeurPaieBulletinV2 $parameters
     * @return ResultInterface|Type\SWSExcelChercheValeurPaieBulletinV2Response
     * @throws SoapException
     */
    public function sWS_ExcelChercheValeurPaieBulletinV2(\Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurPaieBulletinV2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurPaieBulletinV2Response
    {
        return ($this->caller)('SWS_ExcelChercheValeurPaieBulletinV2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExcelChercheValeurPaieLigneBulletinV2 $parameters
     * @return ResultInterface|Type\SWSExcelChercheValeurPaieLigneBulletinV2Response
     * @throws SoapException
     */
    public function sWS_ExcelChercheValeurPaieLigneBulletinV2(\Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurPaieLigneBulletinV2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurPaieLigneBulletinV2Response
    {
        return ($this->caller)('SWS_ExcelChercheValeurPaieLigneBulletinV2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExcelChercheValeurComptaV2 $parameters
     * @return ResultInterface|Type\SWSExcelChercheValeurComptaV2Response
     * @throws SoapException
     */
    public function sWS_ExcelChercheValeurComptaV2(\Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurComptaV2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExcelChercheValeurComptaV2Response
    {
        return ($this->caller)('SWS_ExcelChercheValeurComptaV2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeDossiersT $parameters
     * @return ResultInterface|Type\SWSListeDossiersTResponse
     * @throws SoapException
     */
    public function sWS_ListeDossiersT(\Qdequippe\SilaePhpSdk\Type\SWSListeDossiersT $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeDossiersTResponse
    {
        return ($this->caller)('SWS_ListeDossiersT', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeDossiersSelonDroit $parameters
     * @return ResultInterface|Type\SWSListeDossiersSelonDroitResponse
     * @throws SoapException
     */
    public function sWS_ListeDossiersSelonDroit(\Qdequippe\SilaePhpSdk\Type\SWSListeDossiersSelonDroit $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeDossiersSelonDroitResponse
    {
        return ($this->caller)('SWS_ListeDossiersSelonDroit', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSCreationClient $parameters
     * @return ResultInterface|Type\SWSCreationClientResponse
     * @throws SoapException
     */
    public function sWS_CreationClient(\Qdequippe\SilaePhpSdk\Type\SWSCreationClient $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSCreationClientResponse
    {
        return ($this->caller)('SWS_CreationClient', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureInformationsDossier $parameters
     * @return ResultInterface|Type\SWSLectureInformationsDossierResponse
     * @throws SoapException
     */
    public function sWS_LectureInformationsDossier(\Qdequippe\SilaePhpSdk\Type\SWSLectureInformationsDossier $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationsDossierResponse
    {
        return ($this->caller)('SWS_LectureInformationsDossier', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeInformationsDossiersPaie $parameters
     * @return ResultInterface|Type\SWSListeInformationsDossiersPaieResponse
     * @throws SoapException
     */
    public function sWS_ListeInformationsDossiersPaie(\Qdequippe\SilaePhpSdk\Type\SWSListeInformationsDossiersPaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeInformationsDossiersPaieResponse
    {
        return ($this->caller)('SWS_ListeInformationsDossiersPaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeEtablissementsDossierPaie $parameters
     * @return ResultInterface|Type\SWSListeEtablissementsDossierPaieResponse
     * @throws SoapException
     */
    public function sWS_ListeEtablissementsDossierPaie(\Qdequippe\SilaePhpSdk\Type\SWSListeEtablissementsDossierPaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeEtablissementsDossierPaieResponse
    {
        return ($this->caller)('SWS_ListeEtablissementsDossierPaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSCreationOrganisme $parameters
     * @return ResultInterface|Type\SWSCreationOrganismeResponse
     * @throws SoapException
     */
    public function sWS_CreationOrganisme(\Qdequippe\SilaePhpSdk\Type\SWSCreationOrganisme $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSCreationOrganismeResponse
    {
        return ($this->caller)('SWS_CreationOrganisme', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSCreationDossierPaie $parameters
     * @return ResultInterface|Type\SWSCreationDossierPaieResponse
     * @throws SoapException
     */
    public function sWS_CreationDossierPaie(\Qdequippe\SilaePhpSdk\Type\SWSCreationDossierPaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSCreationDossierPaieResponse
    {
        return ($this->caller)('SWS_CreationDossierPaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAffectationDossierPaie $parameters
     * @return ResultInterface|Type\SWSAffectationDossierPaieResponse
     * @throws SoapException
     */
    public function sWS_AffectationDossierPaie(\Qdequippe\SilaePhpSdk\Type\SWSAffectationDossierPaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAffectationDossierPaieResponse
    {
        return ($this->caller)('SWS_AffectationDossierPaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAffectationDossierPaieLecture $parameters
     * @return ResultInterface|Type\SWSAffectationDossierPaieLectureResponse
     * @throws SoapException
     */
    public function sWS_AffectationDossierPaieLecture(\Qdequippe\SilaePhpSdk\Type\SWSAffectationDossierPaieLecture $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAffectationDossierPaieLectureResponse
    {
        return ($this->caller)('SWS_AffectationDossierPaieLecture', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSValideCleDossier $parameters
     * @return ResultInterface|Type\SWSValideCleDossierResponse
     * @throws SoapException
     */
    public function sWS_ValideCleDossier(\Qdequippe\SilaePhpSdk\Type\SWSValideCleDossier $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSValideCleDossierResponse
    {
        return ($this->caller)('SWS_ValideCleDossier', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAffecterCleDossier $parameters
     * @return ResultInterface|Type\SWSAffecterCleDossierResponse
     * @throws SoapException
     */
    public function sWS_AffecterCleDossier(\Qdequippe\SilaePhpSdk\Type\SWSAffecterCleDossier $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAffecterCleDossierResponse
    {
        return ($this->caller)('SWS_AffecterCleDossier', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSCreationUtilisateurClientPaie $parameters
     * @return ResultInterface|Type\SWSCreationUtilisateurClientPaieResponse
     * @throws SoapException
     */
    public function sWS_CreationUtilisateurClientPaie(\Qdequippe\SilaePhpSdk\Type\SWSCreationUtilisateurClientPaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSCreationUtilisateurClientPaieResponse
    {
        return ($this->caller)('SWS_CreationUtilisateurClientPaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSCreationSalarieEmplois $parameters
     * @return ResultInterface|Type\SWSCreationSalarieEmploisResponse
     * @throws SoapException
     */
    public function sWS_CreationSalarieEmplois(\Qdequippe\SilaePhpSdk\Type\SWSCreationSalarieEmplois $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSCreationSalarieEmploisResponse
    {
        return ($this->caller)('SWS_CreationSalarieEmplois', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeSalarieEmplois $parameters
     * @return ResultInterface|Type\SWSListeSalarieEmploisResponse
     * @throws SoapException
     */
    public function sWS_ListeSalarieEmplois(\Qdequippe\SilaePhpSdk\Type\SWSListeSalarieEmplois $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeSalarieEmploisResponse
    {
        return ($this->caller)('SWS_ListeSalarieEmplois', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieReinitialiserIdentifiantsEmplois $parameters
     * @return ResultInterface|Type\SWSSalarieReinitialiserIdentifiantsEmploisResponse
     * @throws SoapException
     */
    public function sWS_SalarieReinitialiserIdentifiantsEmplois(\Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserIdentifiantsEmplois $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserIdentifiantsEmploisResponse
    {
        return ($this->caller)('SWS_SalarieReinitialiserIdentifiantsEmplois', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeSalarieEmploisExternes $parameters
     * @return ResultInterface|Type\SWSListeSalarieEmploisExternesResponse
     * @throws SoapException
     */
    public function sWS_ListeSalarieEmploisExternes(\Qdequippe\SilaePhpSdk\Type\SWSListeSalarieEmploisExternes $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeSalarieEmploisExternesResponse
    {
        return ($this->caller)('SWS_ListeSalarieEmploisExternes', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieReinitialiserIdentifiantsEmploisExternes $parameters
     * @return ResultInterface|Type\SWSSalarieReinitialiserIdentifiantsEmploisExternesResponse
     * @throws SoapException
     */
    public function sWS_SalarieReinitialiserIdentifiantsEmploisExternes(\Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserIdentifiantsEmploisExternes $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserIdentifiantsEmploisExternesResponse
    {
        return ($this->caller)('SWS_SalarieReinitialiserIdentifiantsEmploisExternes', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieInitialiserCumuls $parameters
     * @return ResultInterface|Type\SWSSalarieInitialiserCumulsResponse
     * @throws SoapException
     */
    public function sWS_SalarieInitialiserCumuls(\Qdequippe\SilaePhpSdk\Type\SWSSalarieInitialiserCumuls $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieInitialiserCumulsResponse
    {
        return ($this->caller)('SWS_SalarieInitialiserCumuls', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterPrime $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterPrimeResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterPrime(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterPrime $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterPrimeResponse
    {
        return ($this->caller)('SWS_SalarieAjouterPrime', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterPrimeSurEmploi $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterPrimeSurEmploiResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterPrimeSurEmploi(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterPrimeSurEmploi $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterPrimeSurEmploiResponse
    {
        return ($this->caller)('SWS_SalarieAjouterPrimeSurEmploi', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeVariablesASaisir $parameters
     * @return ResultInterface|Type\SWSListeVariablesASaisirResponse
     * @throws SoapException
     */
    public function sWS_ListeVariablesASaisir(\Qdequippe\SilaePhpSdk\Type\SWSListeVariablesASaisir $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeVariablesASaisirResponse
    {
        return ($this->caller)('SWS_ListeVariablesASaisir', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterElementVariable $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterElementVariableResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterElementVariable(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterElementVariable $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterElementVariableResponse
    {
        return ($this->caller)('SWS_SalarieAjouterElementVariable', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterElementVariableSurEmploi $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterElementVariableSurEmploiResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterElementVariableSurEmploi(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterElementVariableSurEmploi $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterElementVariableSurEmploiResponse
    {
        return ($this->caller)('SWS_SalarieAjouterElementVariableSurEmploi', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterAbsence $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterAbsenceResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterAbsence(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAbsenceResponse
    {
        return ($this->caller)('SWS_SalarieAjouterAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieModifierAbsence $parameters
     * @return ResultInterface|Type\SWSSalarieModifierAbsenceResponse
     * @throws SoapException
     */
    public function sWS_SalarieModifierAbsence(\Qdequippe\SilaePhpSdk\Type\SWSSalarieModifierAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieModifierAbsenceResponse
    {
        return ($this->caller)('SWS_SalarieModifierAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieSupprimerAbsence $parameters
     * @return ResultInterface|Type\SWSSalarieSupprimerAbsenceResponse
     * @throws SoapException
     */
    public function sWS_SalarieSupprimerAbsence(\Qdequippe\SilaePhpSdk\Type\SWSSalarieSupprimerAbsence $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieSupprimerAbsenceResponse
    {
        return ($this->caller)('SWS_SalarieSupprimerAbsence', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterAbsenceV2 $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterAbsenceV2Response
     * @throws SoapException
     */
    public function sWS_SalarieAjouterAbsence_V2(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAbsenceV2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAbsenceV2Response
    {
        return ($this->caller)('SWS_SalarieAjouterAbsence_V2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieModifierAbsenceV2 $parameters
     * @return ResultInterface|Type\SWSSalarieModifierAbsenceV2Response
     * @throws SoapException
     */
    public function sWS_SalarieModifierAbsence_V2(\Qdequippe\SilaePhpSdk\Type\SWSSalarieModifierAbsenceV2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieModifierAbsenceV2Response
    {
        return ($this->caller)('SWS_SalarieModifierAbsence_V2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieLectureInformations $parameters
     * @return ResultInterface|Type\SWSSalarieLectureInformationsResponse
     * @throws SoapException
     */
    public function sWS_SalarieLectureInformations(\Qdequippe\SilaePhpSdk\Type\SWSSalarieLectureInformations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieLectureInformationsResponse
    {
        return ($this->caller)('SWS_SalarieLectureInformations', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieLectureInformations2 $parameters
     * @return ResultInterface|Type\SWSSalarieLectureInformations2Response
     * @throws SoapException
     */
    public function sWS_SalarieLectureInformations2(\Qdequippe\SilaePhpSdk\Type\SWSSalarieLectureInformations2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieLectureInformations2Response
    {
        return ($this->caller)('SWS_SalarieLectureInformations2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterAcompte $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterAcompteResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterAcompte(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAcompte $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAcompteResponse
    {
        return ($this->caller)('SWS_SalarieAjouterAcompte', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterHeures $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterHeuresResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterHeures(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeures $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResponse
    {
        return ($this->caller)('SWS_SalarieAjouterHeures', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterHeuresSurEmploi $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterHeuresSurEmploiResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterHeuresSurEmploi(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresSurEmploi $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresSurEmploiResponse
    {
        return ($this->caller)('SWS_SalarieAjouterHeuresSurEmploi', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterActiviteJournaliere $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterActiviteJournaliereResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterActiviteJournaliere(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterActiviteJournaliere $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterActiviteJournaliereResponse
    {
        return ($this->caller)('SWS_SalarieAjouterActiviteJournaliere', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterActiviteJournaliereSurEmploi $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterActiviteJournaliereSurEmploiResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterActiviteJournaliereSurEmploi(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterActiviteJournaliereSurEmploi $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterActiviteJournaliereSurEmploiResponse
    {
        return ($this->caller)('SWS_SalarieAjouterActiviteJournaliereSurEmploi', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterHeuresNatives $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterHeuresNativesResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterHeuresNatives(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresNatives $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresNativesResponse
    {
        return ($this->caller)('SWS_SalarieAjouterHeuresNatives', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAjouterHeuresNativesSurEmploi $parameters
     * @return ResultInterface|Type\SWSSalarieAjouterHeuresNativesSurEmploiResponse
     * @throws SoapException
     */
    public function sWS_SalarieAjouterHeuresNativesSurEmploi(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresNativesSurEmploi $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresNativesSurEmploiResponse
    {
        return ($this->caller)('SWS_SalarieAjouterHeuresNativesSurEmploi', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieReinitialiserSaisies $parameters
     * @return ResultInterface|Type\SWSSalarieReinitialiserSaisiesResponse
     * @throws SoapException
     */
    public function sWS_SalarieReinitialiserSaisies(\Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserSaisies $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserSaisiesResponse
    {
        return ($this->caller)('SWS_SalarieReinitialiserSaisies', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalariesConfirmerSaisies $parameters
     * @return ResultInterface|Type\SWSSalariesConfirmerSaisiesResponse
     * @throws SoapException
     */
    public function sWS_SalariesConfirmerSaisies(\Qdequippe\SilaePhpSdk\Type\SWSSalariesConfirmerSaisies $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalariesConfirmerSaisiesResponse
    {
        return ($this->caller)('SWS_SalariesConfirmerSaisies', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieRecupererPeriodeDernierBulletinCalcule $parameters
     * @return ResultInterface|Type\SWSSalarieRecupererPeriodeDernierBulletinCalculeResponse
     * @throws SoapException
     */
    public function sWS_SalarieRecupererPeriodeDernierBulletinCalcule(\Qdequippe\SilaePhpSdk\Type\SWSSalarieRecupererPeriodeDernierBulletinCalcule $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieRecupererPeriodeDernierBulletinCalculeResponse
    {
        return ($this->caller)('SWS_SalarieRecupererPeriodeDernierBulletinCalcule', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSDossierRecupererPeriodeEnCours $parameters
     * @return ResultInterface|Type\SWSDossierRecupererPeriodeEnCoursResponse
     * @throws SoapException
     */
    public function sWS_DossierRecupererPeriodeEnCours(\Qdequippe\SilaePhpSdk\Type\SWSDossierRecupererPeriodeEnCours $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSDossierRecupererPeriodeEnCoursResponse
    {
        return ($this->caller)('SWS_DossierRecupererPeriodeEnCours', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieEmploiClassificationMetier $parameters
     * @return ResultInterface|Type\SWSSalarieEmploiClassificationMetierResponse
     * @throws SoapException
     */
    public function sWS_SalarieEmploiClassificationMetier(\Qdequippe\SilaePhpSdk\Type\SWSSalarieEmploiClassificationMetier $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieEmploiClassificationMetierResponse
    {
        return ($this->caller)('SWS_SalarieEmploiClassificationMetier', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSClassificationMetierComplete $parameters
     * @return ResultInterface|Type\SWSClassificationMetierCompleteResponse
     * @throws SoapException
     */
    public function sWS_ClassificationMetierComplete(\Qdequippe\SilaePhpSdk\Type\SWSClassificationMetierComplete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSClassificationMetierCompleteResponse
    {
        return ($this->caller)('SWS_ClassificationMetierComplete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalariesBulletins $parameters
     * @return ResultInterface|Type\SWSSalariesBulletinsResponse
     * @throws SoapException
     */
    public function sWS_SalariesBulletins(\Qdequippe\SilaePhpSdk\Type\SWSSalariesBulletins $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalariesBulletinsResponse
    {
        return ($this->caller)('SWS_SalariesBulletins', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSRecupererImage $parameters
     * @return ResultInterface|Type\SWSRecupererImageResponse
     * @throws SoapException
     */
    public function sWS_RecupererImage(\Qdequippe\SilaePhpSdk\Type\SWSRecupererImage $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSRecupererImageResponse
    {
        return ($this->caller)('SWS_RecupererImage', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSRecupererFichiersVirements $parameters
     * @return ResultInterface|Type\SWSRecupererFichiersVirementsResponse
     * @throws SoapException
     */
    public function sWS_RecupererFichiersVirements(\Qdequippe\SilaePhpSdk\Type\SWSRecupererFichiersVirements $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSRecupererFichiersVirementsResponse
    {
        return ($this->caller)('SWS_RecupererFichiersVirements', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSRecupererFichiersVirementsChiffres $parameters
     * @return ResultInterface|Type\SWSRecupererFichiersVirementsChiffresResponse
     * @throws SoapException
     */
    public function sWS_RecupererFichiersVirementsChiffres(\Qdequippe\SilaePhpSdk\Type\SWSRecupererFichiersVirementsChiffres $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSRecupererFichiersVirementsChiffresResponse
    {
        return ($this->caller)('SWS_RecupererFichiersVirementsChiffres', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeSalaries $parameters
     * @return ResultInterface|Type\SWSListeSalariesResponse
     * @throws SoapException
     */
    public function sWS_ListeSalaries(\Qdequippe\SilaePhpSdk\Type\SWSListeSalaries $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeSalariesResponse
    {
        return ($this->caller)('SWS_ListeSalaries', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSListeSalariesExternes $parameters
     * @return ResultInterface|Type\SWSListeSalariesExternesResponse
     * @throws SoapException
     */
    public function sWS_ListeSalariesExternes(\Qdequippe\SilaePhpSdk\Type\SWSListeSalariesExternes $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSListeSalariesExternesResponse
    {
        return ($this->caller)('SWS_ListeSalariesExternes', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieSalaireDeBase $parameters
     * @return ResultInterface|Type\SWSSalarieSalaireDeBaseResponse
     * @throws SoapException
     */
    public function sWS_SalarieSalaireDeBase(\Qdequippe\SilaePhpSdk\Type\SWSSalarieSalaireDeBase $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieSalaireDeBaseResponse
    {
        return ($this->caller)('SWS_SalarieSalaireDeBase', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieBulletinEntete $parameters
     * @return ResultInterface|Type\SWSSalarieBulletinEnteteResponse
     * @throws SoapException
     */
    public function sWS_SalarieBulletinEntete(\Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinEntete $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinEnteteResponse
    {
        return ($this->caller)('SWS_SalarieBulletinEntete', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieBulletinLignes $parameters
     * @return ResultInterface|Type\SWSSalarieBulletinLignesResponse
     * @throws SoapException
     */
    public function sWS_SalarieBulletinLignes(\Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinLignes $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinLignesResponse
    {
        return ($this->caller)('SWS_SalarieBulletinLignes', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieBulletinLignesSelonFiltres $parameters
     * @return ResultInterface|Type\SWSSalarieBulletinLignesSelonFiltresResponse
     * @throws SoapException
     */
    public function sWS_SalarieBulletinLignesSelonFiltres(\Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinLignesSelonFiltres $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieBulletinLignesSelonFiltresResponse
    {
        return ($this->caller)('SWS_SalarieBulletinLignesSelonFiltres', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieAbsences $parameters
     * @return ResultInterface|Type\SWSSalarieAbsencesResponse
     * @throws SoapException
     */
    public function sWS_SalarieAbsences(\Qdequippe\SilaePhpSdk\Type\SWSSalarieAbsences $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieAbsencesResponse
    {
        return ($this->caller)('SWS_SalarieAbsences', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalariesStockVar $parameters
     * @return ResultInterface|Type\SWSSalariesStockVarResponse
     * @throws SoapException
     */
    public function sWS_SalariesStockVar(\Qdequippe\SilaePhpSdk\Type\SWSSalariesStockVar $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalariesStockVarResponse
    {
        return ($this->caller)('SWS_SalariesStockVar', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieRecupererDUE $parameters
     * @return ResultInterface|Type\SWSSalarieRecupererDUEResponse
     * @throws SoapException
     */
    public function sWS_SalarieRecupererDUE(\Qdequippe\SilaePhpSdk\Type\SWSSalarieRecupererDUE $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieRecupererDUEResponse
    {
        return ($this->caller)('SWS_SalarieRecupererDUE', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieDUE $parameters
     * @return ResultInterface|Type\SWSSalarieDUEResponse
     * @throws SoapException
     */
    public function sWS_SalarieDUE(\Qdequippe\SilaePhpSdk\Type\SWSSalarieDUE $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieDUEResponse
    {
        return ($this->caller)('SWS_SalarieDUE', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalariesDUE $parameters
     * @return ResultInterface|Type\SWSSalariesDUEResponse
     * @throws SoapException
     */
    public function sWS_SalariesDUE(\Qdequippe\SilaePhpSdk\Type\SWSSalariesDUE $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalariesDUEResponse
    {
        return ($this->caller)('SWS_SalariesDUE', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSalarieSyntheseCarriere $parameters
     * @return ResultInterface|Type\SWSSalarieSyntheseCarriereResponse
     * @throws SoapException
     */
    public function sWS_SalarieSyntheseCarriere(\Qdequippe\SilaePhpSdk\Type\SWSSalarieSyntheseCarriere $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSalarieSyntheseCarriereResponse
    {
        return ($this->caller)('SWS_SalarieSyntheseCarriere', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSRecupererDeclarations $parameters
     * @return ResultInterface|Type\SWSRecupererDeclarationsResponse
     * @throws SoapException
     */
    public function sWS_RecupererDeclarations(\Qdequippe\SilaePhpSdk\Type\SWSRecupererDeclarations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSRecupererDeclarationsResponse
    {
        return ($this->caller)('SWS_RecupererDeclarations', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAnalyseProductionPaie $parameters
     * @return ResultInterface|Type\SWSAnalyseProductionPaieResponse
     * @throws SoapException
     */
    public function sWS_AnalyseProductionPaie(\Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieResponse
    {
        return ($this->caller)('SWS_AnalyseProductionPaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAnalyseProductionPaieDetail $parameters
     * @return ResultInterface|Type\SWSAnalyseProductionPaieDetailResponse
     * @throws SoapException
     */
    public function sWS_AnalyseProductionPaieDetail(\Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieDetail $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieDetailResponse
    {
        return ($this->caller)('SWS_AnalyseProductionPaieDetail', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAnalyseProductionPaieUtilisateurs $parameters
     * @return ResultInterface|Type\SWSAnalyseProductionPaieUtilisateursResponse
     * @throws SoapException
     */
    public function sWS_AnalyseProductionPaieUtilisateurs(\Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieUtilisateurs $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieUtilisateursResponse
    {
        return ($this->caller)('SWS_AnalyseProductionPaieUtilisateurs', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAnalyseProductionPaieEntreesSorties $parameters
     * @return ResultInterface|Type\SWSAnalyseProductionPaieEntreesSortiesResponse
     * @throws SoapException
     */
    public function sWS_AnalyseProductionPaieEntreesSorties(\Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieEntreesSorties $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAnalyseProductionPaieEntreesSortiesResponse
    {
        return ($this->caller)('SWS_AnalyseProductionPaieEntreesSorties', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSoldeRepos $parameters
     * @return ResultInterface|Type\SWSSoldeReposResponse
     * @throws SoapException
     */
    public function sWS_SoldeRepos(\Qdequippe\SilaePhpSdk\Type\SWSSoldeRepos $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSoldeReposResponse
    {
        return ($this->caller)('SWS_SoldeRepos', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEcrituresComptables $parameters
     * @return ResultInterface|Type\SWSEcrituresComptablesResponse
     * @throws SoapException
     */
    public function sWS_EcrituresComptables(\Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptables $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptablesResponse
    {
        return ($this->caller)('SWS_EcrituresComptables', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEcrituresComptables2 $parameters
     * @return ResultInterface|Type\SWSEcrituresComptables2Response
     * @throws SoapException
     */
    public function sWS_EcrituresComptables2(\Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptables2 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptables2Response
    {
        return ($this->caller)('SWS_EcrituresComptables2', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEcrituresComptables3 $parameters
     * @return ResultInterface|Type\SWSEcrituresComptables3Response
     * @throws SoapException
     */
    public function sWS_EcrituresComptables3(\Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptables3 $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptables3Response
    {
        return ($this->caller)('SWS_EcrituresComptables3', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEditionJournalDePaie $parameters
     * @return ResultInterface|Type\SWSEditionJournalDePaieResponse
     * @throws SoapException
     */
    public function sWS_EditionJournalDePaie(\Qdequippe\SilaePhpSdk\Type\SWSEditionJournalDePaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEditionJournalDePaieResponse
    {
        return ($this->caller)('SWS_EditionJournalDePaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEditionTableauDesCharges $parameters
     * @return ResultInterface|Type\SWSEditionTableauDesChargesResponse
     * @throws SoapException
     */
    public function sWS_EditionTableauDesCharges(\Qdequippe\SilaePhpSdk\Type\SWSEditionTableauDesCharges $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEditionTableauDesChargesResponse
    {
        return ($this->caller)('SWS_EditionTableauDesCharges', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEditionEtatDesPaiements $parameters
     * @return ResultInterface|Type\SWSEditionEtatDesPaiementsResponse
     * @throws SoapException
     */
    public function sWS_EditionEtatDesPaiements(\Qdequippe\SilaePhpSdk\Type\SWSEditionEtatDesPaiements $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEditionEtatDesPaiementsResponse
    {
        return ($this->caller)('SWS_EditionEtatDesPaiements', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEditionRecapDePaie $parameters
     * @return ResultInterface|Type\SWSEditionRecapDePaieResponse
     * @throws SoapException
     */
    public function sWS_EditionRecapDePaie(\Qdequippe\SilaePhpSdk\Type\SWSEditionRecapDePaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEditionRecapDePaieResponse
    {
        return ($this->caller)('SWS_EditionRecapDePaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEditionSoldeDeRepos $parameters
     * @return ResultInterface|Type\SWSEditionSoldeDeReposResponse
     * @throws SoapException
     */
    public function sWS_EditionSoldeDeRepos(\Qdequippe\SilaePhpSdk\Type\SWSEditionSoldeDeRepos $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEditionSoldeDeReposResponse
    {
        return ($this->caller)('SWS_EditionSoldeDeRepos', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEditionControleCICE $parameters
     * @return ResultInterface|Type\SWSEditionControleCICEResponse
     * @throws SoapException
     */
    public function sWS_EditionControleCICE(\Qdequippe\SilaePhpSdk\Type\SWSEditionControleCICE $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEditionControleCICEResponse
    {
        return ($this->caller)('SWS_EditionControleCICE', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEditionDetailDesCotisations $parameters
     * @return ResultInterface|Type\SWSEditionDetailDesCotisationsResponse
     * @throws SoapException
     */
    public function sWS_EditionDetailDesCotisations(\Qdequippe\SilaePhpSdk\Type\SWSEditionDetailDesCotisations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEditionDetailDesCotisationsResponse
    {
        return ($this->caller)('SWS_EditionDetailDesCotisations', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEditionCoutsSalariaux $parameters
     * @return ResultInterface|Type\SWSEditionCoutsSalariauxResponse
     * @throws SoapException
     */
    public function sWS_EditionCoutsSalariaux(\Qdequippe\SilaePhpSdk\Type\SWSEditionCoutsSalariaux $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEditionCoutsSalariauxResponse
    {
        return ($this->caller)('SWS_EditionCoutsSalariaux', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSEditionHistorique $parameters
     * @return ResultInterface|Type\SWSEditionHistoriqueResponse
     * @throws SoapException
     */
    public function sWS_EditionHistorique(\Qdequippe\SilaePhpSdk\Type\SWSEditionHistorique $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSEditionHistoriqueResponse
    {
        return ($this->caller)('SWS_EditionHistorique', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSBureautiquePaieNombreDocumentsCrees $parameters
     * @return ResultInterface|Type\SWSBureautiquePaieNombreDocumentsCreesResponse
     * @throws SoapException
     */
    public function sWS_BureautiquePaieNombreDocumentsCrees(\Qdequippe\SilaePhpSdk\Type\SWSBureautiquePaieNombreDocumentsCrees $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSBureautiquePaieNombreDocumentsCreesResponse
    {
        return ($this->caller)('SWS_BureautiquePaieNombreDocumentsCrees', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureInformationsPaie $parameters
     * @return ResultInterface|Type\SWSLectureInformationsPaieResponse
     * @throws SoapException
     */
    public function sWS_LectureInformationsPaie(\Qdequippe\SilaePhpSdk\Type\SWSLectureInformationsPaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureInformationsPaieResponse
    {
        return ($this->caller)('SWS_LectureInformationsPaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSGererEtatDossierPaie $parameters
     * @return ResultInterface|Type\SWSGererEtatDossierPaieResponse
     * @throws SoapException
     */
    public function sWS_GererEtatDossierPaie(\Qdequippe\SilaePhpSdk\Type\SWSGererEtatDossierPaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSGererEtatDossierPaieResponse
    {
        return ($this->caller)('SWS_GererEtatDossierPaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSGererEtatRobotDePaie $parameters
     * @return ResultInterface|Type\SWSGererEtatRobotDePaieResponse
     * @throws SoapException
     */
    public function sWS_GererEtatRobotDePaie(\Qdequippe\SilaePhpSdk\Type\SWSGererEtatRobotDePaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSGererEtatRobotDePaieResponse
    {
        return ($this->caller)('SWS_GererEtatRobotDePaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSGererCycleDePaie $parameters
     * @return ResultInterface|Type\SWSGererCycleDePaieResponse
     * @throws SoapException
     */
    public function sWS_GererCycleDePaie(\Qdequippe\SilaePhpSdk\Type\SWSGererCycleDePaie $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSGererCycleDePaieResponse
    {
        return ($this->caller)('SWS_GererCycleDePaie', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSControlerBulletinsPeriode $parameters
     * @return ResultInterface|Type\SWSControlerBulletinsPeriodeResponse
     * @throws SoapException
     */
    public function sWS_ControlerBulletinsPeriode(\Qdequippe\SilaePhpSdk\Type\SWSControlerBulletinsPeriode $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSControlerBulletinsPeriodeResponse
    {
        return ($this->caller)('SWS_ControlerBulletinsPeriode', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAdministrationCollaborateurLecture $parameters
     * @return ResultInterface|Type\SWSAdministrationCollaborateurLectureResponse
     * @throws SoapException
     */
    public function sWS_AdministrationCollaborateurLecture(\Qdequippe\SilaePhpSdk\Type\SWSAdministrationCollaborateurLecture $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAdministrationCollaborateurLectureResponse
    {
        return ($this->caller)('SWS_AdministrationCollaborateurLecture', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSAdministrationCollaborateurEnregistrement $parameters
     * @return ResultInterface|Type\SWSAdministrationCollaborateurEnregistrementResponse
     * @throws SoapException
     */
    public function sWS_AdministrationCollaborateurEnregistrement(\Qdequippe\SilaePhpSdk\Type\SWSAdministrationCollaborateurEnregistrement $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSAdministrationCollaborateurEnregistrementResponse
    {
        return ($this->caller)('SWS_AdministrationCollaborateurEnregistrement', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSLectureCodeClientFacturation $parameters
     * @return ResultInterface|Type\SWSLectureCodeClientFacturationResponse
     * @throws SoapException
     */
    public function sWS_LectureCodeClientFacturation(\Qdequippe\SilaePhpSdk\Type\SWSLectureCodeClientFacturation $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSLectureCodeClientFacturationResponse
    {
        return ($this->caller)('SWS_LectureCodeClientFacturation', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSpectacleListe $parameters
     * @return ResultInterface|Type\SWSSpectacleListeResponse
     * @throws SoapException
     */
    public function sWS_SpectacleListe(\Qdequippe\SilaePhpSdk\Type\SWSSpectacleListe $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSpectacleListeResponse
    {
        return ($this->caller)('SWS_SpectacleListe', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSpectacleCreation $parameters
     * @return ResultInterface|Type\SWSSpectacleCreationResponse
     * @throws SoapException
     */
    public function sWS_SpectacleCreation(\Qdequippe\SilaePhpSdk\Type\SWSSpectacleCreation $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSpectacleCreationResponse
    {
        return ($this->caller)('SWS_SpectacleCreation', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSpectacleSalarieAcquisitionAffectations $parameters
     * @return ResultInterface|Type\SWSSpectacleSalarieAcquisitionAffectationsResponse
     * @throws SoapException
     */
    public function sWS_SpectacleSalarieAcquisitionAffectations(\Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieAcquisitionAffectations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieAcquisitionAffectationsResponse
    {
        return ($this->caller)('SWS_SpectacleSalarieAcquisitionAffectations', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSpectacleSalarieAjouterAffectations $parameters
     * @return ResultInterface|Type\SWSSpectacleSalarieAjouterAffectationsResponse
     * @throws SoapException
     */
    public function sWS_SpectacleSalarieAjouterAffectations(\Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieAjouterAffectations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieAjouterAffectationsResponse
    {
        return ($this->caller)('SWS_SpectacleSalarieAjouterAffectations', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSpectacleSalarieReinitialiserAffectations $parameters
     * @return ResultInterface|Type\SWSSpectacleSalarieReinitialiserAffectationsResponse
     * @throws SoapException
     */
    public function sWS_SpectacleSalarieReinitialiserAffectations(\Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieReinitialiserAffectations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieReinitialiserAffectationsResponse
    {
        return ($this->caller)('SWS_SpectacleSalarieReinitialiserAffectations', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSSpectacleSalarieCalculerBulletin $parameters
     * @return ResultInterface|Type\SWSSpectacleSalarieCalculerBulletinResponse
     * @throws SoapException
     */
    public function sWS_SpectacleSalarieCalculerBulletin(\Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieCalculerBulletin $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieCalculerBulletinResponse
    {
        return ($this->caller)('SWS_SpectacleSalarieCalculerBulletin', $parameters);
    }

    /**
     * @param RequestInterface|Type\SWSExtraListeManifestations $parameters
     * @return ResultInterface|Type\SWSExtraListeManifestationsResponse
     * @throws SoapException
     */
    public function sWS_ExtraListeManifestations(\Qdequippe\SilaePhpSdk\Type\SWSExtraListeManifestations $parameters) : \Qdequippe\SilaePhpSdk\Type\SWSExtraListeManifestationsResponse
    {
        return ($this->caller)('SWS_ExtraListeManifestations', $parameters);
    }
}

