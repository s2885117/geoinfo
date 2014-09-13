<?php

class SiteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('portal.siteConditions');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeFirst()
	{
		$input = Input::all();
    $firstSiteCondition = new FirstSiteConditions;
    $firstSiteCondition->project_id;
    $firstSiteCondition->commmunityBuidlng = $input['commmunityBuidlng'];
    $firstSiteCondition->communityInfrastructure = $input['communityInfrastructure'];
    $firstSiteCondition->floorArea = $input['floorArea'];
    $firstSiteCondition->floorAreaUnit = $input['floorAreaUnit'];
    $firstSiteCondition->infrastuctureArea = $input['infrastuctureArea'];
    $firstSiteCondition->infrastuctureAreaUnit = $input['infrastuctureAreaUnit'];
    $firstSiteCondition->save(); 
	}
  
  public function storeSecond()
	{
		$input = Input::all();
    $secondSiteCondition = new SecondSiteConditions;
    $secondSiteCondition->project_id;
    $secondSiteCondition->northSite = $input['northSite'];
    $secondSiteCondition->southSite = $input['southSite'];
    $secondSiteCondition->eastSite = $input['eastSite'];
    $secondSiteCondition->westSite = $input['westSite'];
    $secondSiteCondition->nearestResident = $input['nearestResident'];
    $secondSiteCondition->nearestCommercial = $input['nearestCommercial'];
    $secondSiteCondition->nearestIndustrial = $input['nearestIndustrial'];
    $secondSiteCondition->waterways = $input['waterways'];
    $secondSiteCondition->vegitation = $input['vegitation'];
    $secondSiteCondition->fauna = $input['fauna'];
    $secondSiteCondition->acidSulfateSoils = $input['acidSulfateSoils'];
    $secondSiteCondition->qualityAgricultureLand = $input['qualityAgricultureLand'];
    $secondSiteCondition->lands = $input['lands'];
    $secondSiteCondition->contaminatedLands = $input['contaminatedLands'];
    $secondSiteCondition->save(); 
	}
  
  public function storethird()
	{
		$input = Input::all();
    $thirdSiteCondition = new ThirdSiteConditions;
    $thirdSiteCondition->project_id;
    $thirdSiteCondition->periodEpoch1 = $input['periodEpoch1'];
    $thirdSiteCondition->periodEpoch2 = $input['periodEpoch2'];
    $thirdSiteCondition->periodEpoch3 = $input['periodEpoch3'];
    $thirdSiteCondition->geologicalSymbol1 = $input['geologicalSymbol1'];
    $thirdSiteCondition->geologicalSymbol2 = $input['geologicalSymbol2'];
    $thirdSiteCondition->geologicalSymbol3 = $input['geologicalSymbol3'];
    $thirdSiteCondition->lithologicalDescription1 = $input['lithologicalDescription1'];
    $thirdSiteCondition->lithologicalDescription2 = $input['lithologicalDescription2'];
    $thirdSiteCondition->lithologicalDescription3 = $input['lithologicalDescription3'];
    $thirdSiteCondition->save(); 
	}
  
  public function storeFourth()
	{
		$input = Input::all();
    $fourthSiteCondition = new FourthSiteConditions;
    $fourthSiteCondition->project_id;
    $fourthSiteCondition->soilSampleDepth1 = $input['soilSampleDepth1'];
    $fourthSiteCondition->soilSampleDepth2 = $input['soilSampleDepth2'];
    $fourthSiteCondition->soilSampleDepth3 = $input['soilSampleDepth3'];
    $fourthSiteCondition->soilClassification1 = $input['soilClassification1'];
    $fourthSiteCondition->soilClassification2 = $input['soilClassification2'];
    $fourthSiteCondition->soilClassification3 = $input['soilClassification'];
    $fourthSiteCondition->description1 = $input['description1'];
    $fourthSiteCondition->description2 = $input['description2'];
    $fourthSiteCondition->description3 = $input['description3'];
    $fourthSiteCondition->save(); 
	}



}
