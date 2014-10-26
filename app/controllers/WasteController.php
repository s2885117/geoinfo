<?php

class WasteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {}

	public function update()
	{
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
    
    //Saving info from first section of the waste page.
    $waste->D_Tvolume_Units = $input['unitMessuramentTargetD'];
    $waste->D_Tvolume_Concrete = $input['concreteTargetD'];
    $waste->D_Tvolume_Steel = $input['steelTargetD'];
    $waste->D_Tvolume_Aluminium = $input['aluminiumTargetD'];
    $waste->D_Tvolume_Copper = $input['copperTargetD'];
    $waste->D_Tvolume_Timber = $input['timberTargetD'];
    $waste->D_Tvolume_Glass = $input['glassTargetD'];
    $waste->D_Tvolume_Hazardous = $input['hazardousTargetD'];
    $waste->D_Tvolume_NonHazardous = $input['nonHazardousTargetD'];
    $waste->D_Tvolume_Organic = $input['organicTargetD'];
    $waste->D_Tvolume_Conduit = $input['conduitTargetD'];
    
    $waste->D_PvolumeForLandfill_Units = $input['unitMessuramentProposedLandD'];
    $waste->D_PvolumeForLandfill_Concrete = $input['concreteProposedLandD'];
    $waste->D_PvolumeForLandfill_Steel = $input['steelProposedLandD'];
    $waste->D_PvolumeForLandfill_Aluminium = $input['aluminiumProposedLandD'];
    $waste->D_PvolumeForLandfill_Copper = $input['copperProposedLandD'];
    $waste->D_PvolumeForLandfill_Timber = $input['timberProposedLandD'];
    $waste->D_PvolumeForLandfill_Glass = $input['glassProposedLandD'];
    $waste->D_PvolumeForLandfill_Hazardous = $input['hazardousProposedLandD'];
    $waste->D_PvolumeForLandfill_NonHazardous = $input['nonHazardousProposedLandD'];
    $waste->D_PvolumeForLandfill_Organic = $input['organicProposedLandD'];
    $waste->D_PvolumeForLandfill_Conduit = $input['conduitProposedLandD'];
    
    $waste->D_PvolumeForRecycle_Units = $input['unitMessuramentProposedRecycleD'];
    $waste->D_PvolumeForRecycle_Concrete = $input['concreteProposedRecycleD'];
    $waste->D_PvolumeForRecycle_Steel = $input['steelProposedRecycleD'];
    $waste->D_PvolumeForRecycle_Aluminium = $input['aluminiumProposedRecycleD'];
    $waste->D_PvolumeForRecycle_Copper = $input['copperProposedRecycleD'];
    $waste->D_PvolumeForRecycle_Timber = $input['timberProposedRecycleD'];
    $waste->D_PvolumeForRecycle_Glass = $input['glassProposedRecycleD'];
    $waste->D_PvolumeForRecycle_Hazardous = $input['hazardousProposedRecycleD'];
    $waste->D_PvolumeForRecycle_NonHazardous = $input['nonHazardousProposedRecycleD'];
    $waste->D_PvolumeForRecycle_Organic = $input['organicProposedRecycleD'];
    $waste->D_PvolumeForRecycle_Conduit = $input['conduitProposedRecycleD'];
    
    $waste->D_ActVolumeForLandfill_Units = $input['unitMessuramentActualLandfillD'];
    $waste->D_ActVolumeForLandfill_Concrete = $input['concreteActualLandfillD'];
    $waste->D_ActVolumeForLandfill_Steel = $input['steelActualLandfillD'];
    $waste->D_ActVolumeForLandfill_Aluminium = $input['aluminiumActualLandfillD'];
    $waste->D_ActVolumeForLandfill_Copper = $input['copperActualLandfillD'];
    $waste->D_ActVolumeForLandfill_Timber = $input['timberActualLandfillD'];
    $waste->D_ActVolumeForLandfill_Glass = $input['glassActualLandfillD'];
    $waste->D_ActVolumeForLandfill_Hazardous = $input['hazardousActualLandfillD'];
    $waste->D_ActVolumeForLandfill_NonHazardous = $input['nonHazardouActualLandfillD'];
    $waste->D_ActVolumeForLandfill_Organic = $input['organicActualLandfillD'];
    $waste->D_ActVolumeForLandfill_Conduit = $input['conduitActualLandfillD'];
    
    $waste->D_ActVolumeForRecycle_Units = $input['unitMessuramentActualRecycleD'];
    $waste->D_ActVolumeForRecycle_Concrete = $input['concreteActualRecycleD'];
    $waste->D_ActVolumeForRecycle_Steel = $input['steelActualRecycleD'];
    $waste->D_ActVolumeForRecycle_Aluminium = $input['aluminiumActualRecycleD'];
    $waste->D_ActVolumeForRecycle_Copper = $input['copperActualRecycleD'];
    $waste->D_ActVolumeForRecycle_Timber = $input['timberActualRecycleD'];
    $waste->D_ActVolumeForRecycle_Glass = $input['glassActualRecycleD'];
    $waste->D_ActVolumeForRecycle_Hazardous = $input['hazardousActualRecycleD'];
    $waste->D_ActVolumeForRecycle_NonHazardous = $input['nonHazardouActualRecycleD'];
    $waste->D_ActVolumeForRecycle_Organic = $input['organicActualRecycleD'];
    $waste->D_ActVolumeForRecycle_Conduit = $input['conduitActualRecycleD'];
    
    $waste->D_DifVolumeForLandfill_Units = $input['unitMessuramentDifferenceLandfillD'];
    $waste->D_DifVolumeForLandfill_Concrete = $input['concreteDifferenceLandfillD'];
    $waste->D_DifVolumeForLandfill_Steel = $input['steelDifferenceLandfillD'];
    $waste->D_DifVolumeForLandfill_Aluminium = $input['aluminiumDifferenceLandfillD'];
    $waste->D_DifVolumeForLandfill_Copper = $input['copperDifferenceLandfillD'];
    $waste->D_DifVolumeForLandfill_Timber = $input['timberDifferenceLandfillD'];
    $waste->D_DifVolumeForLandfill_Glass = $input['glassDifferenceLandfillD'];
    $waste->D_DifVolumeForLandfill_Hazardous = $input['hazardousDifferenceLandfillD'];
    $waste->D_DifVolumeForLandfill_NonHazardous = $input['nonHazardouDifferenceLandfillD'];
    $waste->D_DifVolumeForLandfill_Organic = $input['organicDifferenceLandfillD'];
    $waste->D_DifVolumeForLandfill_Conduit = $input['conduitDifferenceLandfillD'];
    
    $waste->D_DifVolumeForRecycle_Units = $input['unitMessuramentDifferenceD'];
    $waste->D_DifVolumeForRecycle_Concrete = $input['concreteDifferenceD'];
    $waste->D_DifVolumeForRecycle_Steel = $input['steelDifferenceD'];
    $waste->D_DifVolumeForRecycle_Aluminium = $input['aluminiumDifferenceD'];
    $waste->D_DifVolumeForRecycle_Copper = $input['copperDifferenceD'];
    $waste->D_DifVolumeForRecycle_Timber = $input['timberDifferenceD'];
    $waste->D_DifVolumeForRecycle_Glass = $input['glassDifferenceD'];
    $waste->D_DifVolumeForRecycle_Hazardous = $input['hazardousDifferenceD'];
    $waste->D_DifVolumeForRecycle_NonHazardous = $input['nonHazardouDifferenceD'];
    $waste->D_DifVolumeForRecycle_Organic = $input['organicDifferenceD'];
    $waste->D_DifVolumeForRecycle_Conduit = $input['conduitDifferenceD'];
    
    
    //Saving info from second section of the waste page.
    $waste->C_Tvolume_Units = $input['unitMessuramentTargetC'];
    $waste->C_Tvolume_Concrete = $input['concreteTargetC'];
    $waste->C_Tvolume_Steel = $input['steelTargetC'];
    $waste->C_Tvolume_Aluminium = $input['aluminiumTargetC'];
    $waste->C_Tvolume_Copper = $input['copperTargetC'];
    $waste->C_Tvolume_Timber = $input['timberTargetC'];
    $waste->C_Tvolume_Glass = $input['glassTargetC'];
    $waste->C_Tvolume_Hazardous = $input['hazardousTargetC'];
    $waste->C_Tvolume_NonHazardous = $input['nonHazardousTargetC'];
    $waste->C_Tvolume_Organic = $input['organicTargetC'];
    $waste->C_Tvolume_Conduit = $input['conduitTargetC'];
    
    $waste->C_PvolumeForLandfill_Units = $input['unitMessuramentProposedLandC'];
    $waste->C_PvolumeForLandfill_Concrete = $input['concreteProposedLandC'];
    $waste->C_PvolumeForLandfill_Steel = $input['steelProposedLandC'];
    $waste->C_PvolumeForLandfill_Aluminium = $input['aluminiumProposedLandC'];
    $waste->C_PvolumeForLandfill_Copper = $input['copperProposedLandC'];
    $waste->C_PvolumeForLandfill_Timber = $input['timberProposedLandC'];
    $waste->C_PvolumeForLandfill_Glass = $input['glassProposedLandC'];
    $waste->C_PvolumeForLandfill_Hazardous = $input['hazardousProposedLandC'];
    $waste->C_PvolumeForLandfill_NonHazardous = $input['nonHazardousProposedLandC'];
    $waste->C_PvolumeForLandfill_Organic = $input['organicProposedLandC'];
    $waste->C_PvolumeForLandfill_Conduit = $input['conduitProposedLandC'];
    
    $waste->C_PvolumeForRecycle_Units = $input['unitMessuramentProposedRecycleC'];
    $waste->C_PvolumeForRecycle_Concrete = $input['concreteProposedRecycleC'];
    $waste->C_PvolumeForRecycle_Steel = $input['steelProposedRecycleC'];
    $waste->C_PvolumeForRecycle_Aluminium = $input['aluminiumProposedRecycleC'];
    $waste->C_PvolumeForRecycle_Copper = $input['copperProposedRecycleC'];
    $waste->C_PvolumeForRecycle_Timber = $input['timberProposedRecycleC'];
    $waste->C_PvolumeForRecycle_Glass = $input['glassProposedRecycleC'];
    $waste->C_PvolumeForRecycle_Hazardous = $input['hazardousProposedRecycleC'];
    $waste->C_PvolumeForRecycle_NonHazardous = $input['nonHazardousProposedRecycleC'];
    $waste->C_PvolumeForRecycle_Organic = $input['organicProposedRecycleC'];
    $waste->C_PvolumeForRecycle_Conduit = $input['conduitProposedRecycleC'];
    
    $waste->C_ActVolumeForLandfill_Units = $input['unitMessuramentActualLandfillC'];
    $waste->C_ActVolumeForLandfill_Concrete = $input['concreteActualLandfillC'];
    $waste->C_ActVolumeForLandfill_Steel = $input['steelActualLandfillC'];
    $waste->C_ActVolumeForLandfill_Aluminium = $input['aluminiumActualLandfillC'];
    $waste->C_ActVolumeForLandfill_Copper = $input['copperActualLandfillC'];
    $waste->C_ActVolumeForLandfill_Timber = $input['timberActualLandfillC'];
    $waste->C_ActVolumeForLandfill_Glass = $input['glassActualLandfillC'];
    $waste->C_ActVolumeForLandfill_Hazardous = $input['hazardousActualLandfillC'];
    $waste->C_ActVolumeForLandfill_NonHazardous = $input['nonHazardouActualLandfillC'];
    $waste->C_ActVolumeForLandfill_Organic = $input['organicActualLandfillC'];
    $waste->C_ActVolumeForLandfill_Conduit = $input['conduitActualLandfillC'];
    
    $waste->C_ActVolumeForRecycle_Units = $input['unitMessuramentActualRecycleC'];
    $waste->C_ActVolumeForRecycle_Concrete = $input['concreteActualRecycleC'];
    $waste->C_ActVolumeForRecycle_Steel = $input['steelActualRecycleC'];
    $waste->C_ActVolumeForRecycle_Aluminium = $input['aluminiumActualRecycleC'];
    $waste->C_ActVolumeForRecycle_Copper = $input['copperActualRecycleC'];
    $waste->C_ActVolumeForRecycle_Timber = $input['timberActualRecycleC'];
    $waste->C_ActVolumeForRecycle_Glass = $input['glassActualRecycleC'];
    $waste->C_ActVolumeForRecycle_Hazardous = $input['hazardousActualRecycleC'];
    $waste->C_ActVolumeForRecycle_NonHazardous = $input['nonHazardouActualRecycleC'];
    $waste->C_ActVolumeForRecycle_Organic = $input['organicActualRecycleC'];
    $waste->C_ActVolumeForRecycle_Conduit = $input['conduitActualRecycleC'];
   
    $waste->C_DifVolumeForLandfill_Units = $input['unitMessuramentDifferenceLandfillC'];
    $waste->C_DifVolumeForLandfill_Concrete = $input['concreteDifferenceLandfillC'];
    $waste->C_DifVolumeForLandfill_Steel = $input['steelDifferenceLandfillC'];
    $waste->C_DifVolumeForLandfill_Aluminium = $input['aluminiumDifferenceLandfillC'];
    $waste->C_DifVolumeForLandfill_Copper = $input['copperDifferenceLandfillC'];
    $waste->C_DifVolumeForLandfill_Timber = $input['timberDifferenceLandfillC'];
    $waste->C_DifVolumeForLandfill_Glass = $input['glassDifferenceLandfillC'];
    $waste->C_DifVolumeForLandfill_Hazardous = $input['hazardousDifferenceLandfillC'];
    $waste->C_DifVolumeForLandfill_NonHazardous = $input['nonHazardouDifferenceLandfillC'];
    $waste->C_DifVolumeForLandfill_Organic = $input['organicDifferenceLandfillC'];
    $waste->C_DifVolumeForLandfill_Conduit = $input['conduitDifferenceLandfillC'];
   
    $waste->C_DifVolumeForRecycle_Units = $input['unitMessuramentDifferenceC'];
    $waste->C_DifVolumeForRecycle_Concrete = $input['concreteDifferenceC'];
    $waste->C_DifVolumeForRecycle_Steel = $input['steelDifferenceC'];
    $waste->C_DifVolumeForRecycle_Aluminium = $input['aluminiumDifferenceC'];
    $waste->C_DifVolumeForRecycle_Copper = $input['copperDifferenceC'];
    $waste->C_DifVolumeForRecycle_Timber = $input['timberDifferenceC'];
    $waste->C_DifVolumeForRecycle_Glass = $input['glassDifferenceC'];
    $waste->C_DifVolumeForRecycle_Hazardous = $input['hazardousDifferenceC'];
    $waste->C_DifVolumeForRecycle_NonHazardous = $input['nonHazardouDifferenceC'];
    $waste->C_DifVolumeForRecycle_Organic = $input['organicDifferenceC'];
    $waste->C_DifVolumeForRecycle_Conduit = $input['conduitDifferenceC'];
    
    
    //Saving info from third section of the waste page.
    $waste->C_D_WasteManagementPlan = $input['demolitionPlanR2'];
    $waste->WasteEdConstructionContractors = $input['constructionEducation'];
    $waste->WasteEdDemolitionContractors = $input['demolitionEducation'];
    $waste->WasteSegTempStoreOnsiteConstruction = $input['wasteSegregationConstruction'];
    $waste->WasteSegTempStoreOnsiteDemolition = $input['wasteSegregationDemolition'];
    $waste->PersonResponsibleCDWaste = $input['personResponsableWaste'];
    
    $waste->PercentMatExistCommReused = $input['wastePercentage'];
    $waste->ConstructionSegRecyclingPlant = $input['constructionRecyclingPlant'];
    $waste->ConstructionPlants = $input['constructionRecyclingPlantName'];
    $waste->DemolitionSegRecyclingPlant = $input['demolitionRecyclingPlant'];
    $waste->DemolitionPlants = $input['demolitionRecyclingPlantName'];
    $waste->OverrideCapRate = $input['overrideWasteValues'];
    $waste->OverrideConstructionCapRate = $input['constructionRecyclingPercentage'];
    $waste->OverrideDemolitionCapRate = $input['demolitionRecyclingPercentage'];
    
    
    //Section for waste comments
    $waste->DemWasteComment = $input['DemWasteComment'];
    $waste->ConWasteComment = $input['ConWasteComment'];
    $waste->RecWasteComment = $input['RecWasteComment'];
    $waste->ElectricityComment = $input['ElectricityComment'];
    $waste->FuelComment = $input['FuelComment'];
    $waste->RenewableEnergyComment = $input['RenewableEnergyComment'];
    $waste->LabourComment = $input['LabourComment'];
    
    
    
    //Adding total fields to waste tables in section one.
    $waste->totalTargetD =  $input['concreteTargetD'] + $input['steelTargetD'] + $input['aluminiumTargetD'] + $input['copperTargetD'] + $input['timberTargetD'] + $input['glassTargetD'] + $input['hazardousTargetD'] + $input['nonHazardousTargetD'] + $input['organicTargetD'] + $input['conduitTargetD'];
    
    $waste->totalProposedLandD = $input['concreteProposedLandD'] + $input['steelProposedLandD'] + $input['aluminiumProposedLandD'] + $input['copperProposedLandD'] + $input['timberProposedLandD'] + $input['glassProposedLandD'] + $input['hazardousProposedLandD'] + $input['nonHazardousProposedLandD'] + $input['organicProposedLandD'] + $input['conduitProposedLandD'];
    
    $waste->totalProposedRecycleD = $input['concreteProposedRecycleD'] + $input['steelProposedRecycleD'] + $input['aluminiumProposedRecycleD'] + $input['copperProposedRecycleD'] + $input['timberProposedRecycleD'] + $input['glassProposedRecycleD'] + $input['hazardousProposedRecycleD'] + $input['nonHazardousProposedRecycleD'] + $input['organicProposedRecycleD'] + $input['conduitProposedRecycleD'];
    
    $waste->totalActualLandD = $input['concreteActualLandfillD'] + $input['steelActualLandfillD'] + $input['aluminiumActualLandfillD'] + $input['copperActualLandfillD'] + $input['timberActualLandfillD'] + $input['glassActualLandfillD'] + $input['hazardousActualLandfillD'] + $input['nonHazardouActualLandfillD'] + $input['organicActualLandfillD'] + $input['conduitActualLandfillD'];
    
    $waste->totalActualRecycleD = $input['concreteActualRecycleD'] + $input['steelActualRecycleD'] + $input['aluminiumActualRecycleD'] + $input['copperActualRecycleD'] + $input['timberActualRecycleD'] + $input['glassActualRecycleD'] + $input['hazardousActualRecycleD'] + $input['nonHazardouActualRecycleD'] + $input['organicActualRecycleD'] + $input['conduitActualRecycleD'];

    $waste->totalDifLandD = $input['concreteDifferenceLandfillD'] + $input['steelDifferenceLandfillD'] + $input['aluminiumDifferenceLandfillD'] + $input['copperDifferenceLandfillD'] + $input['timberDifferenceLandfillD'] + $input['glassDifferenceLandfillD'] + $input['hazardousDifferenceLandfillD'] + $input['nonHazardouDifferenceLandfillD'] + $input['organicDifferenceLandfillD'] + $input['conduitDifferenceLandfillD'];
    
    $waste->totalDifRecycleD = $input['concreteDifferenceD'] + $input['steelDifferenceD'] + $input['aluminiumDifferenceD'] + $input['copperDifferenceD'] + $input['timberDifferenceD'] + $input['glassDifferenceD'] + $input['hazardousDifferenceD'] + $input['nonHazardouDifferenceD'] + $input['organicDifferenceD'] + $input['conduitDifferenceD'];

    
    //Total fields for waste table in section two
    $waste->totalTargetC =  $input['concreteTargetC'] + $input['steelTargetC'] + $input['aluminiumTargetC'] + $input['copperTargetC'] + $input['timberTargetC'] + $input['glassTargetC'] + $input['hazardousTargetC'] + $input['nonHazardousTargetC'] + $input['organicTargetC'] + $input['conduitTargetC'];
    
    $waste->totalProposedLandC = $input['concreteProposedLandC'] + $input['steelProposedLandC'] + $input['aluminiumProposedLandC'] + $input['copperProposedLandC'] + $input['timberProposedLandC'] + $input['glassProposedLandC'] + $input['hazardousProposedLandC'] + $input['nonHazardousProposedLandC'] + $input['organicProposedLandC'] + $input['conduitProposedLandC'];
    
    $waste->totalProposedRecycleC = $input['concreteProposedRecycleC'] + $input['steelProposedRecycleC'] + $input['aluminiumProposedRecycleC'] + $input['copperProposedRecycleC'] + $input['timberProposedRecycleC'] + $input['glassProposedRecycleC'] + $input['hazardousProposedRecycleC'] + $input['nonHazardousProposedRecycleC'] + $input['organicProposedRecycleC'] + $input['conduitProposedRecycleC'];
    
    $waste->totalActualLandC = $input['concreteActualLandfillC'] + $input['steelActualLandfillC'] + $input['aluminiumActualLandfillC'] + $input['copperActualLandfillC'] + $input['timberActualLandfillC'] + $input['glassActualLandfillC'] + $input['hazardousActualLandfillC'] + $input['nonHazardouActualLandfillC'] + $input['organicActualLandfillC'] + $input['conduitActualLandfillC'];
    
    $waste->totalActualRecycleC = $input['concreteActualRecycleC'] + $input['steelActualRecycleC'] + $input['aluminiumActualRecycleC'] + $input['copperActualRecycleC'] + $input['timberActualRecycleC'] + $input['glassActualRecycleC'] + $input['hazardousActualRecycleC'] + $input['nonHazardouActualRecycleC'] + $input['organicActualRecycleC'] + $input['conduitActualRecycleC'];
    
    $waste->totalDifLandC = $input['concreteDifferenceLandfillC'] + $input['steelDifferenceLandfillC'] + $input['aluminiumDifferenceLandfillC'] + $input['copperDifferenceLandfillC'] + $input['timberDifferenceLandfillC'] + $input['glassDifferenceLandfillC'] + $input['hazardousDifferenceLandfillC'] + $input['nonHazardouDifferenceLandfillC'] + $input['organicDifferenceLandfillC'] + $input['conduitDifferenceLandfillC'];
    
    $waste->totalDifRecycleC = $input['concreteDifferenceC'] + $input['steelDifferenceC'] + $input['aluminiumDifferenceC'] + $input['copperDifferenceC'] + $input['timberDifferenceC'] + $input['glassDifferenceC'] + $input['hazardousDifferenceC'] + $input['nonHazardouDifferenceC'] + $input['organicDifferenceC'] + $input['conduitDifferenceC'];
    
    
    //Cost Analysis section
    $waste->valueLandfillCurrencyD = $input['valueLandfillCurrencyD'];
    $waste->valueLandfillConcreteD = $input['valueLandfillConcreteD'];
    $waste->valueLandfillSteelD = $input['valueLandfillSteelD'];
    $waste->valueLandfillAluminiumD = $input['valueLandfillAluminiumD'];
    $waste->valueLandfillCopperD = $input['valueLandfillCopperD'];
    $waste->valueLandfillTimberD = $input['valueLandfillTimberD'];
    $waste->valueLandfillGlassD = $input['valueLandfillGlassD'];
    $waste->valueLandfillHazardousD = $input['valueLandfillHazardousD'];
    $waste->valueLandfillNonHazardousD = $input['valueLandfillNonHazardousD'];
    $waste->valueLandfillOrganicD = $input['valueLandfillOrganicD'];
    $waste->valueLandfillConduitD = $input['valueLandfillConduitD'];
    $waste->valueLandfillTotalD = $input['valueLandfillConcreteD'] + $input['valueLandfillSteelD'] + $input['valueLandfillAluminiumD'] + $input['valueLandfillCopperD'] + $input['valueLandfillTimberD'] + $input['valueLandfillGlassD'] + $input['valueLandfillHazardousD'] + $input['valueLandfillNonHazardousD'] + $input['valueLandfillOrganicD'] + $input['valueLandfillConduitD'];
      
    $waste->valueRecycleCurrencyD = $input['valueRecycleCurrencyD'];
    $waste->valueRecycleConcreteD = $input['valueRecycleConcreteD'];
    $waste->valueRecycleSteelD = $input['valueRecycleSteelD'];
    $waste->valueRecycleAluminiumD = $input['valueRecycleAluminiumD'];
    $waste->valueRecycleCopperD = $input['valueRecycleCopperD'];
    $waste->valueRecycleTimberD = $input['valueRecycleTimberD'];
    $waste->valueRecycleGlassD = $input['valueRecycleGlassD'];
    $waste->valueRecycleHazardousD = $input['valueRecycleHazardousD'];
    $waste->valueRecycleNonHazardousD = $input['valueRecycleNonHazardousD'];
    $waste->valueRecycleOrganicD = $input['valueRecycleOrganicD'];
    $waste->valueRecycleConduitD = $input['valueRecycleConduitD'];
    $waste->valueRecycleTotalD = $input['valueRecycleConcreteD'] + $input['valueRecycleSteelD'] + $input['valueRecycleAluminiumD'] + $input['valueRecycleCopperD'] + $input['valueRecycleTimberD'] + $input['valueRecycleGlassD'] + $input['valueRecycleHazardousD'] + $input['valueRecycleNonHazardousD'] + $input['valueRecycleOrganicD'] + $input['valueRecycleConduitD'];
      
    $waste->actualLandfillCurrencyD = $input['actualLandfillCurrencyD'];
    $waste->actualLandfillConcreteD = $input['actualLandfillConcreteD'];
    $waste->actualLandfillSteelD = $input['actualLandfillSteelD'];
    $waste->actualLandfillAluminiumD = $input['actualLandfillAluminiumD'];
    $waste->actualLandfillCopperD = $input['actualLandfillCopperD'];
    $waste->actualLandfillTimberD = $input['actualLandfillTimberD'];
    $waste->actualLandfillGlassD = $input['actualLandfillGlassD'];
    $waste->actualLandfillHazardousD = $input['actualLandfillHazardousD'];
    $waste->actualLandfillNonHazardousD = $input['actualLandfillNonHazardousD'];
    $waste->actualLandfillOrganicD = $input['actualLandfillOrganicD'];
    $waste->actualLandfillConduitD = $input['actualLandfillConduitD'];
    $waste->actualLandfillTotalD = $input['actualLandfillConcreteD'] + $input['actualLandfillSteelD'] + $input['actualLandfillAluminiumD'] + $input['actualLandfillCopperD'] + $input['actualLandfillTimberD'] + $input['actualLandfillGlassD'] + $input['actualLandfillHazardousD'] + $input['actualLandfillNonHazardousD'] + $input['actualLandfillOrganicD'] + $input['actualLandfillConduitD'];
    
    $waste->actualRecycleCurrencyD = $input['actualRecycleCurrencyD'];
    $waste->actualRecycleConcreteD = $input['actualRecycleConcreteD'];
    $waste->actualRecycleSteelD = $input['actualRecycleSteelD'];
    $waste->actualRecycleAluminiumD = $input['actualRecycleAluminiumD'];
    $waste->actualRecycleCopperD = $input['actualRecycleCopperD'];
    $waste->actualRecycleTimberD = $input['actualRecycleTimberD'];
    $waste->actualRecycleGlassD = $input['actualRecycleGlassD'];
    $waste->actualRecycleHazardousD = $input['actualRecycleHazardousD'];
    $waste->actualRecycleNonHazardousD = $input['actualRecycleNonHazardousD'];
    $waste->actualRecycleOrganicD = $input['actualRecycleOrganicD'];
    $waste->actualRecycleConduitD = $input['actualRecycleConduitD'];
    $waste->actualRecycleTotalD = $input['actualRecycleConcreteD'] + $input['actualRecycleSteelD'] + $input['actualRecycleAluminiumD'] + $input['actualRecycleCopperD'] + $input['actualRecycleTimberD'] + $input['actualRecycleGlassD'] + $input['actualRecycleHazardousD'] + $input['actualRecycleNonHazardousD'] + $input['actualRecycleOrganicD'] + $input['actualRecycleConduitD'];
    
    $waste->totalValuePropCurrencyD = $input['totalValuePropCurrencyD'];
    $waste->totalValuePropConcreteD = $input['totalValuePropConcreteD'];
    $waste->totalValuePropSteelD = $input['totalValuePropSteelD'];
    $waste->totalValuePropAluminiumD = $input['totalValuePropAluminiumD'];
    $waste->totalValuePropCopperD = $input['totalValuePropCopperD'];
    $waste->totalValuePropTimberD = $input['totalValuePropTimberD'];
    $waste->totalValuePropGlassD = $input['totalValuePropGlassD'];
    $waste->totalValuePropHazardousD = $input['totalValuePropHazardousD'];
    $waste->totalValuePropNonHazardousD = $input['totalValuePropNonHazardousD'];
    $waste->totalValuePropOrganicD = $input['totalValuePropOrganicD'];
    $waste->totalValuePropConduitD = $input['totalValuePropConduitD'];
    $waste->totalValuePropTotalD = $input['totalValuePropConcreteD'] + $input['totalValuePropSteelD'] + $input['totalValuePropAluminiumD'] + $input['totalValuePropCopperD'] + $input['totalValuePropTimberD'] + $input['totalValuePropGlassD'] + $input['totalValuePropHazardousD'] + $input['totalValuePropNonHazardousD'] + $input['totalValuePropOrganicD'] + $input['totalValuePropConduitD'];
    
    $waste->totalValueActCurrencyD = $input['totalValueActCurrencyD'];
    $waste->totalValueActConcreteD = $input['totalValueActConcreteD'];
    $waste->totalValueActSteelD = $input['totalValueActSteelD'];
    $waste->totalValueActAluminiumD = $input['totalValueActAluminiumD'];
    $waste->totalValueActCopperD = $input['totalValueActCopperD'];
    $waste->totalValueActTimberD = $input['totalValueActTimberD'];
    $waste->totalValueActGlassD = $input['totalValueActGlassD'];
    $waste->totalValueActHazardousD = $input['totalValueActHazardousD'];
    $waste->totalValueActNonHazardousD = $input['totalValueActNonHazardousD'];
    $waste->totalValueActOrganicD = $input['totalValueActOrganicD'];
    $waste->totalValueActConduitD = $input['totalValueActConduitD'];
    $waste->totalValueActTotalD = $input['totalValueActConcreteD'] + $input['totalValueActSteelD'] + $input['totalValueActAluminiumD'] + $input['totalValueActCopperD'] + $input['totalValueActTimberD'] + $input['totalValueActGlassD'] + $input['totalValueActHazardousD'] + $input['totalValueActNonHazardousD'] + $input['totalValueActOrganicD'] + $input['totalValueActConduitD'];
    
    
    $waste->valueLandfillCurrencyC = $input['valueLandfillCurrencyC'];
    $waste->valueLandfillConcreteC = $input['valueLandfillConcreteC'];
    $waste->valueLandfillSteelC = $input['valueLandfillSteelC'];
    $waste->valueLandfillAluminiumC = $input['valueLandfillAluminiumC'];
    $waste->valueLandfillCopperC = $input['valueLandfillCopperC'];
    $waste->valueLandfillTimberC = $input['valueLandfillTimberC'];
    $waste->valueLandfillGlassC = $input['valueLandfillGlassC'];
    $waste->valueLandfillHazardousC = $input['valueLandfillHazardousC'];
    $waste->valueLandfillNonHazardousC = $input['valueLandfillNonHazardousC'];
    $waste->valueLandfillOrganicC = $input['valueLandfillOrganicC'];
    $waste->valueLandfillConduitC = $input['valueLandfillConduitC'];
    $waste->valueLandfillTotalC = $input['valueLandfillConcreteC'] + $input['valueLandfillSteelC'] + $input['valueLandfillAluminiumC'] + $input['valueLandfillCopperC'] + $input['valueLandfillTimberC'] + $input['valueLandfillGlassC'] + $input['valueLandfillHazardousC'] + $input['valueLandfillNonHazardousC'] + $input['valueLandfillOrganicC'] + $input['valueLandfillConduitC'];
      
    $waste->valueRecycleCurrencyC = $input['valueRecycleCurrencyC'];
    $waste->valueRecycleConcreteC = $input['valueRecycleConcreteC'];
    $waste->valueRecycleSteelC = $input['valueRecycleSteelC'];
    $waste->valueRecycleAluminiumC = $input['valueRecycleAluminiumC'];
    $waste->valueRecycleCopperC = $input['valueRecycleCopperC'];
    $waste->valueRecycleTimberC = $input['valueRecycleTimberC'];
    $waste->valueRecycleGlassC = $input['valueRecycleGlassC'];
    $waste->valueRecycleHazardousC = $input['valueRecycleHazardousC'];
    $waste->valueRecycleNonHazardousC = $input['valueRecycleNonHazardousC'];
    $waste->valueRecycleOrganicC = $input['valueRecycleOrganicC'];
    $waste->valueRecycleConduitC = $input['valueRecycleConduitC'];
    $waste->valueRecycleTotalC = $input['valueRecycleConcreteC'] + $input['valueRecycleSteelC'] + $input['valueRecycleAluminiumC'] + $input['valueRecycleCopperC'] + $input['valueRecycleTimberC'] + $input['valueRecycleGlassC'] + $input['valueRecycleHazardousC'] + $input['valueRecycleNonHazardousC'] + $input['valueRecycleOrganicC'] + $input['valueRecycleConduitC'];
      
    $waste->actualLandfillCurrencyC = $input['actualLandfillCurrencyC'];
    $waste->actualLandfillConcreteC = $input['actualLandfillConcreteC'];
    $waste->actualLandfillSteelC = $input['actualLandfillSteelC'];
    $waste->actualLandfillAluminiumC = $input['actualLandfillAluminiumC'];
    $waste->actualLandfillCopperC = $input['actualLandfillCopperC'];
    $waste->actualLandfillTimberC = $input['actualLandfillTimberC'];
    $waste->actualLandfillGlassC = $input['actualLandfillGlassC'];
    $waste->actualLandfillHazardousC = $input['actualLandfillHazardousC'];
    $waste->actualLandfillNonHazardousC = $input['actualLandfillNonHazardousC'];
    $waste->actualLandfillOrganicC = $input['actualLandfillOrganicC'];
    $waste->actualLandfillConduitC = $input['actualLandfillConduitC'];
    $waste->actualLandfillTotalC = $input['actualLandfillConcreteC'] + $input['actualLandfillSteelC'] + $input['actualLandfillAluminiumC'] + $input['actualLandfillCopperC'] + $input['actualLandfillTimberC'] + $input['actualLandfillGlassC'] + $input['actualLandfillHazardousC'] + $input['actualLandfillNonHazardousC'] + $input['actualLandfillOrganicC'] + $input['actualLandfillConduitC'];
    
    $waste->actualRecycleCurrencyC = $input['actualRecycleCurrencyC'];
    $waste->actualRecycleConcreteC = $input['actualRecycleConcreteC'];
    $waste->actualRecycleSteelC = $input['actualRecycleSteelC'];
    $waste->actualRecycleAluminiumC = $input['actualRecycleAluminiumC'];
    $waste->actualRecycleCopperC = $input['actualRecycleCopperC'];
    $waste->actualRecycleTimberC = $input['actualRecycleTimberC'];
    $waste->actualRecycleGlassC = $input['actualRecycleGlassC'];
    $waste->actualRecycleHazardousC = $input['actualRecycleHazardousC'];
    $waste->actualRecycleNonHazardousC = $input['actualRecycleNonHazardousC'];
    $waste->actualRecycleOrganicC = $input['actualRecycleOrganicC'];
    $waste->actualRecycleConduitC = $input['actualRecycleConduitC'];
    $waste->actualRecycleTotalC = $input['actualRecycleConcreteC'] + $input['actualRecycleSteelC'] + $input['actualRecycleAluminiumC'] + $input['actualRecycleCopperC'] + $input['actualRecycleTimberC'] + $input['actualRecycleGlassC'] + $input['actualRecycleHazardousC'] + $input['actualRecycleNonHazardousC'] + $input['actualRecycleOrganicC'] + $input['actualRecycleConduitC'];
    
    $waste->totalValuePropCurrencyC = $input['totalValuePropCurrencyC'];
    $waste->totalValuePropConcreteC = $input['totalValuePropConcreteC'];
    $waste->totalValuePropSteelC = $input['totalValuePropSteelC'];
    $waste->totalValuePropAluminiumC = $input['totalValuePropAluminiumC'];
    $waste->totalValuePropCopperC = $input['totalValuePropCopperC'];
    $waste->totalValuePropTimberC = $input['totalValuePropTimberC'];
    $waste->totalValuePropGlassC = $input['totalValuePropGlassC'];
    $waste->totalValuePropHazardousC = $input['totalValuePropHazardousC'];
    $waste->totalValuePropNonHazardousC = $input['totalValuePropNonHazardousC'];
    $waste->totalValuePropOrganicC = $input['totalValuePropOrganicC'];
    $waste->totalValuePropConduitC = $input['totalValuePropConduitC'];
    $waste->totalValuePropTotalC = $input['totalValuePropConcreteC'] + $input['totalValuePropSteelC'] + $input['totalValuePropAluminiumC'] + $input['totalValuePropCopperC'] + $input['totalValuePropTimberC'] + $input['totalValuePropGlassC'] + $input['totalValuePropHazardousC'] + $input['totalValuePropNonHazardousC'] + $input['totalValuePropOrganicC'] + $input['totalValuePropConduitC'];
    
    $waste->totalValueActCurrencyC = $input['totalValueActCurrencyC'];
    $waste->totalValueActConcreteC = $input['totalValueActConcreteC'];
    $waste->totalValueActSteelC = $input['totalValueActSteelC'];
    $waste->totalValueActAluminiumC = $input['totalValueActAluminiumC'];
    $waste->totalValueActCopperC = $input['totalValueActCopperC'];
    $waste->totalValueActTimberC = $input['totalValueActTimberC'];
    $waste->totalValueActGlassC = $input['totalValueActGlassC'];
    $waste->totalValueActHazardousC = $input['totalValueActHazardousC'];
    $waste->totalValueActNonHazardousC = $input['totalValueActNonHazardousC'];
    $waste->totalValueActOrganicC = $input['totalValueActOrganicC'];
    $waste->totalValueActConduitC = $input['totalValueActConduitC'];
    $waste->totalValueActTotalC = $input['totalValueActConcreteC'] + $input['totalValueActSteelC'] + $input['totalValueActAluminiumC'] + $input['totalValueActCopperC'] + $input['totalValueActTimberC'] + $input['totalValueActGlassC'] + $input['totalValueActHazardousC'] + $input['totalValueActNonHazardousC'] + $input['totalValueActOrganicC'] + $input['totalValueActConduitC'];
    
    $waste->save(); 
    
    $user_var = User::find(Auth::user()->id);
    $user = array('finance' => $user_var->finance);
    $user = array_add($user, 'admin', $user_var->admin);
    $user = array_add($user, 'tech', $user_var->tech);

    return View::make('portal.sideBar.waste', compact('waste', 'id', 'user'));
	}
  
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

    return View::make('portal.sideBar.waste', compact('waste', 'id', 'user'));
    }
    else return Redirect::to('index');
  }
 
}
