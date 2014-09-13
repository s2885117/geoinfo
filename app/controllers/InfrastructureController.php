<?php

class InfrastructureController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('portal.infrastructure');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeFirst()
	{
		$input = Input::all();
    $firstInfrastructure = new FirstInfrastructure;
    $firstInfrastructure->project_id;
    $firstInfrastructure->accessRoadNo = $input['accessRoadNo'];
    $firstInfrastructure->accessRoadD = $input['accessRoadD'];
    $firstInfrastructure->infrastructureCorridorsNo = $input['ifrastructureCorridorsNo'];
    $firstInfrastructure->infrastructureCorridorsD = $input['ifrastructureCorridorsD'];
    $firstInfrastructure->fixedIntrastuctureNo = $input['fixedIntrastuctureNo'];
    $firstInfrastructure->fixedIntrastuctureD = $input['fixedIntrastuctureD'];
    $firstInfrastructure->waterTanksNo = $input['waterTanksNo'];
    $firstInfrastructure->waterTanksD = $input['waterTanksD'];
    $firstInfrastructure->siteOfficeNo = $input['siteOfficeNo'];
    $firstInfrastructure->siteOfficeD = $input['siteOfficeD'];
    $firstInfrastructure->cummunicationsTowerNo = $input['cummunicationsTowerNo'];
    $firstInfrastructure->cummunicationsTowerD = $input['cummunicationsTowerD'];
    $firstInfrastructure->wasteDisposalNo = $input['wasteDisposalNo'];
    $firstInfrastructure->wasteDisposalD = $input['wasteDisposalD'];
    $firstInfrastructure->waterTreatmentNo = $input['waterTreatmentNo'];
    $firstInfrastructure->waterTreatmentD = $input['waterTreatmentD'];
    $firstInfrastructure->sewerageTreatmentNo = $input['sewerageTreatmentNo'];
    $firstInfrastructure->sewerageTreatmentD = $input['sewerageTreatmentD'];
    $firstInfrastructure->renewableEnergyNo = $input['renewableEnergyNo'];
    $firstInfrastructure->renewableEnergyD = $input['renewableEnergyD'];
    $firstInfrastructure->waterFeatureNo = $input['waterFeatureNo'];
    $firstInfrastructure->waterFeatureD = $input['waterFeatureD'];
    $firstInfrastructure->exhaustStackNo = $input['exhaustStackNo'];
    $firstInfrastructure->exhaustStackD = $input['exhaustStackD'];
    $firstInfrastructure->cummunityCoolingNo = $input['cummunityCoolingNo'];
    $firstInfrastructure->cummunityCoolingD = $input['cummunityCoolingD'];
    $firstInfrastructure->vehicleTurnaroundsNo = $input['vehicleTurnaroundsNo'];
    $firstInfrastructure->vehicleTurnaroundsD = $input['vehicleTurnaroundsD'];
    $firstInfrastructure->aboveCarParkingNo = $input['aboveCarParkingNo'];
    $firstInfrastructure->aboveCarParkingD = $input['aboveCarParkingD'];
    $firstInfrastructure->underCarParkingNo = $input['underCarParkingNo'];
    $firstInfrastructure->underCarParkingD = $input['underCarParkingD'];
    $firstInfrastructure->floodMitigationNo = $input['floodMitigationNo'];
    $firstInfrastructure->floodMitigationD = $input['floodMitigationD'];
    $firstInfrastructure->irrigationAreasNo = $input['irrigationAreasNo'];
    $firstInfrastructure->irrigationAreasD = $input['irrigationAreasD'];
    $firstInfrastructure->irrigationsFacilitiesNo = $input['irrigationsFacilitiesNo'];
    $firstInfrastructure->irrigationsFacilitiesD = $input['irrigationsFacilitiesD'];
    $firstInfrastructure->waterPipesNo = $input['waterPipesNo'];
    $firstInfrastructure->waterPipesD = $input['waterPipesD'];
    $firstInfrastructure->retentionSystemsNo = $input['retentionSystemsNo'];
    $firstInfrastructure->retentionSystemsD = $input['retentionSystemsD'];
    $firstInfrastructure->detentionSystemsNo = $input['detentionSystemsNo'];
    $firstInfrastructure->detentionSystemsD = $input['detentionSystemsD'];
    $firstInfrastructure->retainingWallNo = $input['retainingWallNo'];
    $firstInfrastructure->retainingWallD = $input['retainingWallD'];
    $firstInfrastructure->save(); 
	}

  public function storeSecond()
	{
		$input = Input::all();
    $secondInfrastructure = new SecondInfrastructure;
    $secondInfrastructure->project_id;
    $secondInfrastructure->earthworksNo = $input['earthworksNo'];
    $secondInfrastructure->earthworksD = $input['earthworksD'];
    $secondInfrastructure->accessRoadsNo = $input['accessRoadsNo'];
    $secondInfrastructure->accessRoadsD = $input['accessRoadsD'];
    $secondInfrastructure->constructionCampsNo = $input['constructionCampsNo'];
    $secondInfrastructure->constructionCampsD = $input['constructionCampsD'];
    $secondInfrastructure->layDownAreasNo = $input['layDownAreasNo'];
    $secondInfrastructure->layDownAreasD = $input['layDownAreasD'];
    $secondInfrastructure->operationalSiteOfficeNo = $input['operationalSiteOfficeNo'];
    $secondInfrastructure->operationalSiteOfficeD = $input['operationalSiteOfficeD'];
    $secondInfrastructure->truckTurnaroundsNo = $input['truckTurnaroundsNo'];
    $secondInfrastructure->truckTurnaroundsD = $input['truckTurnaroundsD'];
    $secondInfrastructure->workshopsNo = $input['workshopsNo'];
    $secondInfrastructure->workshopsD = $input['workshopsD'];
    $secondInfrastructure->save(); 
	}
}
