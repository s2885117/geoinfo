<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWastesTable extends Migration {

  /**
	 * Run the migrations.
	 *
	 * @return void
	 */
  public function up()
  {
    Schema::create('wastes', function($table) {
      $table->increments('id');
      $table->integer('project_id');//input_variable
      $table->foreign('project_id')->references('id')->on('projects');
      $table->string('officeGrossUnit')->nullable();
      $table->string('officeGrossArea')->nullable();
      $table->string('officeNetUnit')->nullable();
      $table->string('officeNetArea')->nullable();
      $table->string('overrideOfficeValue')->nullable(); //(Y/N)
      $table->string('officePaper')->nullable();	
      $table->string('officeMetal')->nullable();	
      $table->string('officeGlass')->nullable();	
      $table->string('officePlastic')->nullable();	
      $table->string('officeOrganic')->nullable();	
      $table->string('officeOther')->nullable();	
      $table->string('officeQuantity')->nullable();	
      $table->string('retailGrossUnit')->nullable();
      $table->string('retailGrossArea')->nullable();
      $table->string('retailNetUnit')->nullable();
      $table->string('retailNetArea')->nullable();
      $table->string('overrideRetailValue')->nullable();
      $table->string('retailPaper')->nullable();
      $table->string('retailMetal')->nullable();
      $table->string('retailGlass')->nullable();
      $table->string('retailPlastic')->nullable();
      $table->string('retailOrganic')->nullable();
      $table->string('retailOther')->nullable();
      $table->string('retailQuantity')->nullable();
      $table->string('schoolGrossUnit')->nullable();
      $table->string('schoolGrossArea')->nullable();
      $table->string('schoolNetUnit')->nullable();
      $table->string('schoolNetArea')->nullable();
      $table->string('overrideSchoolValue')->nullable(); //(Y/N)*/
      $table->string('schoolPaper')->nullable();
      $table->string('schoolMetal')->nullable();
      $table->string('schoolGlass')->nullable();
      $table->string('schoolPlastic')->nullable();
      $table->string('schoolOrganic')->nullable();
      $table->string('schoolOther')->nullable();
      $table->string('schoolQuantity')->nullable();
      $table->string('residentialGrossUnit')->nullable();
      $table->string('residentialGrossArea')->nullable();
      $table->string('residentialNetUnit')->nullable();
      $table->string('residentialNetArea')->nullable();
      $table->string('overrideResidentialValue')->nullable(); //(Y/N)	
      $table->string('residentialPaper')->nullable();
      $table->string('residentialMetal')->nullable();
      $table->string('residentialGlass')->nullable();
      $table->string('residentialPlastic')->nullable();
      $table->string('residentialOrganic')->nullable();
      $table->string('residentialOther')->nullable();
      $table->string('residentialQuantity')->nullable();
      $table->string('otherBuildingsTypes1GrossUnit')->nullable();
      $table->string('otherBuildingsTypes1GrossArea')->nullable();
      $table->string('otherBuildingsTypes1NetUnit')->nullable();
      $table->string('otherBuildingsTypes1NetArea')->nullable();
      $table->string('other1Paper')->nullable();
      $table->string('other1Metal')->nullable();
      $table->string('other1Glass')->nullable();
      $table->string('other1Plastic')->nullable();
      $table->string('other1Organic')->nullable();
      $table->string('other1Other')->nullable();
      $table->string('other1Quantity')->nullable();  
      $table->string('otherBuildingsTypes2GrossUnit')->nullable();
      $table->string('otherBuildingsTypes2GrossArea')->nullable();
      $table->string('otherBuildingsTypes2NetUnit')->nullable();
      $table->string('otherBuildingsTypes2NetArea')->nullable();	
      $table->string('other2Paper')->nullable();
      $table->string('other2Metal')->nullable();
      $table->string('other2Glass')->nullable();
      $table->string('other2Plastic')->nullable();
      $table->string('other2Organic')->nullable();
      $table->string('other2Other')->nullable();
      $table->string('other2Quantity')->nullable();	
      $table->string('otherBuildingsTypes3GrossUnit')->nullable();
      $table->string('otherBuildingsTypes3GrossArea')->nullable();
      $table->string('otherBuildingsTypes3NetUnit')->nullable();
      $table->string('otherBuildingsTypes3NetArea')->nullable();	
      $table->string('other3Paper')->nullable();
      $table->string('other3Metal')->nullable();
      $table->string('other3Glass')->nullable();
      $table->string('other3Plastic')->nullable();
      $table->string('other3Organic')->nullable();
      $table->string('other3Other')->nullable();
      $table->string('other3Quantity')->nullable();		  
      $table->string('landscapeAreaUnit')->nullable();
      $table->string('landscapeAreaValue')->nullable();  
      $table->string('landscapeQuantity')->nullable();  
      $table->string('demolitionPlanR2')->nullable(); //(Y/N)
      $table->string('constructionEducation')->nullable(); //(Y/N)
      $table->string('demolitionEducation')->nullable(); //(Y/N)
      $table->string('wasteSegregationConstruction')->nullable(); //(Y/N)
      $table->string('wasteSegregationDemolition')->nullable(); //(Y/N)
      $table->string('personResponsableWaste')->nullable(); //(Y/N)
      $table->string('wastePercentage')->nullable();
      $table->string('constructionRecyclingPlant')->nullable(); //(Y/N)
      $table->string('constructionRecyclingPlantName')->nullable();
      $table->string('demolitionRecyclingPlant')->nullable(); //(Y/N)
      $table->string('demolitionRecyclingPlantName')->nullable();
      $table->string('overrideWasteValues')->nullable(); //(Y/N)
      $table->string('constructionRecyclingPercentage')->nullable();
      $table->string('demolitionRecyclingPercentage')->nullable();
      $table->string('demolitionPlanR3')->nullable(); //(Y/N)
      $table->string('collectionVehicleAccess')->nullable(); //(Y/N)
      $table->string('landscapeCollection')->nullable(); //(Y/N)
      $table->string('landscapeWasteTreatment')->nullable(); //(Y/N)
      $table->string('collectionPoint')->nullable(); //(Y/N)
      $table->string('wasteCollectionStorage')->nullable(); //(Y/N)
      $table->string('wasteTreatmentFacilities')->nullable(); //(Y/N)
      $table->string('wasteEducationStaff')->nullable(); //(Y/N)
      $table->string('organicWasteStorage')->nullable(); //(Y/N)
      $table->string('organicWasteCollection')->nullable(); //(Y/N)
      $table->string('wasteManager')->nullable(); //(Y/N)	
      $table->string('wasteSegregationManually')->nullable(); //(Y/N)
      $table->string('wasteComposted')->nullable(); //(Y/N)
      $table->string('wasteEducationResident')->nullable(); //(Y/N)
      $table->string('wasteNonOrganicStorage')->nullable(); //(Y/N)
      $table->string('wasteOrganicStorage')->nullable(); //(Y/N)
      $table->string('wasteSegregationMechanically')->nullable(); //(Y/N)
      $table->string('wasteCompostedOnsite')->nullable(); //(Y/N)
      $table->string('totalTargetD')->nullable();
      $table->string('totalProposedLandD')->nullable();
      $table->string('totalProposedRecycleD')->nullable();
      $table->string('totalActualLandD')->nullable();
      $table->string('totalActualRecycleD')->nullable();
      $table->string('totalDifLandD')->nullable();
      $table->string('totalDifRecycleD')->nullable();
      $table->string('totalTargetC')->nullable();
      $table->string('totalProposedLandC')->nullable();
      $table->string('totalProposedRecycleC')->nullable();
      $table->string('totalActualLandC')->nullable();
      $table->string('totalActualRecycleC')->nullable();
      $table->string('totalDifLandC')->nullable();
      $table->string('totalDifRecycleC')->nullable();
      $table->string('totalTargetO')->nullable();
      $table->string('totalProposedLandO')->nullable();
      $table->string('totalProposedRecycleO')->nullable();
      $table->string('totalActualLandO')->nullable();
      $table->string('totalActualRecycleO')->nullable();
      $table->string('totalDifLandO')->nullable();
      $table->string('totalDifRecycleO')->nullable();
      $table->string('D_Tvolume_Units')->nullable();
      $table->string('D_Tvolume_Concrete')->nullable();
      $table->string('D_Tvolume_Steel')->nullable();
      $table->string('D_Tvolume_Aluminium')->nullable();
      $table->string('D_Tvolume_Copper')->nullable();
      $table->string('D_Tvolume_Timber')->nullable();
      $table->string('D_Tvolume_Glass')->nullable();
      $table->string('D_Tvolume_Hazardous')->nullable();
      $table->string('D_Tvolume_NonHazardous')->nullable();
      $table->string('D_Tvolume_Organic')->nullable();
      $table->string('D_Tvolume_Conduit')->nullable();
      $table->string('D_PvolumeForLandfill_Units')->nullable();
      $table->string('D_PvolumeForLandfill_Concrete')->nullable();
      $table->string('D_PvolumeForLandfill_Steel')->nullable();
      $table->string('D_PvolumeForLandfill_Aluminium')->nullable();
      $table->string('D_PvolumeForLandfill_Copper')->nullable();
      $table->string('D_PvolumeForLandfill_Timber')->nullable();
      $table->string('D_PvolumeForLandfill_Glass')->nullable();
      $table->string('D_PvolumeForLandfill_Hazardous')->nullable();
      $table->string('D_PvolumeForLandfill_NonHazardous')->nullable();
      $table->string('D_PvolumeForLandfill_Organic')->nullable();
      $table->string('D_PvolumeForLandfill_Conduit')->nullable();
      $table->string('D_PvolumeForRecycle_Units')->nullable();
      $table->string('D_PvolumeForRecycle_Concrete')->nullable();
      $table->string('D_PvolumeForRecycle_Steel')->nullable();
      $table->string('D_PvolumeForRecycle_Aluminium')->nullable();
      $table->string('D_PvolumeForRecycle_Copper')->nullable();
      $table->string('D_PvolumeForRecycle_Timber')->nullable();
      $table->string('D_PvolumeForRecycle_Glass')->nullable();
      $table->string('D_PvolumeForRecycle_Hazardous')->nullable();
      $table->string('D_PvolumeForRecycle_NonHazardous')->nullable();
      $table->string('D_PvolumeForRecycle_Organic')->nullable();
      $table->string('D_PvolumeForRecycle_Conduit')->nullable();
      $table->string('D_ActVolumeForLandfill_Units')->nullable();
      $table->string('D_ActVolumeForLandfill_Concrete')->nullable();
      $table->string('D_ActVolumeForLandfill_Steel')->nullable();
      $table->string('D_ActVolumeForLandfill_Aluminium')->nullable();
      $table->string('D_ActVolumeForLandfill_Copper')->nullable();
      $table->string('D_ActVolumeForLandfill_Timber')->nullable();
      $table->string('D_ActVolumeForLandfill_Glass')->nullable();
      $table->string('D_ActVolumeForLandfill_Hazardous')->nullable();
      $table->string('D_ActVolumeForLandfill_NonHazardous')->nullable();
      $table->string('D_ActVolumeForLandfill_Organic')->nullable();
      $table->string('D_ActVolumeForLandfill_Conduit')->nullable();
      $table->string('D_ActVolumeForRecycle_Units')->nullable();
      $table->string('D_ActVolumeForRecycle_Concrete')->nullable();
      $table->string('D_ActVolumeForRecycle_Steel')->nullable();
      $table->string('D_ActVolumeForRecycle_Aluminium')->nullable();
      $table->string('D_ActVolumeForRecycle_Copper')->nullable();
      $table->string('D_ActVolumeForRecycle_Timber')->nullable();
      $table->string('D_ActVolumeForRecycle_Glass')->nullable();
      $table->string('D_ActVolumeForRecycle_Hazardous')->nullable();
      $table->string('D_ActVolumeForRecycle_NonHazardous')->nullable();
      $table->string('D_ActVolumeForRecycle_Organic')->nullable();
      $table->string('D_ActVolumeForRecycle_Conduit')->nullable();
      $table->string('D_DifVolumeForLandfill_Units')->nullable();
      $table->string('D_DifVolumeForLandfill_Concrete')->nullable();
      $table->string('D_DifVolumeForLandfill_Steel')->nullable();
      $table->string('D_DifVolumeForLandfill_Aluminium')->nullable();
      $table->string('D_DifVolumeForLandfill_Copper')->nullable();
      $table->string('D_DifVolumeForLandfill_Timber')->nullable();
      $table->string('D_DifVolumeForLandfill_Glass')->nullable();
      $table->string('D_DifVolumeForLandfill_Hazardous')->nullable();
      $table->string('D_DifVolumeForLandfill_NonHazardous')->nullable();
      $table->string('D_DifVolumeForLandfill_Organic')->nullable();
      $table->string('D_DifVolumeForLandfill_Conduit')->nullable();
      $table->string('D_DifVolumeForRecycle_Units')->nullable();
      $table->string('D_DifVolumeForRecycle_Concrete')->nullable();
      $table->string('D_DifVolumeForRecycle_Steel')->nullable();
      $table->string('D_DifVolumeForRecycle_Aluminium')->nullable();
      $table->string('D_DifVolumeForRecycle_Copper')->nullable();
      $table->string('D_DifVolumeForRecycle_Timber')->nullable();
      $table->string('D_DifVolumeForRecycle_Glass')->nullable();
      $table->string('D_DifVolumeForRecycle_Hazardous')->nullable();
      $table->string('D_DifVolumeForRecycle_NonHazardous')->nullable();
      $table->string('D_DifVolumeForRecycle_Organic')->nullable();
      $table->string('D_DifVolumeForRecycle_Conduit')->nullable();
      $table->string('C_Tvolume_Units')->nullable();
      $table->string('C_Tvolume_Concrete')->nullable();
      $table->string('C_Tvolume_Steel')->nullable();
      $table->string('C_Tvolume_Aluminium')->nullable();
      $table->string('C_Tvolume_Copper')->nullable();
      $table->string('C_Tvolume_Timber')->nullable();
      $table->string('C_Tvolume_Glass')->nullable();
      $table->string('C_Tvolume_Hazardous')->nullable();
      $table->string('C_Tvolume_NonHazardous')->nullable();
      $table->string('C_Tvolume_Organic')->nullable();
      $table->string('C_Tvolume_Conduit')->nullable();
      $table->string('C_PvolumeForLandfill_Units')->nullable();
      $table->string('C_PvolumeForLandfill_Concrete')->nullable();
      $table->string('C_PvolumeForLandfill_Steel')->nullable();
      $table->string('C_PvolumeForLandfill_Aluminium')->nullable();
      $table->string('C_PvolumeForLandfill_Copper')->nullable();
      $table->string('C_PvolumeForLandfill_Timber')->nullable();
      $table->string('C_PvolumeForLandfill_Glass')->nullable();
      $table->string('C_PvolumeForLandfill_Hazardous')->nullable();
      $table->string('C_PvolumeForLandfill_NonHazardous')->nullable();
      $table->string('C_PvolumeForLandfill_Organic')->nullable();
      $table->string('C_PvolumeForLandfill_Conduit')->nullable();
      $table->string('C_PvolumeForRecycle_Units')->nullable();
      $table->string('C_PvolumeForRecycle_Concrete')->nullable();
      $table->string('C_PvolumeForRecycle_Steel')->nullable();
      $table->string('C_PvolumeForRecycle_Aluminium')->nullable();
      $table->string('C_PvolumeForRecycle_Copper')->nullable();
      $table->string('C_PvolumeForRecycle_Timber')->nullable();
      $table->string('C_PvolumeForRecycle_Glass')->nullable();
      $table->string('C_PvolumeForRecycle_Hazardous')->nullable();
      $table->string('C_PvolumeForRecycle_NonHazardous')->nullable();
      $table->string('C_PvolumeForRecycle_Organic')->nullable();
      $table->string('C_PvolumeForRecycle_Conduit')->nullable();
      $table->string('C_ActVolumeForLandfill_Units')->nullable();
      $table->string('C_ActVolumeForLandfill_Concrete')->nullable();
      $table->string('C_ActVolumeForLandfill_Steel')->nullable();
      $table->string('C_ActVolumeForLandfill_Aluminium')->nullable();
      $table->string('C_ActVolumeForLandfill_Copper')->nullable();
      $table->string('C_ActVolumeForLandfill_Timber')->nullable();
      $table->string('C_ActVolumeForLandfill_Glass')->nullable();
      $table->string('C_ActVolumeForLandfill_Hazardous')->nullable();
      $table->string('C_ActVolumeForLandfill_NonHazardous')->nullable();
      $table->string('C_ActVolumeForLandfill_Organic')->nullable();
      $table->string('C_ActVolumeForLandfill_Conduit')->nullable();
      $table->string('C_ActVolumeForRecycle_Units')->nullable();
      $table->string('C_ActVolumeForRecycle_Concrete')->nullable();
      $table->string('C_ActVolumeForRecycle_Steel')->nullable();
      $table->string('C_ActVolumeForRecycle_Aluminium')->nullable();
      $table->string('C_ActVolumeForRecycle_Copper')->nullable();
      $table->string('C_ActVolumeForRecycle_Timber')->nullable();
      $table->string('C_ActVolumeForRecycle_Glass')->nullable();
      $table->string('C_ActVolumeForRecycle_Hazardous')->nullable();
      $table->string('C_ActVolumeForRecycle_NonHazardous')->nullable();
      $table->string('C_ActVolumeForRecycle_Organic')->nullable();
      $table->string('C_ActVolumeForRecycle_Conduit')->nullable();
      $table->string('C_DifVolumeForLandfill_Units')->nullable();
      $table->string('C_DifVolumeForLandfill_Concrete')->nullable();
      $table->string('C_DifVolumeForLandfill_Steel')->nullable();
      $table->string('C_DifVolumeForLandfill_Aluminium')->nullable();
      $table->string('C_DifVolumeForLandfill_Copper')->nullable();
      $table->string('C_DifVolumeForLandfill_Timber')->nullable();
      $table->string('C_DifVolumeForLandfill_Glass')->nullable();
      $table->string('C_DifVolumeForLandfill_Hazardous')->nullable();
      $table->string('C_DifVolumeForLandfill_NonHazardous')->nullable();
      $table->string('C_DifVolumeForLandfill_Organic')->nullable();
      $table->string('C_DifVolumeForLandfill_Conduit')->nullable();
      $table->string('C_DifVolumeForRecycle_Units')->nullable();
      $table->string('C_DifVolumeForRecycle_Concrete')->nullable();
      $table->string('C_DifVolumeForRecycle_Steel')->nullable();
      $table->string('C_DifVolumeForRecycle_Aluminium')->nullable();
      $table->string('C_DifVolumeForRecycle_Copper')->nullable();
      $table->string('C_DifVolumeForRecycle_Timber')->nullable();
      $table->string('C_DifVolumeForRecycle_Glass')->nullable();
      $table->string('C_DifVolumeForRecycle_Hazardous')->nullable();
      $table->string('C_DifVolumeForRecycle_NonHazardous')->nullable();
      $table->string('C_DifVolumeForRecycle_Organic')->nullable();
      $table->string('C_DifVolumeForRecycle_Conduit')->nullable();
      $table->string('O_Tvolume_Units')->nullable();
      $table->string('O_Tvolume_Paper')->nullable();
      $table->string('O_Tvolume_Aluminium')->nullable();
      $table->string('O_Tvolume_Glass')->nullable();
      $table->string('O_Tvolume_Hazardous')->nullable();
      $table->string('O_Tvolume_NonHazardous')->nullable();
      $table->string('O_Tvolume_Organic')->nullable();
      $table->string('O_PvolumeForLandfill_Units')->nullable();
      $table->string('O_PvolumeForLandfill_Paper')->nullable();
      $table->string('O_PvolumeForLandfill_Aluminium')->nullable();
      $table->string('O_PvolumeForLandfill_Glass')->nullable();
      $table->string('O_PvolumeForLandfill_Hazardous')->nullable();
      $table->string('O_PvolumeForLandfill_NonHazardous')->nullable();
      $table->string('O_PvolumeForLandfill_Organic')->nullable();
      $table->string('O_PvolumeForRecycle_Units')->nullable();
      $table->string('O_PvolumeForRecycle_Paper')->nullable();
      $table->string('O_PvolumeForRecycle_Aluminium')->nullable();
      $table->string('O_PvolumeForRecycle_Glass')->nullable();
      $table->string('O_PvolumeForRecycle_Hazardous')->nullable();
      $table->string('O_PvolumeForRecycle_NonHazardous')->nullable();
      $table->string('O_PvolumeForRecycle_Organic')->nullable();
      $table->string('O_ActVolumeForLandfill_Units')->nullable();
      $table->string('O_ActVolumeForLandfill_Paper')->nullable();
      $table->string('O_ActVolumeForLandfill_Aluminium')->nullable();
      $table->string('O_ActVolumeForLandfill_Glass')->nullable();
      $table->string('O_ActVolumeForLandfill_Hazardous')->nullable();
      $table->string('O_ActVolumeForLandfill_NonHazardous')->nullable();
      $table->string('O_ActVolumeForLandfill_Organic')->nullable();
      $table->string('O_ActVolumeForRecycle_Units')->nullable();
      $table->string('O_ActVolumeForRecycle_Paper')->nullable();
      $table->string('O_ActVolumeForRecycle_Aluminium')->nullable();
      $table->string('O_ActVolumeForRecycle_Glass')->nullable();
      $table->string('O_ActVolumeForRecycle_Hazardous')->nullable();
      $table->string('O_ActVolumeForRecycle_NonHazardous')->nullable();
      $table->string('O_ActVolumeForRecycle_Organic')->nullable();
      $table->string('O_DifVolumeForLandfill_Units')->nullable();
      $table->string('O_DifVolumeForLandfill_Paper')->nullable();
      $table->string('O_DifVolumeForLandfill_Aluminium')->nullable();
      $table->string('O_DifVolumeForLandfill_Glass')->nullable();
      $table->string('O_DifVolumeForLandfill_Hazardous')->nullable();
      $table->string('O_DifVolumeForLandfill_NonHazardous')->nullable();
      $table->string('O_DifVolumeForLandfill_Organic')->nullable();
      $table->string('O_DifVolumeForRecycle_Units')->nullable();
      $table->string('O_DifVolumeForRecycle_Paper')->nullable();
      $table->string('O_DifVolumeForRecycle_Aluminium')->nullable();
      $table->string('O_DifVolumeForRecycle_Glass')->nullable();
      $table->string('O_DifVolumeForRecycle_Hazardous')->nullable();
      $table->string('O_DifVolumeForRecycle_NonHazardous')->nullable();
      $table->string('O_DifVolumeForRecycle_Organic')->nullable();
      $table->string('C_D_WasteManagementPlan')->nullable();
      $table->string('WasteEdConstructionContractors')->nullable();
      $table->string('WasteEdDemolitionContractors')->nullable();
      $table->string('WasteSegTempStoreOnsiteConstruction')->nullable();
      $table->string('WasteSegTempStoreOnsiteDemolition')->nullable();
      $table->string('PersonResponsibleCDWaste')->nullable();
      $table->string('PercentMatExistCommReused')->nullable();
      $table->string('ConstructionSegRecyclingPlant')->nullable();
      $table->string('ConstructionPlants')->nullable();
      $table->string('DemolitionSegRecyclingPlant')->nullable();
      $table->string('DemolitionPlants')->nullable();
      $table->string('OverrideCapRate')->nullable();
      $table->string('OverrideConstructionCapRate')->nullable();
      $table->string('OverrideDemolitionCapRate')->nullable();
      $table->string('O_WasteManagementPlan')->nullable();
      $table->string('AccessProvCollectVehicles')->nullable();
      $table->string('LandscapeWasteCollect')->nullable();
      $table->string('LandscapeWasteTreated')->nullable();
      $table->string('CollectionPointHazardousWaste')->nullable();
      $table->string('CollectionStorageWasteFacilities')->nullable();
      $table->string('TreatmentWasteFacilities')->nullable();
      $table->string('WasteEdNonResident')->nullable();
      $table->string('NonResidentNonorganicWasteCollectedSep')->nullable();
      $table->string('NonResidentOrganicWasteCollectedSep')->nullable();
      $table->string('NonResidentFacilityManager')->nullable();
      $table->string('NonResidentNonorganicRecycleWasteSegManOrMechPlant')->nullable();
      $table->string('NonResidentOrganicWasteComposted')->nullable();
      $table->string('WasteEdResident')->nullable();
      $table->string('ResidentNonorganicWasteCollectedSep')->nullable();
      $table->string('ResidentOrganicWasteCollectedSep')->nullable();
      $table->string('ResidentNonorganicRecycleWasteSegManOrMechPlant')->nullable();
      $table->string('ResidentOrganicWasteComposted')->nullable();
      $table->string('DemWasteComment')->nullable();
      $table->string('ConWasteComment')->nullable();
      $table->string('OpWasteComment')->nullable();
      $table->string('RecWasteComment')->nullable();
      $table->string('OpLandWasteComment')->nullable();
      $table->string('ElectricityComment')->nullable();
      $table->string('FuelComment')->nullable();
      $table->string('RenewableEnergyComment')->nullable();
      $table->string('LabourComment')->nullable();
      
      //Cost analysis Section
      $table->string('valueLandfillCurrencyD')->nullable();
      $table->string('valueLandfillConcreteD')->nullable();
      $table->string('valueLandfillSteelD')->nullable();
      $table->string('valueLandfillAluminiumD')->nullable();
      $table->string('valueLandfillCopperD')->nullable();
      $table->string('valueLandfillTimberD')->nullable();
      $table->string('valueLandfillGlassD')->nullable();
      $table->string('valueLandfillHazardousD')->nullable();
      $table->string('valueLandfillNonHazardousD')->nullable();
      $table->string('valueLandfillOrganicD')->nullable();
      $table->string('valueLandfillConduitD')->nullable();
      $table->string('valueLandfillTotalD')->nullable();
      
      $table->string('valueRecycleCurrencyD')->nullable();
      $table->string('valueRecycleConcreteD')->nullable();
      $table->string('valueRecycleSteelD')->nullable();
      $table->string('valueRecycleAluminiumD')->nullable();
      $table->string('valueRecycleCopperD')->nullable();
      $table->string('valueRecycleTimberD')->nullable();
      $table->string('valueRecycleGlassD')->nullable();
      $table->string('valueRecycleHazardousD')->nullable();
      $table->string('valueRecycleNonHazardousD')->nullable();
      $table->string('valueRecycleOrganicD')->nullable();
      $table->string('valueRecycleConduitD')->nullable();
      $table->string('valueRecycleTotalD')->nullable();
      
      $table->string('actualLandfillCurrencyD')->nullable();
      $table->string('actualLandfillConcreteD')->nullable();
      $table->string('actualLandfillSteelD')->nullable();
      $table->string('actualLandfillAluminiumD')->nullable();
      $table->string('actualLandfillCopperD')->nullable();
      $table->string('actualLandfillTimberD')->nullable();
      $table->string('actualLandfillGlassD')->nullable();
      $table->string('actualLandfillHazardousD')->nullable();
      $table->string('actualLandfillNonHazardousD')->nullable();
      $table->string('actualLandfillOrganicD')->nullable();
      $table->string('actualLandfillConduitD')->nullable();
      $table->string('actualLandfillTotalD')->nullable();
      
      $table->string('actualRecycleCurrencyD')->nullable();
      $table->string('actualRecycleConcreteD')->nullable();
      $table->string('actualRecycleSteelD')->nullable();
      $table->string('actualRecycleAluminiumD')->nullable();
      $table->string('actualRecycleCopperD')->nullable();
      $table->string('actualRecycleTimberD')->nullable();
      $table->string('actualRecycleGlassD')->nullable();
      $table->string('actualRecycleHazardousD')->nullable();
      $table->string('actualRecycleNonHazardousD')->nullable();
      $table->string('actualRecycleOrganicD')->nullable();
      $table->string('actualRecycleConduitD')->nullable();
      $table->string('actualRecycleTotalD')->nullable();
      
      $table->string('totalValuePropCurrencyD')->nullable();
      $table->string('totalValuePropConcreteD')->nullable();
      $table->string('totalValuePropSteelD')->nullable();
      $table->string('totalValuePropAluminiumD')->nullable();
      $table->string('totalValuePropCopperD')->nullable();
      $table->string('totalValuePropTimberD')->nullable();
      $table->string('totalValuePropGlassD')->nullable();
      $table->string('totalValuePropHazardousD')->nullable();
      $table->string('totalValuePropNonHazardousD')->nullable();
      $table->string('totalValuePropOrganicD')->nullable();
      $table->string('totalValuePropConduitD')->nullable();
      $table->string('totalValuePropTotalD')->nullable();
      
      $table->string('totalValueActCurrencyD')->nullable();
      $table->string('totalValueActConcreteD')->nullable();
      $table->string('totalValueActSteelD')->nullable();
      $table->string('totalValueActAluminiumD')->nullable();
      $table->string('totalValueActCopperD')->nullable();
      $table->string('totalValueActTimberD')->nullable();
      $table->string('totalValueActGlassD')->nullable();
      $table->string('totalValueActHazardousD')->nullable();
      $table->string('totalValueActNonHazardousD')->nullable();
      $table->string('totalValueActOrganicD')->nullable();
      $table->string('totalValueActConduitD')->nullable();
      $table->string('totalValueActTotalD')->nullable();
      
      
      $table->string('valueLandfillCurrencyC')->nullable();
      $table->string('valueLandfillConcreteC')->nullable();
      $table->string('valueLandfillSteelC')->nullable();
      $table->string('valueLandfillAluminiumC')->nullable();
      $table->string('valueLandfillCopperC')->nullable();
      $table->string('valueLandfillTimberC')->nullable();
      $table->string('valueLandfillGlassC')->nullable();
      $table->string('valueLandfillHazardousC')->nullable();
      $table->string('valueLandfillNonHazardousC')->nullable();
      $table->string('valueLandfillOrganicC')->nullable();
      $table->string('valueLandfillConduitC')->nullable();
      $table->string('valueLandfillTotalC')->nullable();
      
      $table->string('valueRecycleCurrencyC')->nullable();
      $table->string('valueRecycleConcreteC')->nullable();
      $table->string('valueRecycleSteelC')->nullable();
      $table->string('valueRecycleAluminiumC')->nullable();
      $table->string('valueRecycleCopperC')->nullable();
      $table->string('valueRecycleTimberC')->nullable();
      $table->string('valueRecycleGlassC')->nullable();
      $table->string('valueRecycleHazardousC')->nullable();
      $table->string('valueRecycleNonHazardousC')->nullable();
      $table->string('valueRecycleOrganicC')->nullable();
      $table->string('valueRecycleConduitC')->nullable();
      $table->string('valueRecycleTotalC')->nullable();
      
      $table->string('actualLandfillCurrencyC')->nullable();
      $table->string('actualLandfillConcreteC')->nullable();
      $table->string('actualLandfillSteelC')->nullable();
      $table->string('actualLandfillAluminiumC')->nullable();
      $table->string('actualLandfillCopperC')->nullable();
      $table->string('actualLandfillTimberC')->nullable();
      $table->string('actualLandfillGlassC')->nullable();
      $table->string('actualLandfillHazardousC')->nullable();
      $table->string('actualLandfillNonHazardousC')->nullable();
      $table->string('actualLandfillOrganicC')->nullable();
      $table->string('actualLandfillConduitC')->nullable();
      $table->string('actualLandfillTotalC')->nullable();
      
      $table->string('actualRecycleCurrencyC')->nullable();
      $table->string('actualRecycleConcreteC')->nullable();
      $table->string('actualRecycleSteelC')->nullable();
      $table->string('actualRecycleAluminiumC')->nullable();
      $table->string('actualRecycleCopperC')->nullable();
      $table->string('actualRecycleTimberC')->nullable();
      $table->string('actualRecycleGlassC')->nullable();
      $table->string('actualRecycleHazardousC')->nullable();
      $table->string('actualRecycleNonHazardousC')->nullable();
      $table->string('actualRecycleOrganicC')->nullable();
      $table->string('actualRecycleConduitC')->nullable();
      $table->string('actualRecycleTotalC')->nullable();
      
      $table->string('totalValuePropCurrencyC')->nullable();
      $table->string('totalValuePropConcreteC')->nullable();
      $table->string('totalValuePropSteelC')->nullable();
      $table->string('totalValuePropAluminiumC')->nullable();
      $table->string('totalValuePropCopperC')->nullable();
      $table->string('totalValuePropTimberC')->nullable();
      $table->string('totalValuePropGlassC')->nullable();
      $table->string('totalValuePropHazardousC')->nullable();
      $table->string('totalValuePropNonHazardousC')->nullable();
      $table->string('totalValuePropOrganicC')->nullable();
      $table->string('totalValuePropConduitC')->nullable();
      $table->string('totalValuePropTotalC')->nullable();
      
      $table->string('totalValueActCurrencyC')->nullable();
      $table->string('totalValueActConcreteC')->nullable();
      $table->string('totalValueActSteelC')->nullable();
      $table->string('totalValueActAluminiumC')->nullable();
      $table->string('totalValueActCopperC')->nullable();
      $table->string('totalValueActTimberC')->nullable();
      $table->string('totalValueActGlassC')->nullable();
      $table->string('totalValueActHazardousC')->nullable();
      $table->string('totalValueActNonHazardousC')->nullable();
      $table->string('totalValueActOrganicC')->nullable();
      $table->string('totalValueActConduitC')->nullable();
      $table->string('totalValueActTotalC')->nullable();
      
      
      $table->string('valueLandfillCurrencyO')->nullable();
    $table->string('valueLandfillPaperO')->nullable();
    $table->string('valueLandfillAluminiumO')->nullable();
    $table->string('valueLandfillGlassO')->nullable();
    $table->string('valueLandfillHazardousO')->nullable();
    $table->string('valueLandfillNonHazardousO')->nullable();
    $table->string('valueLandfillOrganicO')->nullable();
    $table->string('valueLandfillTotalO')->nullable();
      
    $table->string('valueRecycleCurrencyO')->nullable();
    $table->string('valueRecyclePaperO')->nullable();
    $table->string('valueRecycleAluminiumO')->nullable();
    $table->string('valueRecycleGlassO')->nullable();
    $table->string('valueRecycleHazardousO')->nullable();
    $table->string('valueRecycleNonHazardousO')->nullable();
    $table->string('valueRecycleOrganicO')->nullable();
    $table->string('valueRecycleTotalO')->nullable();
      
    $table->string('actualLandfillCurrencyO')->nullable();
    $table->string('actualLandfillPaperO')->nullable();
    $table->string('actualLandfillAluminiumO')->nullable();
    $table->string('actualLandfillGlassO')->nullable();
    $table->string('actualLandfillHazardousO')->nullable();
    $table->string('actualLandfillNonHazardousO')->nullable();
    $table->string('actualLandfillOrganicO')->nullable();
    $table->string('actualLandfillTotalO')->nullable();
    
    $table->string('actualRecycleCurrencyO')->nullable();
    $table->string('actualRecyclePaperO')->nullable();
    $table->string('actualRecycleAluminiumO')->nullable();
    $table->string('actualRecycleGlassO')->nullable();
    $table->string('actualRecycleHazardousO')->nullable();
    $table->string('actualRecycleNonHazardousO')->nullable();
    $table->string('actualRecycleOrganicO')->nullable();
    $table->string('actualRecycleTotalO')->nullable();
    
    $table->string('totalValuePropCurrencyO')->nullable();
    $table->string('totalValuePropPaperO')->nullable();
    $table->string('totalValuePropAluminiumO')->nullable();
    $table->string('totalValuePropGlassO')->nullable();
    $table->string('totalValuePropHazardousO')->nullable();
    $table->string('totalValuePropNonHazardousO')->nullable();
    $table->string('totalValuePropOrganicO')->nullable();
    $table->string('totalValuePropTotalO')->nullable();
    
    $table->string('totalValueActCurrencyO')->nullable();
    $table->string('totalValueActPaperO')->nullable();
    $table->string('totalValueActAluminiumO')->nullable();
    $table->string('totalValueActGlassO')->nullable();
    $table->string('totalValueActHazardousO')->nullable();
    $table->string('totalValueActNonHazardousO')->nullable();
    $table->string('totalValueActOrganicO')->nullable();
    $table->string('totalValueActTotalO')->nullable();
      
      $table->timestamps();
    });
  }

  /**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
  public function down()
  {
    //
    Schema::drop('wastes');
  }

}
