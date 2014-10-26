<?php

class OperationController extends \BaseController {

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
		if ((Auth::user()) !== null)
      {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    //return $project->id;
    $waste = DB::table('wastes')->where('project_id', $id)->first();
    $user_var = User::find(Auth::user()->id);
    $user = array('finance' => $user_var->finance);
    $user = array_add($user, 'admin', $user_var->admin);
    $user = array_add($user, 'tech', $user_var->tech);
      
    return View::make('portal.sideBar.operations', compact('waste', 'id', 'user'));
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
    if(is_null(DB::table('wastes')->where('project_id', $id)->first()))
    {
      $waste = new Waste;
      $waste->project_id = ($id);
    }
    else
    {
      $waste = Project::find($id)->waste; 
    }
   
    
    //Saving info from first section of the operation page.
    $waste->O_Tvolume_Units = $input['unitMessuramentTargetO'];
    $waste->O_Tvolume_Paper = $input['paperTargetO'];
    $waste->O_Tvolume_Aluminium = $input['aluminumTargetO'];
    $waste->O_Tvolume_Glass = $input['glassTargetO'];
    $waste->O_Tvolume_Hazardous = $input['hazardousTargetO'];
    $waste->O_Tvolume_NonHazardous = $input['nonhazardousTargetO'];
    $waste->O_Tvolume_Organic = $input['organicTargetO'];
    
    $waste->O_PvolumeForLandfill_Units = $input['unitMessuramentProposedLandO'];
    $waste->O_PvolumeForLandfill_Paper = $input['paperProposedO'];
    $waste->O_PvolumeForLandfill_Aluminium = $input['aluminumProposedO'];
    $waste->O_PvolumeForLandfill_Glass = $input['glassProposedO'];
    $waste->O_PvolumeForLandfill_Hazardous = $input['hazardousProposedO'];
    $waste->O_PvolumeForLandfill_NonHazardous = $input['nonhazardousProposedO'];
    $waste->O_PvolumeForLandfill_Organic = $input['organicProposedO'];
    
    $waste->O_PvolumeForRecycle_Units = $input['unitMessuramentProposedRecycleO'];
    $waste->O_PvolumeForRecycle_Paper = $input['paperProposedRecycleO'];
    $waste->O_PvolumeForRecycle_Aluminium = $input['aluminumProposedRecycleO'];
    $waste->O_PvolumeForRecycle_Glass = $input['glassProposedRecycleO'];
    $waste->O_PvolumeForRecycle_Hazardous = $input['hazardousProposedRecycleO'];
    $waste->O_PvolumeForRecycle_NonHazardous = $input['nonhazardousProposedRecycleO'];
    $waste->O_PvolumeForRecycle_Organic = $input['organicProposedRecycleO'];
    
    $waste->O_ActVolumeForLandfill_Units = $input['unitMessuramentActualLandfillO'];
    $waste->O_ActVolumeForLandfill_Paper = $input['paperActualLandfillO'];
    $waste->O_ActVolumeForLandfill_Aluminium = $input['aluminumActualLandfillO'];
    $waste->O_ActVolumeForLandfill_Glass = $input['glassActualLandfillO'];
    $waste->O_ActVolumeForLandfill_Hazardous = $input['hazardousActualLandfillO'];
    $waste->O_ActVolumeForLandfill_NonHazardous = $input['nonhazardousActualLandfillO'];
    $waste->O_ActVolumeForLandfill_Organic = $input['organicActualLandfillO'];
    
    $waste->O_ActVolumeForRecycle_Units = $input['unitMessuramentActualRecycleO'];
    $waste->O_ActVolumeForRecycle_Paper = $input['paperActualRecycleO'];
    $waste->O_ActVolumeForRecycle_Aluminium = $input['aluminumActualRecycleO'];
    $waste->O_ActVolumeForRecycle_Glass = $input['glassActualRecycleO'];
    $waste->O_ActVolumeForRecycle_Hazardous = $input['hazardousActualRecycleO'];
    $waste->O_ActVolumeForRecycle_NonHazardous = $input['nonhazardousActualRecycleO'];
    $waste->O_ActVolumeForRecycle_Organic = $input['organicActualRecycleO'];
    
    $waste->O_DifVolumeForLandfill_Units = $input['unitMessuramentDifferenceLandfillO'];
    $waste->O_DifVolumeForLandfill_Paper = $input['paperDifferenceLandfillO'];
    $waste->O_DifVolumeForLandfill_Aluminium = $input['aluminumDifferenceLandfillO'];
    $waste->O_DifVolumeForLandfill_Glass = $input['glassDifferenceLandfillO'];
    $waste->O_DifVolumeForLandfill_Hazardous = $input['hazardousDifferenceLandfillO'];
    $waste->O_DifVolumeForLandfill_NonHazardous = $input['nonhazardousDifferenceLandfillO'];
    $waste->O_DifVolumeForLandfill_Organic = $input['organicDifferenceLandfillO'];
    
    $waste->O_DifVolumeForRecycle_Units = $input['unitMessuramentDifferenceO'];
    $waste->O_DifVolumeForRecycle_Paper = $input['paperDifferenceO'];
    $waste->O_DifVolumeForRecycle_Aluminium = $input['aluminumDifferenceO'];
    $waste->O_DifVolumeForRecycle_Glass = $input['glassDifferenceO'];
    $waste->O_DifVolumeForRecycle_Hazardous = $input['hazardousDifferenceO'];
    $waste->O_DifVolumeForRecycle_NonHazardous = $input['nonhazardousDifferenceO'];
    $waste->O_DifVolumeForRecycle_Organic = $input['organicDifferenceO'];
    
    
    //Saving info from second section of the operation page.
    $waste->O_WasteManagementPlan = $input['demolitionPlanR3'];
    $waste->AccessProvCollectVehicles = $input['collectionVehicleAccess'];
    $waste->LandscapeWasteCollect = $input['landscapeCollection'];
    $waste->LandscapeWasteTreated = $input['landscapeWasteTreatment'];
    $waste->CollectionPointHazardousWaste = $input['collectionPoint'];
    $waste->CollectionStorageWasteFacilities = $input['wasteCollectionStorage'];
    $waste->TreatmentWasteFacilities = $input['wasteTreatmentFacilities'];
    
    $waste->WasteEdNonResident = $input['wasteEducationStaff'];
    $waste->NonResidentNonorganicWasteCollectedSep = $input['organicWasteStorage'];
    $waste->NonResidentOrganicWasteCollectedSep = $input['organicWasteCollection'];
    $waste->NonResidentFacilityManager = $input['wasteManager'];
    
    $waste->NonResidentNonorganicRecycleWasteSegManOrMechPlant = $input['wasteSegregationManually'];
    $waste->NonResidentOrganicWasteComposted = $input['wasteComposted'];
    
    $waste->WasteEdResident = $input['wasteEducationResident'];
    $waste->ResidentNonorganicWasteCollectedSep = $input['wasteNonOrganicStorage'];
    $waste->ResidentOrganicWasteCollectedSep = $input['wasteOrganicStorage'];
    
    $waste->ResidentNonorganicRecycleWasteSegManOrMechPlant = $input['wasteSegregationMechanically'];
    $waste->ResidentOrganicWasteComposted = $input['wasteCompostedOnsite'];
    
    //Section for waste comments
    $waste->OpWasteComment = $input['OpWasteComment'];
    $waste->OpLandWasteComment = $input['OpLandWasteComment'];
    
    
    //Total fields for operations table in section one
    $waste->totalTargetO = $input['totalTargetO'];
    $waste->totalProposedLandO = $input['totalProposedLandO'];
    $waste->totalProposedRecycleO = $input['totalProposedRecycleO'];
    $waste->totalActualLandO = $input['totalActualLandO'];
    $waste->totalActualRecycleO = $input['totalActualRecycleO'];
    $waste->totalDifLandO = $input['totalDifLandO'];
    $waste->totalDifRecycleO = $input['totalDifRecycleO'];
    
    //Adding Cost Analysis
    $waste->valueLandfillCurrencyO = $input['valueLandfillCurrencyO'];
    $waste->valueLandfillPaperO = $input['valueLandfillPaperO'];
    $waste->valueLandfillAluminiumO = $input['valueLandfillAluminiumO'];
    $waste->valueLandfillGlassO = $input['valueLandfillGlassO'];
    $waste->valueLandfillHazardousO = $input['valueLandfillHazardousO'];
    $waste->valueLandfillNonHazardousO = $input['valueLandfillNonHazardousO'];
    $waste->valueLandfillOrganicO = $input['valueLandfillOrganicO'];
    $waste->valueLandfillTotalO = $input['valueLandfillTotalO'];
      
    $waste->valueRecycleCurrencyO = $input['valueRecycleCurrencyO'];
    $waste->valueRecyclePaperO = $input['valueRecyclePaperO'];
    $waste->valueRecycleAluminiumO = $input['valueRecycleAluminiumO'];
    $waste->valueRecycleGlassO = $input['valueRecycleGlassO'];
    $waste->valueRecycleHazardousO = $input['valueRecycleHazardousO'];
    $waste->valueRecycleNonHazardousO = $input['valueRecycleNonHazardousO'];
    $waste->valueRecycleOrganicO = $input['valueRecycleOrganicO'];
    $waste->valueRecycleTotalO = $input['valueRecycleTotalO'];
      
    $waste->actualLandfillCurrencyO = $input['actualLandfillCurrencyO'];
    $waste->actualLandfillPaperO = $input['actualLandfillPaperO'];
    $waste->actualLandfillAluminiumO = $input['actualLandfillAluminiumO'];
    $waste->actualLandfillGlassO = $input['actualLandfillGlassO'];
    $waste->actualLandfillHazardousO = $input['actualLandfillHazardousO'];
    $waste->actualLandfillNonHazardousO = $input['actualLandfillNonHazardousO'];
    $waste->actualLandfillOrganicO = $input['actualLandfillOrganicO'];
    $waste->actualLandfillTotalO = $input['actualLandfillTotalO'];
    
    $waste->actualRecycleCurrencyO = $input['actualRecycleCurrencyO'];
    $waste->actualRecyclePaperO = $input['actualRecyclePaperO'];
    $waste->actualRecycleAluminiumO = $input['actualRecycleAluminiumO'];
    $waste->actualRecycleGlassO = $input['actualRecycleGlassO'];
    $waste->actualRecycleHazardousO = $input['actualRecycleHazardousO'];
    $waste->actualRecycleNonHazardousO = $input['actualRecycleNonHazardousO'];
    $waste->actualRecycleOrganicO = $input['actualRecycleOrganicO'];
    $waste->actualRecycleTotalO = $input['actualRecycleTotalO'];
    
    $waste->totalValuePropCurrencyO = $input['totalValuePropCurrencyO'];
    $waste->totalValuePropPaperO = $input['totalValuePropPaperO'];
    $waste->totalValuePropAluminiumO = $input['totalValuePropAluminiumO'];
    $waste->totalValuePropGlassO = $input['totalValuePropGlassO'];
    $waste->totalValuePropHazardousO = $input['totalValuePropHazardousO'];
    $waste->totalValuePropNonHazardousO = $input['totalValuePropNonHazardousO'];
    $waste->totalValuePropOrganicO = $input['totalValuePropOrganicO'];
    $waste->totalValuePropTotalO = $input['totalValuePropTotalO'];
    
    $waste->totalValueActCurrencyO = $input['totalValueActCurrencyO'];
    $waste->totalValueActPaperO = $input['totalValueActPaperO'];
    $waste->totalValueActAluminiumO = $input['totalValueActAluminiumO'];
    $waste->totalValueActGlassO = $input['totalValueActGlassO'];
    $waste->totalValueActHazardousO = $input['totalValueActHazardousO'];
    $waste->totalValueActNonHazardousO = $input['totalValueActNonHazardousO'];
    $waste->totalValueActOrganicO = $input['totalValueActOrganicO'];
    $waste->totalValueActTotalO = $input['totalValueActTotalO'];
    
    
    $waste->save(); 
    
    $user_var = User::find(Auth::user()->id);
    $user = array('finance' => $user_var->finance);
    $user = array_add($user, 'admin', $user_var->admin);
    $user = array_add($user, 'tech', $user_var->tech);
    
    return View::make('portal.sideBar.operations', compact('waste', 'id', 'user'));
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
