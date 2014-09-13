<?php

class OverviewController extends \BaseController {

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
  public function index()
  {
    return View::make('portal.projectOverview');
  }
  /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
  public function storeFirst()
  {
    $input = Input::all();
    $firstProjectOverview = new FirstProjectOverview;
    $firstProjectOverview->project_id; //find out;
    $firstProjectOverview->projectName = $input['projectName'];
    $firstProjectOverview->startDate = $input['startDate'];
    $firstProjectOverview->approvalCost = $input['approvalCost'];
    $firstProjectOverview->projectManager = $input['projectManager'];
    $firstProjectOverview->contactNumber = $input['contactNumber'];
    $firstProjectOverview->projectTeam = $input['projetTeam'];
    $firstProjectOverview->stateGovernment = $input['stateGovernment'];
    $firstProjectOverview->propertyName = $input['propertyName'];
    $firstProjectOverview->landTenureDrop = $input['landTenureDrop'];
    $firstProjectOverview->landTenureText = $input['landTenureText'];
    $firstProjectOverview->landownerName = $input['landownerName'];
    $firstProjectOverview->regulatoryAuthority = $input['regulatoryAuthority'];
    $firstProjectOverview->landownerDetails = $input['landownerDetails'];
    $firstProjectOverview->localGovernment = $input['localGovernment'];
    $firstProjectOverview->docsReference = $input['docsReference'];
    $firstProjectOverview->areaLot = $input['areaLot'];
    $firstProjectOverview->gpsCoordinates = $input['gpsCoordinates'];
    $firstProjectOverview->lotPlan1 = $input['lotPlan1'];
    $firstProjectOverview->lotPlan2 = $input['lotPlan2'];
    $firstProjectOverview->save(); 
  }
  
  public function storeSecond()
  {
    $input = Input::all();
    $secondProjectOverview = new SecondProjectOverview;
    $secondProjectOverview->project_id; //find out;
    $secondProjectOverview->developerName = $input['developerName'];
    $secondProjectOverview->urbanPlannerName = $input['urbanPlannerName'];
    $secondProjectOverview->architectName = $input['architectName'];
    $secondProjectOverview->accountantName = $input['accountantName'];
    $secondProjectOverview->legalTeam = $input['legalTeam'];
    $secondProjectOverview->civilEngineer = $input['civilEngineer'];
    $secondProjectOverview->structuralContructionEngineer = $input['structuralContructionEngineer'];
    $secondProjectOverview->ecologistName = $input['ecologistName'];
    $secondProjectOverview->landscapeArchitect = $input['landscapeArchitect'];
    $secondProjectOverview->trafficEngineer = $input['trafficEngineer'];
    $secondProjectOverview->surveyor = $input['surveyor'];
    $secondProjectOverview->geotechnicalSpecialist = $input['geotechnicalSpecialist'];
    $secondProjectOverview->relationsAdvisor = $input['relationsAdvisor'];
    $secondProjectOverview->acousticEngineer = $input['acousticEngineer'];
    $secondProjectOverview->hydrologyEngineer = $input['hydrologyEngineer'];
    $secondProjectOverview->airQualitySpecialist = $input['airQualitySpecialist'];
    $secondProjectOverview->save(); 
  }
  
  public function storeThird()
  {
    $input = Input::all();
    $thirdProjectOverview = new ThirdProjectOverview;
    $thirdProjectOverview->project_id; //find out;
    $thirdProjectOverview->singleSite = $input['singleSite'];
    $thirdProjectOverview->subDivisionSite = $input['subDivisionSite'];
    $thirdProjectOverview->residential = $input['residential'];
    $thirdProjectOverview->commercial = $input['commercial'];
    $thirdProjectOverview->industrial = $input['industrial'];
    $thirdProjectOverview->infrastucture = $input['infrastucture'];
    $thirdProjectOverview->tSiteArea = $input['tSiteAread'];
    $thirdProjectOverview->numberBuildings = $input['numberBuildings'];
    $thirdProjectOverview->tBuildingGFA = $input['tBuildingGFA'];
    $thirdProjectOverview->tBuildingSite = $input['tBuildingSite'];
    $thirdProjectOverview->tBuildingHeight = $input['tBuildingHeight'];
    $thirdProjectOverview->tLandscapeSite = $input['tLandscapeSite'];
    $thirdProjectOverview->tHardstandSite = $input['tHardstandSite'];
    $thirdProjectOverview->tIngroundInfrastucture = $input['tIngroundInfrastucture'];
    $thirdProjectOverview->sewerageTreatmentPlan = $input['sewerageTreatmentPlan'];
    $thirdProjectOverview->waterTreatmentPlant = $input['waterTreatmentPlant'];
    $thirdProjectOverview->waterStorageUnit = $input['waterStorageUnit'];
    $thirdProjectOverview->buildingResidentialFormat = $input['buildingResidentialFormat'];
    $thirdProjectOverview->nFourBeds = $input['nFourBeds'];
    $thirdProjectOverview->nThreeBeds = $input['nThreeBeds'];
    $thirdProjectOverview->nTwoBeds = $input['nTwoBeds'];
    $thirdProjectOverview->nOneBeds = $input['nOneBeds'];
    $thirdProjectOverview->n500 = $input['n500'];
    $thirdProjectOverview->n250and500 = $input['n250and500'];
    $thirdProjectOverview->n125and250 = $input['n125and250'];
    $thirdProjectOverview->n125 = $input['n125'];
    $thirdProjectOverview->n2500 = $input['n2500'];
    $thirdProjectOverview->n1000and2500 = $input['n1000and2500'];
    $thirdProjectOverview->n500and1000 = $input['n500and1000'];
    $thirdProjectOverview->n500 = $input['n500'];
    $thirdProjectOverview->bufferBuildings = $input['bufferBuildings'];
    $thirdProjectOverview->bufferInfrastructure = $input['bufferInfrastructure'];
    $thirdProjectOverview->bufferInground = $input['bufferInground'];
    $thirdProjectOverview->tResidentialSites = $input['tResidentialSites'];
    $thirdProjectOverview->tMetresRoad = $input['tMetresRoad'];
    $thirdProjectOverview->tParklandProposed = $input['tParklandProposed'];
    $thirdProjectOverview->lFootpathBike = $input['lFootpathBike'];
    $thirdProjectOverview->mLengthParks = $input['mLengthParks'];
    $thirdProjectOverview->mLengthShops = $input['mLengthShops'];
    $thirdProjectOverview->mLengthSchool = $input['mLengthSchool'];
    $thirdProjectOverview->mLengthPublicTransport = $input['mLengthPublicTransport'];
    $thirdProjectOverview->publicTransport = $input['publicTransport'];
    $thirdProjectOverview->mLengthFacilities = $input['mLengthFacilities'];
    $thirdProjectOverview->save(); 
  }
}
