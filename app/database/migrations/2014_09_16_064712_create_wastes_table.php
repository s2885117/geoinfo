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
                //$table->boolean('overrideOfficeValue')->nullable();
                                                
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
                $table->string('overrideSchoolValue')->nullable(); //(Y/N)
                $table->string('schoolGrossUnit')->nullable();
                $table->string('schoolGrossArea')->nullable();
                $table->string('schoolNetUnit')->nullable();
                $table->string('schoolNetArea')->nullable();
                $table->string('overrideSchoolValue')->nullable(); //(Y/N)
                                  
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
	}

}
