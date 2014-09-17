<?php

class SiteController extends \BaseController {

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
    if(is_null(DB::table('siteConditions')->where('project_id', $id)->first()))
    {
      $siteCondition = new SiteCondition;
      $siteCondition->project_id = ($id);
    }
    else
      $siteCondition = DB::table('siteConditions')->where('project_id', $id)->first();
    $siteCondition->commmunityBuidlng = $input['commmunityBuidlng'];
    $siteCondition->communityInfrastructure = $input['communityInfrastructure'];
    $siteCondition->floorArea = $input['floorArea'];
    $siteCondition->floorAreaUnit = $input['floorAreaUnit'];
    $siteCondition->infrastuctureArea = $input['infrastuctureArea'];
    $siteCondition->infrastuctureAreaUnit = $input['infrastuctureAreaUnit'];
    $siteCondition->northSite = $input['northSite'];
    $siteCondition->southSite = $input['southSite'];
    $siteCondition->eastSite = $input['eastSite'];
    $siteCondition->westSite = $input['westSite'];
    $siteCondition->nearestResident = $input['nearestResident'];
    $siteCondition->nearestCommercial = $input['nearestCommercial'];
    $siteCondition->nearestIndustrial = $input['nearestIndustrial'];
    $siteCondition->waterways = $input['waterways'];
    $siteCondition->vegitation = $input['vegitation'];
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
    $siteCondition->soilClassification3 = $input['soilClassification'];
    $siteCondition->description1 = $input['description1'];
    $siteCondition->description2 = $input['description2'];
    $siteCondition->description3 = $input['description3'];
    $siteCondition->save(); 
    
    return View::make('portal.siteCondition', compact('siteCondition', 'id'));
  }
  
  public function show($id)
  {
    $siteCondition = DB::table('siteConditions')->where('project_id', $id)->first();
    return View::make('portal.siteConditions', compact('siteCondition', 'id'));
  }



}
