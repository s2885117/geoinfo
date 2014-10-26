<?php

class ActivitiesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {}

  public function update()
	{
		//
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
		$input = Input::all();
    if(is_null(DB::table('activities')->where('project_id', $id)->first()))
    {
      $activity = new Activitie;
      $activity->project_id = ($id);
    }
    else
    {
      $activity = Project::find($id)->activitie; 
    }
    
    //First Section
    $activity->legislationIndicators = $input['legislationIndicators'];
    $activity->nationalLegislation = $input['nationalLegislation'];
    $activity->stateTerritory = $input['stateTerritory'];
    $activity->planningLegislation = $input['planningLegislation'];
    $activity->environmentalLegislation = $input['environmentalLegislation'];
    $activity->otherLegislation = $input['otherLegislation'];
    
    //Second Section
    $activity->activitiesIndicator = $input['activitiesIndicator'];
    $activity->planningScheme = $input['planningScheme'];
    $activity->planningSchemeLand = $input['planningSchemeLand'];
    $activity->applicableLand = $input['applicableLand'];
    $activity->applicableDevelopment = $input['applicableDevelopment'];
    $activity->applicablePolicies = $input['applicablePolicies'];
    $activity->applicableEnvironmental = $input['applicableEnvironmental'];
    $activity->applicableLaw = $input['applicableLaw'];
    $activity->applicablePermits = $input['applicablePermits'];
    $activity->entryNoticePermit = $input['entryNoticePermit'];
    $activity->occupationPermit = $input['occupationPermit'];
    
    //Third Section
    $activity->environmentalIndicators = $input['environmentalIndicators'];
    $activity->bushfireOverlays = $input['bushfireOverlays'];
    $activity->floodOverlays = $input['floodOverlays'];
    $activity->landslipOverlays = $input['landslipOverlays'];
    $activity->soilsOverlays = $input['soilsOverlays'];
    $activity->vegetationOverlays = $input['vegetationOverlays'];
    $activity->siteContaminated = $input['siteContaminated'];
    $activity->requireConsideration = $input['requireConsideration'];
    $activity->ecologicalSurvey = $input['ecologicalSurvey'];
    $activity->ecologicalEntity = $input['ecologicalEntity'];
    $activity->environmentalConstraints = $input['environmentalConstraints'];
    $activity->environmentalEntity = $input['environmentalEntity'];
    
    //Fourth Section
    $activity->managementIndicators = $input['managementIndicators'];
    $activity->environmentalManagementPlan = $input['environmentalManagementPlan'];
    $activity->environmentalManagementPlanEntity = $input['environmentalManagementPlanEntity'];
    $activity->toxicityAssessment = $input['toxicityAssessment'];
    $activity->toxicityAssessmentEntity = $input['toxicityAssessmentEntity'];
    $activity->watersMonitoringPlan = $input['watersMonitoringPlan'];
    $activity->watersMonitoringPlanEntity = $input['watersMonitoringPlanEntity'];
    $activity->fieldMonitoringProgram = $input['fieldMonitoringProgram'];
    $activity->fieldMonitoringProgramEntity = $input['fieldMonitoringProgramEntity'];
    $activity->farfieldMonitoringProgram = $input['farfieldMonitoringProgram'];
    $activity->farfieldMonitoringProgramEntity = $input['farfieldMonitoringProgramEntity'];
    
    //Fifth Section
    $activity->monitoringIndicators = $input['monitoringIndicators'];
    $activity->offsetMonitoringProgram = $input['offsetMonitoringProgram'];
    $activity->offsetMonitoringProgramEntity = $input['offsetMonitoringProgramEntity'];
    $activity->offsetManagementProgram = $input['offsetManagementProgram'];
    $activity->offsetManagementProgramEntity = $input['offsetManagementProgramEntity'];
    $activity->rehabilitationManagement = $input['rehabilitationManagement'];
    $activity->rehabilitationManagementEntity = $input['rehabilitationManagementEntity'];
    $activity->wasteManagementMonitoring = $input['wasteManagementMonitoring'];
    $activity->wasteManagementMonitoringEntity = $input['wasteManagementMonitoringEntity'];
    $activity->faunaManagement = $input['faunaManagement'];
    $activity->faunaManagementEntity = $input['faunaManagementEntity'];
    $activity->floraManagement = $input['floraManagement'];
    $activity->floraManagementEntity = $input['floraManagementEntity'];
    $activity->ecologicalCommunities = $input['ecologicalCommunities'];
    $activity->ecologicalCommunitiesEntity = $input['ecologicalCommunitiesEntity'];
    $activity->waterManagement = $input['waterManagement'];
    $activity->waterManagementEntity = $input['waterManagementEntity'];
    
    //Sixth Section
    $activity->landIndicators = $input['landIndicators'];
    $activity->landownerConsent = $input['landownerConsent'];
    $activity->landownerConsentEntity = $input['landownerConsentEntity'];
    $activity->governmentLandAdministration = $input['governmentLandAdministration'];
    $activity->governmentLandAdministrationEntity = $input['governmentLandAdministrationEntity'];
    $activity->localLandTenure = $input['localLandTenure'];
    $activity->localLandTenureEntity = $input['localLandTenureEntity'];
    $activity->stateLandAdministration = $input['stateLandAdministration'];
    $activity->stateLandAdministrationEntity = $input['stateLandAdministrationEntity'];
    $activity->stateLandTenure = $input['stateLandTenure'];
    $activity->stateLandTenureEntity = $input['stateLandTenureEntity'];
    $activity->nationalLandAdministration = $input['nationalLandAdministration'];
    $activity->nationalLandAdministrationEntity = $input['nationalLandAdministrationEntity'];
    $activity->nationalLandTenure = $input['nationalLandTenure'];
    $activity->nationalLandTenureEntity = $input['nationalLandTenureEntity'];
    
    //Seventh Section
    $activity->heritageIndicators = $input['heritageIndicators'];
    $activity->nativeTitle = $input['nativeTitle'];
    $activity->nativeTitleEntity = $input['nativeTitleEntity'];
    $activity->traditionalOwners = $input['traditionalOwners'];
    $activity->traditionalOwnersEntity = $input['traditionalOwnersEntity'];
    $activity->heritageScout = $input['heritageScout'];
    $activity->heritageScoutEntity = $input['heritageScoutEntity'];
    $activity->culturalHeritage = $input['culturalHeritage'];
    $activity->culturalHeritageEntity = $input['culturalHeritageEntity'];
    $activity->culturalHeritageScout = $input['culturalHeritageScout'];
    $activity->culturalHeritageScoutEntity = $input['culturalHeritageScoutEntity'];
    
    $activity->save(); 
    return View::make('portal.activities', compact('activity', 'id'));
    
	}
  
  //Fucntion to dusplay the Activities page
	public function show()
  {
    if ((Auth::user()) !== null)
      {
    $project = Project::find(Auth::user()->project_id);
    $id = $project->id;
    $activity = DB::table('activities')->where('project_id', $id)->first();
    return View::make('portal.activities', compact('activity', 'id'));
    }
    else return Redirect::to('index');
  }
}
