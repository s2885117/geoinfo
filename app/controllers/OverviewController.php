<?php

class OverviewController extends \BaseController {

  public function index() {}

  //Stores the input from the user, if no row exsists with project_id create a new one, if it does retrieve that row and store values into that row
  public function update()
  {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    $input = Input::all();
    if(is_null(DB::table('overviews')->where('project_id', $id)->first()))
    {
      $overview = new Overview;
      $overview->project_id = ($id);
    }
    else
    {
      $overview = Project::find($id)->overview;
    }
    
    $overview->ProjDescComment = $input['ProjDescComment'];
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
    
    //Added comment areas in each section.
    $overview->BuildResFormComment = $input['BuildResFormComment'];
    $overview->BuildComFormComment = $input['BuildComFormComment'];
    $overview->BuildIndFormComment = $input['BuildIndFormComment'];
    $overview->DevFormComment = $input['DevFormComment'];
    
    $overview->BuildResTotalUnit = $input['BuildResTotalUnit'];
    $overview->BuildComTotalUnit = $input['BuildComTotalUnit'];
    $overview->BuildIndTotalUnit = $input['BuildIndTotalUnit'];
    
    $overview->residentialGrossUnit = $input['residentialGrossUnit'];
    $overview->residentialOGrossArea = $input['residentialOGrossArea'];
    $overview->residentialNetUnit = $input['residentialNetUnit'];
    $overview->residentialSiteCover = $input['residentialSiteCover'];
    
    $overview->officeGrossUnit = $input['officeGrossUnit'];
    $overview->officeOGrossArea = $input['officeOGrossArea'];
    $overview->officeNetUnit = $input['officeNetUnit'];
    $overview->officeSiteCover = $input['officeSiteCover'];
    
    $overview->retailGrossUnit = $input['retailGrossUnit'];
    $overview->retailGrossArea = $input['retailGrossArea'];
    $overview->retailNetUnit = $input['retailNetUnit'];
    $overview->retailSite = $input['retailSite'];
    
    $overview->schoolGrossUnit = $input['schoolGrossUnit'];
    $overview->schoolGrossArea = $input['schoolGrossArea'];
    $overview->schoolNetUnit = $input['schoolNetUnit'];
    $overview->schoolSite = $input['schoolSite'];

    $overview->hospitalGrossUnit = $input['hospitalGrossUnit'];
    $overview->hospitalGrossArea = $input['hospitalGrossArea'];
    $overview->hospitalNetUnit = $input['hospitalNetUnit'];
    $overview->hospitalSite = $input['hospitalSite']; 
    
    $overview->communityGrossUnit = $input['communityGrossUnit'];
    $overview->communityGrossArea = $input['communityGrossArea'];
    $overview->communityNetUnit = $input['communityNetUnit'];
    $overview->communitySite = $input['communitySite']; 
    
    $overview->otherGrossUnit = $input['otherGrossUnit'];
    $overview->otherGrossArea = $input['otherGrossArea'];
    $overview->otherNetUnit = $input['otherNetUnit'];
    $overview->otherSite = $input['otherSite']; 
    
    $overview->nResCarPark = $input['nResCarPark'];
    $overview->nComCarPark = $input['nComCarPark'];
    $overview->nIndCarPark = $input['nIndCarPark'];
    $overview->nInfraCarPark = $input['nInfraCarPark'];

     
    $overview->save(); 
    return View::make('portal.overview', compact('overview', 'id'));
  }

  public function show()
  {
    if ((Auth::user()) !== null)
      {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    $overview = DB::table('overviews')->where('project_id', $id)->first();
    return View::make('portal.overview', compact('overview', 'id'));
    }
    else return Redirect::to('index');
  }
}
