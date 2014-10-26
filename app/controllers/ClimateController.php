<?php

class ClimateController extends \BaseController {

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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		//
    if ((Auth::user()) !== null)
      {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    $climate = DB::table('climates')->where('project_id', $id)->first();
    return View::make('portal.sideBar.climate', compact('climate','id'));
    }
    else return Redirect::to('index');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		//
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
		$input = Input::all();
    if(is_null(DB::table('climates')->where('project_id', $id)->first()))
    {
      $climate = new Climate;
      $climate->project_id = ($id);
    }
    else
    {
      $climate = Project::find($id)->climate; 
    }
    
    //Saving description section
    $climate->ClimateComment = $input['ClimateComment'];
    
    //Saving info from first section of the climate page.
    $climate->coolingStratTarget = $input['coolingStratTarget'];
    $climate->coolingStratProposed = $input['coolingStratProposed'];
    $climate->coolingStratActual = $input['coolingStratActual'];
    $climate->coolingStratGap = $input['coolingStratGap'];
    
    $climate->heatingStratTarget = $input['heatingStratTarget'];
    $climate->heatingStratProposed = $input['heatingStratProposed'];
    $climate->heatingStratActual = $input['heatingStratActual'];
    $climate->heatingStratGap = $input['heatingStratGap'];
    
    $climate->comHardscapeHeatTarget = $input['comHardscapeHeatTarget'];
    $climate->comHardscapeHeatProposed = $input['comHardscapeHeatProposed'];
    $climate->comHardscapeHeatActual = $input['comHardscapeHeatActual'];
    $climate->comHardscapeHeatGap = $input['comHardscapeHeatGap'];
    
    $climate->annualWeatherConReq = $input['annualWeatherConReq'];
    $climate->annualWeatherConDoc = $input['annualWeatherConDoc'];
    $climate->annualWeatherConParty = $input['annualWeatherConParty'];
    
    $climate->siteMapAnnualWeatherConReq = $input['siteMapAnnualWeatherConReq'];
    $climate->siteMapAnnualWeatherConDoc = $input['siteMapAnnualWeatherConDoc'];
    $climate->siteMapAnnualWeatherConParty = $input['siteMapAnnualWeatherConParty'];
    
    $climate->ConSolarWindAnalysisReq = $input['ConSolarWindAnalysisReq'];
    $climate->ConSolarWindAnalysisDoc = $input['ConSolarWindAnalysisDoc'];
    $climate->ConSolarWindAnalysisParty = $input['ConSolarWindAnalysisParty'];
    
    $climate->sitePlanAdoptStratReq = $input['sitePlanAdoptStratReq'];
    $climate->sitePlanAdoptStratDoc = $input['sitePlanAdoptStratDoc'];
    $climate->sitePlanAdoptStratParty = $input['sitePlanAdoptStratParty'];

    $climate->conShadowEffectReq = $input['conShadowEffectReq'];
    $climate->conShadowEffectDoc = $input['conShadowEffectDoc'];
    $climate->conShadowEffectParty = $input['conShadowEffectParty'];
    
    
    $climate->advSolarWindAnalysisReq = $input['advSolarWindAnalysisReq'];
    $climate->advSolarWindAnalysisDoc = $input['advSolarWindAnalysisDoc'];
    $climate->advSolarWindAnalysisParty = $input['advSolarWindAnalysisParty'];
    
    $climate->advSolarWindOutReq = $input['advSolarWindOutReq'];
    $climate->advSolarWindOutDoc = $input['advSolarWindOutDoc'];
    $climate->advSolarWindOutParty = $input['advSolarWindOutParty'];
    
    $climate->sitePlanHeatCoolStratReq = $input['sitePlanHeatCoolStratReq'];
    $climate->sitePlanHeatCoolStratDoc = $input['sitePlanHeatCoolStratDoc'];
    $climate->sitePlanHeatCoolStratParty = $input['sitePlanHeatCoolStratParty'];
    
    $climate->streetUrbanHeatReq = $input['streetUrbanHeatReq'];
    $climate->streetUrbanHeatDoc = $input['streetUrbanHeatDoc'];
    $climate->streetUrbanHeatParty = $input['streetUrbanHeatParty'];
    
    $climate->PropDevGreenGuideReq = $input['PropDevGreenGuideReq'];
    $climate->PropDevGreenGuideDoc = $input['PropDevGreenGuideDoc'];
    $climate->PropDevGreenGuideParty = $input['PropDevGreenGuideParty'];

    $climate->GovPlanDefGuideReq = $input['GovPlanDefGuideReq'];
    $climate->GovPlanDefGuideDoc = $input['GovPlanDefGuideDoc'];
    $climate->GovPlanDefGuideParty = $input['GovPlanDefGuideParty'];
    
    $climate->GovPlanDefInfraReq = $input['GovPlanDefInfraReq'];
    $climate->GovPlanDefInfraDoc = $input['GovPlanDefInfraDoc'];
    $climate->GovPlanDefInfraParty = $input['GovPlanDefInfraParty'];
    
    $climate->IncEnergyWasteEffReq = $input['IncEnergyWasteEffReq'];
    $climate->IncEnergyWasteEffDoc = $input['IncEnergyWasteEffDoc'];
    $climate->IncEnergyWasteEffParty = $input['IncEnergyWasteEffParty'];
   
