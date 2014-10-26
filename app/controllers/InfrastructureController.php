<?php

class InfrastructureController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {}
  
  //Stores the input from the user, if no row exsists with project_id create a new one, if it does retrieve that row and store values into that row
  public function update()
  {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    $input = Input::all();
    if(is_null(DB::table('infrastructures')->where('project_id', $id)->first()))
    {
      $infrastructure = new Infrastructure;
      $infrastructure->project_id = $id;
    }
    else
      $infrastructure = Project::find($id)->infrastructure;
    
    $infrastructure->accessRoadNo = $input['accessRoadNo'];
    $infrastructure->accessRoadD = $input['accessRoadD'];
    $infrastructure->infrastructureCorridorsNo = $input['infrastructureCorridorsNo'];
    $infrastructure->infrastructureCorridorsD = $input['infrastructureCorridorsD'];
    $infrastructure->fixedInfrastructureNo = $input['fixedInfrastructureNo'];
    $infrastructure->fixedInfrastructureD = $input['fixedInfrastructureD'];
    $infrastructure->waterTanksNo = $input['waterTanksNo'];
    $infrastructure->waterTanksD = $input['waterTanksD'];
    $infrastructure->siteOfficeNo = $input['siteOfficeNo'];
    $infrastructure->siteOfficeD = $input['siteOfficeD'];
    $infrastructure->communicationsTowerNo = $input['communicationsTowerNo'];
    $infrastructure->communicationsTowerD = $input['communicationsTowerD'];
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
    $infrastructure->communityCoolingNo = $input['communityCoolingNo'];
    $infrastructure->communityCoolingD = $input['communityCoolingD'];
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
    $infrastructure->irrigationFacilitiesNo = $input['irrigationFacilitiesNo'];
    $infrastructure->irrigationFacilitiesD = $input['irrigationFacilitiesD'];
    $infrastructure->waterPipesNo = $input['waterPipesNo'];
    $infrastructure->waterPipesD = $input['waterPipesD'];
    $infrastructure->retentionSystemsNo = $input['retentionSystemsNo'];
    $infrastructure->retentionSystemsD = $input['retentionSystemsD'];
    $infrastructure->detentionSystemsNo = $input['detentionSystemsNo'];
    $infrastructure->detentionSystemsD = $input['detentionSystemsD'];
    $infrastructure->retainingWallsNo = $input['retainingWallsNo'];
    $infrastructure->retainingWallsD = $input['retainingWallsD'];
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
    
    //Section for the new comment areas at the top.
    $infrastructure->InfraforOpComment = $input['InfraforOpComment'];
    $infrastructure->OpWorksComment = $input['OpWorksComment'];
    
    $infrastructure->GravelFillPermitReq = $input['GravelFillPermitReq'];
    $infrastructure->GravelFillPermitReqEntity = $input['GravelFillPermitReqEntity'];
    $infrastructure->GravelFillTransPermitReq = $input['GravelFillTransPermitReq'];
    $infrastructure->GravelFillTransPermitReqEntity = $input['GravelFillTransPermitReqEntity'];
    $infrastructure->TopSoilPermitReq = $input['TopSoilPermitReq'];
    $infrastructure->TopSoilPermitReqEntity = $input['TopSoilPermitReqEntity'];
    $infrastructure->TopSoilTransPermitReq = $input['TopSoilTransPermitReq'];
    $infrastructure->TopSoilTransPermitReqEntity = $input['TopSoilTransPermitReqEntity'];
      
    $infrastructure->save();
    return View::make('portal.infrastructure', compact('infrastructure', 'id'));
  }
  
  public function show()
  {
    if ((Auth::user()) !== null)
      {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    $infrastructure = DB::table('infrastructures')->where('project_id', $id)->first();
    return View::make('portal.infrastructure', compact('infrastructure', 'id'));
    }
    else return Redirect::to('index');
  }
}
