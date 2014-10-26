<?php

class SiteController extends \BaseController {

	public function index() {}

  //Stores the input from the user, if no row exsists with project_id create a new one, if it does retrieve that row and store values into that row
  public function update()
  {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    $input = Input::all();
    if(is_null(DB::table('site_conditions')->where('project_id', $id)->first()))
    {
      $siteCondition = new SiteCondition;
      $siteCondition->project_id = $id;
    }
    else
    {
      $siteCondition = Project::find($id)->siteCondition;
    }
    $siteCondition->communityBuilding = $input['communityBuilding'];
    $siteCondition->communityInfrastructure = $input['communityInfrastructure'];
    $siteCondition->floorArea = $input['floorArea'];
    $siteCondition->floorAreaUnit = $input['floorAreaUnit'];
    $siteCondition->infrastructureArea = $input['infrastructureArea'];
    $siteCondition->infrastructureAreaUnit = $input['infrastructureAreaUnit'];
    $siteCondition->northSite = $input['northSite'];
    $siteCondition->southSite = $input['southSite'];
    $siteCondition->eastSite = $input['eastSite'];
    $siteCondition->westSite = $input['westSite'];
    $siteCondition->nearestResident = $input['nearestResident'];
    $siteCondition->nearestCommercial = $input['nearestCommercial'];
    $siteCondition->nearestIndustrial = $input['nearestIndustrial'];
    $siteCondition->waterways = $input['waterways'];
    $siteCondition->drainage = $input['drainage'];
    $siteCondition->vegetation = $input['vegetation'];
    $siteCondition->fauna = $input['fauna'];
    $siteCondition->acidSulfateSoils = $input['acidSulfateSoils'];
    $siteCondition->qualityAgricultureLand = $input['qualityAgricultureLand'];
    $siteCondition->lands = $input['lands'];
    $siteCondition->contaminatedLands = $input['contaminatedLands'];
    $siteCondition->periodEpoch1 = $input['periodEpoch1'];
    $siteCondition->periodEpoch2 = $input['periodEpoch2'];
    $siteCondition->periodEpoch3 = $input['periodEpoch3'];
    $siteCondition->geologicalSymbol1 = $input['geologicalSymbol1'];
    $siteCondition->geologicalSymbol2 = $input['geologicalSymbol2'];
    $siteCondition->geologicalSymbol3 = $input['geologicalSymbol3'];
    $siteCondition->lithologicalDescription1 = $input['lithologicalDescription1'];
    $siteCondition->lithologicalDescription2 = $input['lithologicalDescription2'];
    $siteCondition->lithologicalDescription3 = $input['lithologicalDescription3'];
    $siteCondition->soilSampleDepth1 = $input['soilSampleDepth1'];
    $siteCondition->soilSampleDepth2 = $input['soilSampleDepth2'];
    $siteCondition->soilSampleDepth3 = $input['soilSampleDepth3'];
    $siteCondition->soilClassification1 = $input['soilClassification1'];
    $siteCondition->soilClassification2 = $input['soilClassification2'];
    $siteCondition->soilClassification3 = $input['soilClassification3'];
    $siteCondition->description1 = $input['description1'];
    $siteCondition->description2 = $input['description2'];
    $siteCondition->description3 = $input['description3'];
    
    $siteCondition->nearestSchool = $input['nearestSchool'];
    $siteCondition->nearestHospital = $input['nearestHospital'];
    $siteCondition->nearestCommunity = $input['nearestCommunity'];
    $siteCondition->nearestParkland = $input['nearestParkland'];
    
    //Added comment areas in each section.
    $siteCondition->BuildInfraDemComment = $input['BuildInfraDemComment'];
    $siteCondition->NeighLandUseComment = $input['NeighLandUseComment'];
    $siteCondition->GeoCharComment = $input['GeoCharComment'];
    $siteCondition->SoilCharComment = $input['SoilCharComment'];
    $siteCondition->NatEnvCharComment = $input['NatEnvCharComment'];
   
    $siteCondition->save(); 
    return View::make('portal.siteConditions', compact('siteCondition', 'id'));
  }
  
  public function show()
  {
    if ((Auth::user()) !== null)
      {
    $project = Project::find(Auth::user()->project_id);
      $id = $project->id;
    $siteCondition = DB::table('site_conditions')->where('project_id', $id)->first();
    return View::make('portal.siteConditions', compact('siteCondition', 'id'));
    }
    else return Redirect::to('index');
  }



}