    $climate->MonDevIncAssistReq = $input['MonDevIncAssistReq'];
    $climate->MonDevIncAssistDoc = $input['MonDevIncAssistDoc'];
    $climate->MonDevIncAssistParty = $input['MonDevIncAssistParty'];
  
    $climate->PropDevguideIncReq = $input['PropDevguideIncReq'];
    $climate->PropDevguideIncDoc = $input['PropDevguideIncDoc'];
    $climate->PropDevguideIncParty = $input['PropDevguideIncParty'];
  
    $climate->MonIncValueDevCurrency = $input['MonIncValueDevCurrency'];
    $climate->MonIncValueDev = $input['MonIncValueDev'];

    $climate->OtherDevIncApp = $input['OtherDevIncApp'];
    
    $climate->DocRateAdoptStratReq = $input['DocRateAdoptStratReq'];
    $climate->DocRateAdoptStratDoc = $input['DocRateAdoptStratDoc'];
    $climate->DocRateAdoptStratParty = $input['DocRateAdoptStratParty'];
    
    $climate->PhotoEvParkReq = $input['PhotoEvParkReq'];
    $climate->PhotoEvParkDoc = $input['PhotoEvParkDoc'];
    $climate->PhotoEvParkParty = $input['PhotoEvParkParty'];
    
    $climate->RevDocSitePlanStratReq = $input['RevDocSitePlanStratReq'];
    $climate->RevDocSitePlanStratDoc = $input['RevDocSitePlanStratDoc'];
    $climate->RevDocSitePlanStratParty = $input['RevDocSitePlanStratParty'];
 
    $climate->PhotoEvAltCoolStratReq = $input['PhotoEvAltCoolStratReq'];
    $climate->PhotoEvAltCoolStratDoc = $input['PhotoEvAltCoolStratDoc'];
    $climate->PhotoEvAltCoolStratParty = $input['PhotoEvAltCoolStratParty'];

    $climate->DrawHardSurfHashReq = $input['DrawHardSurfHashReq'];
    $climate->DrawHardSurfHashDoc = $input['DrawHardSurfHashDoc'];
    $climate->DrawHardSurfHashParty = $input['DrawHardSurfHashParty'];
   
    $climate->StreetSectUrbanHeadRedReq = $input['StreetSectUrbanHeadRedReq'];
    $climate->StreetSectUrbanHeadRedDoc = $input['StreetSectUrbanHeadRedDoc'];
    $climate->StreetSectUrbanHeadRedParty = $input['StreetSectUrbanHeadRedParty'];
    
    $climate->CalcComEnStratAnConsReq = $input['CalcComEnStratAnConsReq'];
    $climate->CalcComEnStratAnConsDoc = $input['CalcComEnStratAnConsDoc'];
    $climate->CalcComEnStratAnConsParty = $input['CalcComEnStratAnConsParty'];
  
    $climate->BuildGuideLegRequireReq = $input['BuildGuideLegRequireReq'];
    $climate->BuildGuideLegRequireDoc = $input['BuildGuideLegRequireDoc'];
    $climate->BuildGuideLegRequireParty = $input['BuildGuideLegRequireParty'];
  
    $climate->DemMechComGuideReq = $input['DemMechComGuideReq'];
    $climate->DemMechComGuideDoc = $input['DemMechComGuideDoc'];
    $climate->DemMechComGuideParty = $input['DemMechComGuideParty'];
  
    $climate->EnOutOpTarRedReq = $input['EnOutOpTarRedReq'];
    $climate->EnOutOpTarRedDoc = $input['EnOutOpTarRedDoc'];
    $climate->EnOutOpTarRedParty = $input['EnOutOpTarRedParty'];
  
    $climate->PropDevNatDesGuideGreenReq = $input['PropDevNatDesGuideGreenReq'];
    $climate->PropDevNatDesGuideGreenDoc = $input['PropDevNatDesGuideGreenDoc'];
    $climate->PropDevNatDesGuideGreenParty = $input['PropDevNatDesGuideGreenParty'];

    $climate->GovPlanSysDesGuideReq = $input['GovPlanSysDesGuideReq'];
    $climate->GovPlanSysDesGuideDoc = $input['GovPlanSysDesGuideDoc'];
    $climate->GovPlanSysDesGuideParty = $input['GovPlanSysDesGuideParty'];
 
    $climate->GovPlanSysInfraCharIncReq = $input['GovPlanSysInfraCharIncReq'];
    $climate->GovPlanSysInfraCharIncDoc = $input['GovPlanSysInfraCharIncDoc'];
    $climate->GovPlanSysInfraCharIncParty = $input['GovPlanSysInfraCharIncParty'];
  
    $climate->TotValIncDevAgreeCurrency = $input['TotValIncDevAgreeCurrency'];
    $climate->TotValIncDevAgreeValue = $input['TotValIncDevAgreeValue'];
   
    $climate->MonIncImpDevReg = $input['MonIncImpDevReg'];
    
    $climate->OtherIncImpDevReg = $input['OtherIncImpDevReg'];
    
    $climate->save(); 
    
    return View::make('portal.sideBar.climate', compact('climate', 'id'));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
