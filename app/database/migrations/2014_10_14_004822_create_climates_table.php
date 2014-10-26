<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClimatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
    Schema::create('climates', function($table) {
      $table->increments('id');
      $table->integer('project_id');//input_variable
      $table->foreign('project_id')->references('id')->on('projects');
      
    $table->text('ClimateComment')->nullable();
    
    $table->string('coolingStratTarget')->nullable();
    $table->string('coolingStratProposed')->nullable();
    $table->string('coolingStratActual')->nullable();
    $table->string('coolingStratGap')->nullable();
    
    $table->string('heatingStratTarget')->nullable();
    $table->string('heatingStratProposed')->nullable();
    $table->string('heatingStratActual')->nullable();
    $table->string('heatingStratGap')->nullable();
    
    $table->string('comHardscapeHeatTarget')->nullable();
    $table->string('comHardscapeHeatProposed')->nullable();
    $table->string('comHardscapeHeatActual')->nullable();
    $table->string('comHardscapeHeatGap')->nullable();
    
    $table->string('annualWeatherConReq')->nullable();
    $table->string('annualWeatherConDoc')->nullable();
    $table->string('annualWeatherConParty')->nullable();
    
    $table->string('siteMapAnnualWeatherConReq')->nullable();
    $table->string('siteMapAnnualWeatherConDoc')->nullable();
    $table->string('siteMapAnnualWeatherConParty')->nullable();
    
    $table->string('ConSolarWindAnalysisReq')->nullable();
    $table->string('ConSolarWindAnalysisDoc')->nullable();
    $table->string('ConSolarWindAnalysisParty')->nullable();
    
    $table->string('sitePlanAdoptStratReq')->nullable();
    $table->string('sitePlanAdoptStratDoc')->nullable();
    $table->string('sitePlanAdoptStratParty')->nullable();

    $table->string('conShadowEffectReq')->nullable();
    $table->string('conShadowEffectDoc')->nullable();
    $table->string('conShadowEffectParty')->nullable();
    
    
    $table->string('advSolarWindAnalysisReq')->nullable();
    $table->string('advSolarWindAnalysisDoc')->nullable();
    $table->string('advSolarWindAnalysisParty')->nullable();
    
    $table->string('advSolarWindOutReq')->nullable();
    $table->string('advSolarWindOutDoc')->nullable();
    $table->string('advSolarWindOutParty')->nullable();
    
    $table->string('sitePlanHeatCoolStratReq')->nullable();
    $table->string('sitePlanHeatCoolStratDoc')->nullable();
    $table->string('sitePlanHeatCoolStratParty')->nullable();
    
    $table->string('streetUrbanHeatReq')->nullable();
    $table->string('streetUrbanHeatDoc')->nullable();
    $table->string('streetUrbanHeatParty')->nullable();
    
    $table->string('PropDevGreenGuideReq')->nullable();
    $table->string('PropDevGreenGuideDoc')->nullable();
    $table->string('PropDevGreenGuideParty')->nullable();

    $table->string('GovPlanDefGuideReq')->nullable();
    $table->string('GovPlanDefGuideDoc')->nullable();
    $table->string('GovPlanDefGuideParty')->nullable();
    
    $table->string('GovPlanDefInfraReq')->nullable();
    $table->string('GovPlanDefInfraDoc')->nullable();
    $table->string('GovPlanDefInfraParty')->nullable();
    
    $table->string('IncEnergyWasteEffReq')->nullable();
    $table->string('IncEnergyWasteEffDoc')->nullable();
    $table->string('IncEnergyWasteEffParty')->nullable();
   
    $table->string('MonDevIncAssistReq')->nullable();
    $table->string('MonDevIncAssistDoc')->nullable();
    $table->string('MonDevIncAssistParty')->nullable();
  
    $table->string('PropDevguideIncReq')->nullable();
    $table->string('PropDevguideIncDoc')->nullable();
    $table->string('PropDevguideIncParty')->nullable();
  
    $table->string('MonIncValueDevCurrency')->nullable();
    $table->string('MonIncValueDev')->nullable();

    $table->string('OtherDevIncApp')->nullable();
    
    $table->string('DocRateAdoptStratReq')->nullable();
    $table->string('DocRateAdoptStratDoc')->nullable();
    $table->string('DocRateAdoptStratParty')->nullable();
    
    $table->string('PhotoEvParkReq')->nullable();
    $table->string('PhotoEvParkDoc')->nullable();
    $table->string('PhotoEvParkParty')->nullable();
    
    $table->string('RevDocSitePlanStratReq')->nullable();
    $table->string('RevDocSitePlanStratDoc')->nullable();
    $table->string('RevDocSitePlanStratParty')->nullable();
 
    $table->string('PhotoEvAltCoolStratReq')->nullable();
    $table->string('PhotoEvAltCoolStratDoc')->nullable();
    $table->string('PhotoEvAltCoolStratParty')->nullable();

    $table->string('DrawHardSurfHashReq')->nullable();
    $table->string('DrawHardSurfHashDoc')->nullable();
    $table->string('DrawHardSurfHashParty')->nullable();
   
    $table->string('StreetSectUrbanHeadRedReq')->nullable();
    $table->string('StreetSectUrbanHeadRedDoc')->nullable();
    $table->string('StreetSectUrbanHeadRedParty')->nullable();
    
    $table->string('CalcComEnStratAnConsReq')->nullable();
    $table->string('CalcComEnStratAnConsDoc')->nullable();
    $table->string('CalcComEnStratAnConsParty')->nullable();
  
    $table->string('BuildGuideLegRequireReq')->nullable();
    $table->string('BuildGuideLegRequireDoc')->nullable();
    $table->string('BuildGuideLegRequireParty')->nullable();
  
    $table->string('DemMechComGuideReq')->nullable();
    $table->string('DemMechComGuideDoc')->nullable();
    $table->string('DemMechComGuideParty')->nullable();
  
    $table->string('EnOutOpTarRedReq')->nullable();
    $table->string('EnOutOpTarRedDoc')->nullable();
    $table->string('EnOutOpTarRedParty')->nullable();
  
    $table->string('PropDevNatDesGuideGreenReq')->nullable();
    $table->string('PropDevNatDesGuideGreenDoc')->nullable();
    $table->string('PropDevNatDesGuideGreenParty')->nullable();

    $table->string('GovPlanSysDesGuideReq')->nullable();
    $table->string('GovPlanSysDesGuideDoc')->nullable();
    $table->string('GovPlanSysDesGuideParty')->nullable();
 
    $table->string('GovPlanSysInfraCharIncReq')->nullable();
    $table->string('GovPlanSysInfraCharIncDoc')->nullable();
    $table->string('GovPlanSysInfraCharIncParty')->nullable();
  
    $table->string('TotValIncDevAgreeCurrency')->nullable();
    $table->string('TotValIncDevAgreeValue')->nullable();
   
    $table->string('MonIncImpDevReg')->nullable();
    
    $table->string('OtherIncImpDevReg')->nullable();
      
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
    Schema::drop('climates');
	}

}
