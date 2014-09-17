<?php

class InfrastructureController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    //
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
  
  public function update($id)
  {
    $input = Input::all();
    if(is_null(DB::table('infrastructures')->where('project_id', $id)->first()))
    {
      $infrastructure = new Infrastructure;
      $infrastructure->project_id = ($id);
    }
    else
      $infrastructure = DB::table('infrastructures')->where('project_id', $id)->first();
    $infrastructure->accessRoadNo = $input['accessRoadNo'];
    $infrastructure->accessRoadD = $input['accessRoadD'];
    $infrastructure->infrastructureCorridorsNo = $input['ifrastructureCorridorsNo'];
    $infrastructure->infrastructureCorridorsD = $input['ifrastructureCorridorsD'];
    $infrastructure->fixedIntrastuctureNo = $input['fixedIntrastuctureNo'];
    $infrastructure->fixedIntrastuctureD = $input['fixedIntrastuctureD'];
    $infrastructure->waterTanksNo = $input['waterTanksNo'];
    $infrastructure->waterTanksD = $input['waterTanksD'];
    $infrastructure->siteOfficeNo = $input['siteOfficeNo'];
    $infrastructure->siteOfficeD = $input['siteOfficeD'];
    $infrastructure->cummunicationsTowerNo = $input['cummunicationsTowerNo'];
    $infrastructure->cummunicationsTowerD = $input['cummunicationsTowerD'];
    $infrastructure->wasteDisposalNo = $input['wasteDisposalNo'];
    $infrastructure->wasteDisposalD = $input['wasteDisposalD'];
    $infrastructure->waterTreatmentNo = $input['waterTreatmentNo'];
    $infrastructure->waterTreatmentD = $input['waterTreatmentD'];
    $infrastructure->sewerageTreatmentNo = $input['sewerageTreatmentNo'];
    $infrastructure->sewerageTreatmentD = $input['sewerageTreatmentD'];
    $infrastructure->renewableEnergyNo = $input['renewableEnergyNo'];
    $infrastructure->renewableEnergyD = $input['renewableEnergyD'];
    $infrastructure->waterFeatureNo = $input['waterFeatureNo'];
    $infrastructure->waterFeatureD = $input['waterFeatureD'];
    $infrastructure->exhaustStackNo = $input['exhaustStackNo'];
    $infrastructure->exhaustStackD = $input['exhaustStackD'];
    $infrastructure->cummunityCoolingNo = $input['cummunityCoolingNo'];
    $infrastructure->cummunityCoolingD = $input['cummunityCoolingD'];
    $infrastructure->vehicleTurnaroundsNo = $input['vehicleTurnaroundsNo'];
    $infrastructure->vehicleTurnaroundsD = $input['vehicleTurnaroundsD'];
    $infrastructure->aboveCarParkingNo = $input['aboveCarParkingNo'];
    $infrastructure->aboveCarParkingD = $input['aboveCarParkingD'];
    $infrastructure->underCarParkingNo = $input['underCarParkingNo'];
    $infrastructure->underCarParkingD = $input['underCarParkingD'];
    $infrastructure->floodMitigationNo = $input['floodMitigationNo'];
    $infrastructure->floodMitigationD = $input['floodMitigationD'];
    $infrastructure->irrigationAreasNo = $input['irrigationAreasNo'];
    $infrastructure->irrigationAreasD = $input['irrigationAreasD'];
    $infrastructure->irrigationsFacilitiesNo = $input['irrigationsFacilitiesNo'];
    $infrastructure->irrigationsFacilitiesD = $input['irrigationsFacilitiesD'];
    $infrastructure->waterPipesNo = $input['waterPipesNo'];
    $infrastructure->waterPipesD = $input['waterPipesD'];
    $infrastructure->retentionSystemsNo = $input['retentionSystemsNo'];
    $infrastructure->retentionSystemsD = $input['retentionSystemsD'];
    $infrastructure->detentionSystemsNo = $input['detentionSystemsNo'];
    $infrastructure->detentionSystemsD = $input['detentionSystemsD'];
    $infrastructure->retainingWallNo = $input['retainingWallNo'];
    $infrastructure->retainingWallD = $input['retainingWallD'];
    $infrastructure->earthworksNo = $input['earthworksNo'];
    $infrastructure->earthworksD = $input['earthworksD'];
    $infrastructure->accessRoadsNo = $input['accessRoadsNo'];
    $infrastructure->accessRoadsD = $input['accessRoadsD'];
    $infrastructure->constructionCampsNo = $input['constructionCampsNo'];
    $infrastructure->constructionCampsD = $input['constructionCampsD'];
    $infrastructure->layDownAreasNo = $input['layDownAreasNo'];
    $infrastructure->layDownAreasD = $input['layDownAreasD'];
    $infrastructure->operationalSiteOfficeNo = $input['operationalSiteOfficeNo'];
    $infrastructure->operationalSiteOfficeD = $input['operationalSiteOfficeD'];
    $infrastructure->truckTurnaroundsNo = $input['truckTurnaroundsNo'];
    $infrastructure->truckTurnaroundsD = $input['truckTurnaroundsD'];
    $infrastructure->workshopsNo = $input['workshopsNo'];
    $infrastructure->workshopsD = $input['workshopsD'];
    $infrastructure->save();
    
    return View::make('portal.infrastructure', compact('infrastructure', 'id'));
  }
  
  public function show($id)
  {
    $infrastructure = DB::table('infrastructures')->where('project_id', $id)->first();
    return View::make('portal.infrastructure', compact('infrastucture', 'id'));
  }
}
