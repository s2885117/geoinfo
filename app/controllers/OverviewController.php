<?php

class OverviewController extends \BaseController {

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
  public function index()
  {
  }

  
  public function update($id)
  {
    $input = Input::all();
    if(is_null(DB::table('overviews')->where('project_id', $id)->first()))
       {
         $overview = new Overview;
         $overview->project_id = ($id);
       }
    else
       $overview = DB::table('overviews')->where('project_id', $id)->first();
    $overview->projectName = $input['projectName'];
    $overview->startDate = $input['startDate'];
    $overview->approvalCost = $input['approvalCost'];
    $overview->projectManager = $input['projectManager'];
    $overview->contactNumber = $input['contactNumber'];
    $overview->projectTeam = $input['projectTeam'];
    $overview->stateGovernment = $input['stateGovernment'];
    $overview->propertyName = $input['propertyName'];
    $overview->landTenureDrop = $input['landTenureDrop'];
    $overview->landTenureText = $input['landTenureText'];
    $overview->landownerName = $input['landownerName'];
    $overview->regulatoryAuthority = $input['regulatoryAuthority'];
    $overview->landownerDetails = $input['landownerDetails'];
    $overview->localGovernment = $input['localGovernment'];
    $overview->docsReference = $input['docsReference'];
    $overview->areaLot = $input['areaLot'];
    $overview->gpsCoordinates = $input['gpsCoordinates'];
    $overview->lotPlan1 = $input['lotPlan1'];
    $overview->lotPlan2 = $input['lotPlan2'];
    $overview->developerName = $input['developerName'];
    $overview->urbanPlannerName = $input['urbanPlannerName'];
    $overview->architectName = $input['architectName'];
    $overview->accountantName = $input['accountantName'];
    $overview->legalTeam = $input['legalTeam'];
    $overview->civilEngineer = $input['civilEngineer'];
    $overview->structuralConstructionEngineer = $input['structuralConstructionEngineer'];
    $overview->ecologistName = $input['ecologistName'];
    $overview->landscapeArchitect = $input['landscapeArchitect'];
    $overview->trafficEngineer = $input['trafficEngineer'];
    $overview->surveyor = $input['surveyor'];
    $overview->geotechnicalSpecialist = $input['geotechnicalSpecialist'];
    $overview->relationsAdvisor = $input['relationsAdvisor'];
    $overview->acousticEngineer = $input['acousticEngineer'];
    $overview->hydrologyEngineer = $input['hydrologyEngineer'];
    $overview->airQualitySpecialist = $input['airQualitySpecialist'];
    $overview->tSiteArea = $input['tSiteArea'];
    $overview->numberBuildings = $input['numberBuildings'];
    $overview->tBuildingGFA = $input['tBuildingGFA'];
    $overview->tBuildingSite = $input['tBuildingSite'];
    $overview->tBuildingHeight = $input['tBuildingHeight'];
    $overview->tLandscapeSite = $input['tLandscapeSite'];
    $overview->tHardstandSite = $input['tHardstandSite'];
    $overview->tIngroundInfrastructure = $input['tIngroundInfrastructure'];
    $overview->sewerageTreatmentPlan = $input['sewerageTreatmentPlan'];
    $overview->waterTreatmentPlan = $input['waterTreatmentPlan'];
    $overview->waterStorageUnit = $input['waterStorageUnit'];
    $overview->nFourBeds = $input['nFourBeds'];
    $overview->nThreeBeds = $input['nThreeBeds'];
    $overview->nTwoBeds = $input['nTwoBeds'];
    $overview->nOneBeds = $input['nOneBeds'];
    $overview->n500 = $input['n500'];
    $overview->n250and500 = $input['n250and500'];
    $overview->n125and250 = $input['n125and250'];
    $overview->nbelow125 = $input['nBelow125'];
    $overview->n2500 = $input['n2500'];
    $overview->n1000and2500 = $input['n1000and2500'];
    $overview->n500and1000 = $input['n500and1000'];
    $overview->nBelow500 = $input['nBelow500'];
    $overview->bufferedBuildings = $input['bufferedBuildings'];
    $overview->bufferInfrastructure = $input['bufferInfrastructure'];
    $overview->bufferInground = $input['bufferInground'];
    $overview->tResidentialSites = $input['tResidentialSites'];
    $overview->tMetresRoad = $input['tMetresRoad'];
    $overview->tParklandProposed = $input['tParklandProposed'];
    $overview->lFootpathBike = $input['lFootpathBike'];
    $overview->mLengthParks = $input['mLengthParks'];
    $overview->mLengthShops = $input['mLengthShops'];
    $overview->mLengthSchool = $input['mLengthSchool'];
    $overview->mLengthPublicTransport = $input['mLengthPublicTransport'];
    $overview->publicTransport = $input['publicTransport'];
    $overview->mLenthFacilities = $input['mLenthFacilities'];
    $overview->save(); 
    return View::make('portal.overview', compact('overview', 'id'));
  }
  

  public function show($id)
  {
    $overview = DB::table('overviews')->where('project_id', $id)->first();
    return View::make('portal.overview', compact('overview', 'id'));
  }
}
