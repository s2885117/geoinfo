<?php
$html = '<html><head>'
      . '<title>Summary Page</title>'
  . '<script type="text/javascript" src="js/graphs.js"></script>'
  . '<style>'
  . 'table, td {'
  . 'border: solid 1px black;' 
  . 'text-align:center;}' 
  . 'table {'
  . 'margin: 0 auto;}'
  . 'h3 {'
  . 'border-bottom: solid 1px black;'
  . 'font-size: 21px;}'
  . '</style></head><body>'
  . '<h1 style="text-align:center;">Report Summary</h1>'
  . '<br /><br />'
  . '<img src="http://oi59.tinypic.com/25sopl2.jpg" alt= "HaBUtek" width="833px" height="490px" style="margin-left: 90px;" />';
     


/***********************Start of the Overview Page (General Information)***********************/

if(isset($overview)){

$html .= '<div style="page-break-after:always;"></div>'
    . '<h2>General Information</h2>'
    . 'Project Description:'
    . '<br /><br />'
    . $overview->ProjDescComment
    . '<br /><br />'
    . 'Project Name: ' . $overview->projectName
    . '<br />'
    . 'Target Project Start Date: ' . $overview->startDate
    . '<br />'
    . 'Approval Cost Code: ' . $overview->approvalCost
    . '<br />'
    . 'Initiating Project Manager: ' . $overview->projectManager
    . '<br />'
    . 'Contact Number: ' . $overview->contactNumber
    . '<br />'
    . 'Project Team: ' . $overview->projectTeam
    . '<br />'
    . 'State Government: ' . $overview->stateGovernment
    . '<br />'
    . 'Property Name: ' . $overview->propertyName
    . '<br />'
    . 'Land Tenure: ' . $overview->landTenureDrop . ' ' . $overview->landTenureText
    . '<br />'
    . 'Landowner Name: ' . $overview->landownerName
    . '<br />'
    . 'Regulatory Authority: ' . $overview->regulatoryAuthority
    . '<br />'
    . 'Landowner Contact Details: ' . $overview->landownerDetails
    . '<br />'
    . 'Local Government: ' . $overview->localGovernment
    . '<br />'
    . 'Reference to Documents/Maps: ' . $overview->docsReference
    . '<br />'
    . 'Area per Lot (m&#94;2): ' . $overview->areaLot
    . '<br />'
    . 'GPS Coordinates: ' . $overview->gpsCoordinates
    . '<br />'
    . 'Lot on Plan: ' . $overview->lotPlan1 . ' ' . $overview->lotPlan2
    . '<br />'
    
  
  
    . '<br /><br /><hr />'

/********************************End of the Overview Page (General Information)********************************/

/******************************Start of the Overview Page (Design Team Details)********************************/

    . '<h2>Design Team Details</h2>'
    . 'Developer: ' . $overview->developerName
    . '<br />'
    . 'Urban Planner: ' . $overview->urbanPlannerName
    . '<br />'
    . 'Architect: ' . $overview->architectName
    . '<br />'
    . 'Accountant: ' . $overview->accountantName
    . '<br />'
    . 'Legal Team: ' . $overview->legalTeam
    . '<br />'
    . 'Civil Engineer: ' . $overview->civilEngineer
    . '<br />'
    . 'Structural/Construction Engineer: ' . $overview->structuralConstructionEngineer
    . '<br />'
    . 'Ecologist: ' . $overview->ecologistName
    . '<br />'
    . 'Landscape Architect: ' . $overview->landscapeArchitect
    . '<br />'
    . 'Traffic Engineer: ' . $overview->trafficEngineer
    . '<br />'
    . 'Surveyor: ' . $overview->surveyor
    . '<br />'
    . 'Geotechnical Specialist: ' . $overview->geotechnicalSpecialist
    . '<br />'
    . 'Developer Landowner Relations Advisor: ' . $overview->relationsAdvisor
    . '<br />'
    . 'Acoustic Engineer: ' . $overview->acousticEngineer
    . '<br />'
    . 'Hydrology Engineer: ' . $overview->hydrologyEngineer
    . '<br />'
    . 'Air Quality Specialist: ' . $overview->airQualitySpecialist
    . '<br />'
      
    . '<br /><br /><hr />'

/********************************End of the Overview Page (Design Team Details)********************************/

/*******************************Start of the Overview Page (Type of Development)*******************************/

    . '<h2>Type of Development</h2>'
    . '<br />'
    . '<h3>Land Subdivision Site Summary</h3>'
    . 'Total No of Sites: ' . $overview->tResidentialSites
    . '<br />'
    . 'Total metres of road: ' . $overview->tMetresRoad
    . '<br />'
    . 'Total area of parkland proposed: ' . $overview->tParklandProposed
    . '<br /><br />'
  
    . '<h3>Single Site Summary</h3>'
    . 'Total Site Area: ' . $overview->tSiteArea
    . '<br />'
    . 'Number of Buildings: ' . $overview->numberBuildings
    . '<br />'
    . 'Total Building GFA: ' . $overview->tBuildingGFA
    . '<br />'
    . 'Total Building Site Coverage: ' . $overview->tBuildingSite
    . '<br />'
    . 'Total Building Height: ' . $overview->tBuildingHeight
    . '<br />'
    . 'Total landscape site coverage: ' . $overview->tLandscapeSite
    . '<br />'
    . 'Total hardstand site coverage: ' . $overview->tHardstandSite
    . '<br />'
    . 'Total in-ground infrastructure length: ' . $overview->tIngroundInfrastructure
    . '<br />'
    . 'Onsite Sewerage Treatment Plan: ' . $overview->sewerageTreatmentPlan
    . '<br />'
    . 'Onsite Water Treatment Plant: ' . $overview->waterTreatmentPlan
    . '<br />'
    . 'Onsite Water Storage Units: ' . $overview->waterStorageUnit
    . '<br /><br />'
  
    . '<h3>Building Residential Format</h3>'
    . 'Description of Development: '
    . '<br /><br />'
    . $overview->BuildResFormComment
    . '<br /><br />'
    . 'No of 4 bedroom plus units: ' . $overview->nFourBeds
    . '<br />'
    . 'No of 3 bedroom units: ' . $overview->nThreeBeds
    . '<br />'
    . 'No of 2 bedroom units: ' . $overview->nTwoBeds
    . '<br />'
    . 'No of 1 bedroom units: ' . $overview->nOneBeds
    . '<br />'
    . 'Total number of units: ' . $overview->BuildResTotalUnit
    . '<br />'
    . 'No of carparks: ' . $overview->nResCarPark
    . '<br /><br />'
  
    . '<h3>Building Commercial Format</h3>'
    . 'Description of Development: '
    . '<br /><br />'
    . $overview->BuildComFormComment
    . '<br /><br />'
    . 'No of Units above 500 m&#94;2: ' . $overview->n500
    . '<br />'
    . 'No of Units between 250 and 500 m&#94;2: ' . $overview->n250and500
    . '<br />'
    . 'No of Units between 125 and 250 m&#94;2: ' . $overview->n125and250
    . '<br />'
    . 'No of Units below 125 m&#94;2: ' . $overview->nBelow125
    . '<br />'
    . 'Total number of units: ' . $overview->BuildComTotalUnit
    . '<br />'
    . 'No of carparks: ' . $overview->nComCarPark
    . '<br /><br />'
  
    . '<h3>Building Industrial Format</h3>'
    . 'Description of Development: '
    . '<br /><br />'
    . $overview->BuildIndFormComment
    . '<br /><br />'
  
    . '<div style="page-break-after:always;"></div>'
    . 'No of Units above 2500 m&#94;2: ' . $overview->n2500
    . '<br />'
    . 'No of Units between 1000 and 2500 m&#94;2: ' . $overview->n1000and2500
    . '<br />'
    . 'No of Units between 500 and 1000 m&#94;2: ' . $overview->n500and1000
    . '<br />'
    . 'No of Units below 500 m&#94;2: ' . $overview->nBelow500
    . '<br />'
    . 'Total number of units: ' . $overview->BuildIndTotalUnit
    . '<br />'
    . 'No of carparks: ' . $overview->nIndCarPark
    . '<br /><br />'
  
    . '<h3>Buffer Requirements to Infrastructure</h3>'
    . 'Buffer to Buildings: ' . $overview->bufferedBuildings
    . '<br />'
    . 'Buffer to infrastructure plant: ' . $overview->bufferInfrastructure
    . '<br />'
    . 'Buffer to inground infrastructure: ' . $overview->bufferInground
    . '<br />'
    . 'No of carparks: ' . $overview->nInfraCarPark
    . '<br /><br />'
  
    . '<h3>Development Format</h3>'
    . 'Description of Development: '
    . '<br /><br />'
    . $overview->DevFormComment
    . '<br /><br />'
    . 'Length of footpath/ bikeway (METRES): ' . $overview->lFootpathBike
    . '<br />'
    . 'Max. distance to parks (METRES): ' . $overview->mLengthParks
    . '<br />'
    . 'Max. distance to shops (METRES): ' . $overview->mLengthShops
    . '<br />'
    . 'Max. distance to primary school (METRES): ' . $overview->mLengthSchool
    . '<br />'
    . 'Max. distance to public transport (METRES): ' . $overview->mLengthPublicTransport
    . '<br />'
    . 'Opportunity for public transport within development: ' . $overview->publicTransport
    . '<br />'
    . 'Max. distance to community faciltiies (METRES): ' . $overview->mLenthFacilities
    . '<br /><br />'
  
    . '<h3>Residential</h3>'
    . 'Residential Gross Floor Area: ' . $overview->residentialOGrossArea . ' ' . $overview->residentialGrossUnit
    . '<br />'
    . 'Total Site Cover: ' . $overview->residentialSiteCover . ' ' . $overview->residentialNetUnit 
    . '<br /><br />'
  
    . '<h3>Office</h3>'
    . 'Office Gross Floor Area: ' . $overview->officeOGrossArea . ' ' . $overview->officeGrossUnit
    . '<br />'
    . 'Total Site Cover: ' . $overview->officeSiteCover . ' ' . $overview->officeNetUnit 
    . '<br /><br />'
  
    . '<h3>Retail</h3>'
    . 'Retail Gross Floor Area: ' . $overview->retailGrossArea . ' ' . $overview->retailGrossUnit
    . '<br />'
    . 'Total Site Cover: ' . $overview->retailSite . ' ' . $overview->retailNetUnit
    . '<br /><br />'
  
    . '<h3>School</h3>'
    . 'School Gross Floor Area: ' . $overview->schoolGrossArea . ' ' . $overview->schoolGrossUnit
    . '<br />'
    . 'Total Site Cover: ' . $overview->schoolSite . ' ' . $overview->schoolNetUnit
    . '<br /><br />'
  
    . '<h3>Hospital</h3>'
    . 'Hospital Gross Floor Area: ' . $overview->hospitalGrossArea . ' ' . $overview->hospitalGrossUnit
    . '<br />'
    . 'Total Site Cover: ' . $overview->hospitalSite . ' ' . $overview->hospitalNetUnit
    . '<br /><br />'
  
    . '<h3>Community/ Community Health Centre</h3>'
    . 'Community Gross Floor Area: ' . $overview->communityGrossArea . ' ' . $overview->communityGrossUnit
    . '<br />'
    . 'Total Site Cover: ' . $overview->communitySite . ' ' . $overview->communityNetUnit
    . '<br /><br />'
  
    . '<h3>Other Type</h3>'
    . 'Other Gross Floor Area: ' . $overview->otherGrossArea . ' ' . $overview->otherGrossUnit
    . '<br />'
    . 'Total Site Cover: ' . $overview->otherSite . ' ' . $overview->otherNetUnit
    . '<br />'


    . '<br /><br /><hr />';
}

/********************************End of the Overview Page (Type of Development)********************************/

/***************************Start of the Activities Page (Applicable Legislation)*****************************/
 if(isset($activity)){

$html .= '<div style="page-break-after:always;"></div>'
    . '<h2>Applicable Legislation</h2>'
    . 'Describe the relation of these indicators to the proposed development: '
    . '<br /><br />'
    . $activity->legislationIndicators
    . '<br /><br />'
    . 'National Legislation: ' . $activity->nationalLegislation 
    . '<br />'
    . 'State / Territory/ Provence/ Department (Fr) Legislation: ' . $activity->stateTerritory
    . '<br />'
    . 'Planning Legislation: ' . $activity->planningLegislation
    . '<br />'
    . 'Environmental Legislation: ' . $activity->environmentalLegislation
    . '<br />'
    . 'Other Legislation: ' . $activity->otherLegislation
    . '<br />'
  
  
    . '<br /><br /><hr />'

/******************************End of the Activities Page (Applicable Legislation)****************************/

/**************************Start of the Activities Page (Approval Process Activities)*************************/

    . '<h2>Approval Process Activities</h2>'
    . 'Describe the relation of these indicators to the proposed development: '
    . '<br /><br />'
    . $activity->activitiesIndicator
    . '<br /><br />'
    . 'Applicable Planning Scheme: ' . $activity->planningScheme
    . '<br />'
    . 'Applicable Planning Scheme Land Use Definitions: ' . $activity->planningSchemeLand
    . '<br />'
    . 'Applicable Land use Zones/ Domains/ Precincts/ Land-Use Plan Areas: ' . $activity->applicableLand
    . '<br />'
    . 'Applicable Development Codes: ' . $activity->applicableDevelopment
    . '<br />'
    . 'Applicable Planning Scheme Policies: ' . $activity->applicablePolicies
    . '<br />'
    . 'Applicable Environmental Approvals required: ' . $activity->applicableEnvironmental
    . '<br />'
    . 'Applicable Local Law permits required: ' . $activity->applicableLaw
    . '<br />'
    . 'Any other permits/ licenses required: ' . $activity->applicablePermits
    . '<br />'
    . 'Is an entry notice/ permit to traverse required: ' . $activity->entryNoticePermit
    . '<br />'
    . 'Is an occupation permit required? ' . $activity->occupationPermit
    . '<br />' 
      
    . '<br /><br /><hr />'

/***************************End of the Activities Page (Approval Process Activities)***************************/

/***********************Start of the Activities Page (Significant Environmental Risk(s))***********************/
  
    . '<h2>Significant Environmental Risk(s)</h2>'
    . 'Describe the relation of these indicators to the proposed development: '
    . '<br /><br />'
    . $activity->environmentalIndicators
    . '<br /><br />'
    . 'Is this site affected by planning scheme bushfire overlays? ' . $activity->bushfireOverlays
    . '<br />'
    . 'Is this site affected by planning scheme flood overlays? ' . $activity->floodOverlays
    . '<br />'
    . 'Is this site affected by planning scheme landslip overlays? ' . $activity->landslipOverlays
    . '<br />'
    . 'Is this site affected by planning scheme acid sulfate soils overlays? ' . $activity->soilsOverlays
    . '<br />'
    . 'Is this site affected by planning scheme or related party protected vegetation overlays? ' . $activity->vegetationOverlays
    . '<br />'
    . 'Is this site affected by contaminated lands considerations? ' . $activity->siteContaminated
    . '<br />'
    . 'Any other matters that require consideration? ' . $activity->requireConsideration
    . '<br />'
    . 'Is an Ecological Survey Required? ' . $activity->ecologicalSurvey . ' ' . $activity->ecologicalEntity
    . '<br />'
    . 'Is an Environmental Constraints Assessment Required? ' . $activity->environmentalConstraints . ' ' . $activity->environmentalEntity
    . '<br />'
  
    . '<br /><br /><hr />'

/************************End of the Activities Page (Significant Environmental Risk(s))************************/

/****************Start of the Activities Page (Receiving Environment Management Plan(s) (REMP))****************/

    . '<h2>Receiving Environment Management Plan(s) (REMP)</h2>'
    . 'Describe the relation of these indicators to the proposed development: '
    . '<br /><br />'
    . $activity->managementIndicators
    . '<br /><br />'
    . 'Is a Receiving Environment Management Plan required? ' . $activity->environmentalManagementPlan . ' ' . $activity->environmentalManagementPlanEntity
    . '<br />'
    . 'Is a direct toxicity assessment required? ' . $activity->toxicityAssessment . ' ' . $activity->toxicityAssessmentEntity
    . '<br />'
    . 'Is a receiving waters monitoring plan required? ' . $activity->watersMonitoringPlan . ' ' . $activity->watersMonitoringPlanEntity
    . '<br />'
    . 'Is a Near-field Monitoring Program Required? ' . $activity->fieldMonitoringProgram . ' ' . $activity->fieldMonitoringProgramEntity
    . '<br />'
    . 'Is a Far-field Monitoring Program Required? ' . $activity->farfieldMonitoringProgram . ' ' . $activity->farfieldMonitoringProgramEntity
    . '<br />'

    . '<br /><br /><hr />'

/*****************End of the Activities Page (Receiving Environment Management Plan(s) (REMP))*****************/

/******************Start of the Activities Page (Management and Monitoring Programs (MMP))*********************/

    . '<h2>Management and Monitoring Programs (MMP)</h2>'
    . 'Describe the relation of these indicators to the proposed development: '
    . '<br /><br />'
    . $activity->monitoringIndicators
    . '<br /><br />'
    . 'Is an Off-set Monitoring Program Required? ' . $activity->offsetMonitoringProgram . ' ' . $activity->offsetMonitoringProgramEntity
    . '<br />'
    . 'Is a Off-set Management Program Required? ' . $activity->offsetManagementProgram . ' ' . $activity->offsetManagementProgramEntity
    . '<br />'
    . 'Is a Rehabilitation management and Monitoring Plan required? ' . $activity->rehabilitationManagement . ' ' . $activity->rehabilitationManagementEntity
    . '<br />'
    . 'Is a Waste Management Monitoring Program Required? ' . $activity->wasteManagementMonitoring . ' ' . $activity->wasteManagementMonitoringEntity
    . '<br />'
    . 'Is a Threatened Fauna Management Monitoring Program Required? ' . $activity->faunaManagement . ' ' . $activity->faunaManagementEntity
    . '<br />'
    . 'Is a Threatened Flora Management Monitoring Program Required? ' . $activity->floraManagement . ' ' . $activity->floraManagementEntity
    . '<br />'
    . 'Is an Ecological Communities/ species Management Monitoring Program Required? ' . $activity->ecologicalCommunities . ' ' . $activity->ecologicalCommunitiesEntity
    . '<br />'
    . 'Is a Water Management Monitoring Program Required? ' . $activity->waterManagement . ' ' . $activity->waterManagementEntity
    . '<br />'  
  
    . '<br /><br /><hr />'

/********************End of the Activities Page (Management and Monitoring Programs (MMP))********************/

/*****************************Start of the Activities Page (Land Access)***************************************/

    . '<h2>Land Access</h2>'
    . 'Describe the relation of these indicators to the proposed development: '
    . '<br /><br />'
    . $activity->landIndicators
    . '<br /><br />'
    . 'Has land-owner consent been granted for the development? ' . $activity->landownerConsent . ' ' . $activity->landownerConsentEntity
    . '<br />'
    . 'Is local government land administration related consent required for the development? ' . $activity->governmentLandAdministration . ' ' . $activity->governmentLandAdministrationEntity
    . '<br />'
    . 'Is local government land tenure related consent required for the development? ' . $activity->localLandTenure . ' ' . $activity->localLandTenureEntity
    . '<br />'
    . 'Is state government land administration related consent required for the development? ' . $activity->stateLandAdministration . ' ' . $activity->stateLandAdministrationEntity
    . '<br />'
    . 'Is state government land tenure related consent required for the development? ' . $activity->stateLandTenure . ' ' . $activity->stateLandTenureEntity
    . '<br />'
    . 'Is national government land administration related consent required for the development? ' . $activity->nationalLandAdministration . ' ' . $activity->nationalLandAdministrationEntity
    . '<br />'
    . 'Is national government land tenure related consent required for the development? ' . $activity->nationalLandTenure . ' ' . $activity->nationalLandTenureEntity
    . '<br />'
  
    . '<br /><br /><hr />'
/********************************End of the Activities Page (Land Access)**************************************/

/******************Start of the Activities Page (Cultural Heritage/Native Title Team)**************************/

    . '<h2>Cultural Heritage/Native Title Team</h2>'
    . 'Describe the relation of these indicators to the proposed development: ' 
    . '<br /><br />'
    . $activity->heritageIndicators
    . '<br /><br />'
    . 'Is the site affected by Native Title/ First Nations consent requirements under law? ' . $activity->nativeTitle . ' ' . $activity->nativeTitleEntity
    . '<br />'
    . 'Is a land use agreement or similar authority required from the Traditional Owners/ First Nations representatives? ' . $activity->traditionalOwners . ' ' . $activity->traditionalOwnersEntity
    . '<br />'
    . 'Is a cultural heritage scout in compliance with Traditional Owners/ First Nations related legislation required? ' . $activity->heritageScout . ' ' . $activity->heritageScoutEntity
    . '<br />'
    . 'Is the site affected by any other cultural heritage considerations? ' . $activity->culturalHeritage . ' ' . $activity->culturalHeritageEntity
    . '<br />'
    . 'Is any other form of cultural heritage scout required? ' . $activity->culturalHeritageScout . ' ' . $activity->culturalHeritageScoutEntity
    . '<br />'
  
  
    . '<br /><br /><hr />';
 }
/*********************End of the Activities Page (Cultural Heritage/Native Title Team)*************************/

/***************Start of the Site Conditions Page (Buildings and Infrastructure to be Demolished)**************/
if(isset($siteCondition)){

$html .= '<div style="page-break-after:always;"></div>'
    . '<h2>Buildings and Infrastructure to be Demolished</h2>'
    . 'Description of Buildings and Infrastructure to be demolished: '
    . '<br /><br />'
    . $siteCondition->BuildInfraDemComment
    . '<br /><br />'
    . 'Are there any existing building(s) within the community: ' . $siteCondition->communityBuilding
    . '<br />'
    . 'Is there any existing public realm Infrastructure within the comunity: ' . $siteCondition->communityInfrastructure
    . '<br /><br />'
  
    . '<h3>Existing Building(s)</h3>'
    . 'Total Gross Floor Area: ' . $siteCondition->floorAreaUnit . ' ' . $siteCondition->floorArea
    . '<br /><br />'
    
    . '<h3>Existing Public Realm Infrastructure</h3>'
    . 'Total Area: ' . $siteCondition->infrastructureAreaUnit . ' ' . $siteCondition->infrastructureArea
    . '<br />'
  
    . '<br /><br /><hr />'
  
/**************End of the Site Conditions Page (Buildings and Infrastructure to be Demolished)*****************/

/**************************Start of the Site Conditions Page (Neighbouring Land Uses)**************************/

    . '<h2>Neighbouring Land Uses</h2>'
    . 'Describe the neighbouring land uses to the development site (include the radius from the development site used in describing the surrounding uses): '
    . '<br /><br />'
    . $siteCondition->NeighLandUseComment
    . '<br /><br />'
    . 'North of Site: ' . $siteCondition->northSite
    . '<br />'
    . 'South of Site: ' . $siteCondition->southSite
    . '<br />'
    . 'East of Site: ' . $siteCondition->eastSite
    . '<br />'
    . 'West of Site: ' . $siteCondition->westSite
    . '<br />'
    . 'Nearest Resident: ' . $siteCondition->nearestResident
    . '<br />'
    . 'Nearest Commercial: ' . $siteCondition->nearestCommercial
    . '<br />'
    . 'Nearest School: ' . $siteCondition->nearestSchool
    . '<br />'
    . 'Nearest Hospital: ' . $siteCondition->nearestHospital
    . '<br />'
    . 'Nearest Community/ Community Health Centre: ' . $siteCondition->nearestCommunity
    . '<br />'
    . 'Nearest Parkland: ' . $siteCondition->nearestParkland
    . '<br />'
    . 'Nearest Industrial: ' . $siteCondition->nearestIndustrial
    . '<br /><br />'
  
    . '<h3>Natural Environment Features</h3>'
    . 'Waterways: ' . $siteCondition->waterways
    . '<br />'
    . 'Drainage: ' . $siteCondition->drainage
    . '<br />'
    . 'Vegetation: ' . $siteCondition->vegetation
    . '<br />'
    . 'Fauna: ' . $siteCondition->fauna
    . '<br />'
    . 'Acid Sulfate Soils: ' . $siteCondition->acidSulfateSoils
    . '<br />'
    . 'Good Quality Agriculatural Lands: ' . $siteCondition->qualityAgricultureLand
    . '<br />'
    . 'Lands: ' . $siteCondition->lands
    . '<br />'
    . 'Contaminated Lands: ' . $siteCondition->contaminatedLands
    . '<br />'

  
    . '<br /><br /><hr />'  
  
/***************************End of the Site Conditions Page (Neighbouring Land Uses)***************************/

/***********************Start of the Site Conditions Page (Geological Characteristic)*************************/

    . '<h2>Geological Characteristic</h2>'
    . 'Describe the geological characteristics of the development site and surrounding lands: '
    . '<br /><br />'
    . $siteCondition->GeoCharComment
    . '<br /><br /><br />'
    . '<table><thead><tr>'
    . '<th>Period/Epoch</th>'
    . '<th>Geological Symbol</th>'
    . '<th>Lithological Description</th>'
    . '</tr></thead>'
    . '<tbody><tr>'
    . '<td>' . $siteCondition->periodEpoch1 . '</td>'
    . '<td>' . $siteCondition->geologicalSymbol1 . '</td>'
    . '<td>' . $siteCondition->lithologicalDescription1 . '</td>'
    . '</tr><tr>'
    . '<td>' . $siteCondition->periodEpoch2 . '</td>'
    . '<td>' . $siteCondition->geologicalSymbol2 . '</td>'
    . '<td>' . $siteCondition->lithologicalDescription2 . '</td>'
    . '</tr><tr>'
    . '<td>' . $siteCondition->periodEpoch3 . '</td>'
    . '<td>' . $siteCondition->geologicalSymbol3 . '</td>'
    . '<td>' . $siteCondition->lithologicalDescription3 . '</td>'
    . '</tr></tbody></table>'
  
    . '<br />'

    . '<br /><br /><hr />' 

/*************************End of the Site Conditions Page (Geological Characteristic)*************************/

/***************************Start of the Site Conditions Page (Soil Characteristic)****************************/

    . '<h2>Soil Characteristic</h2>'
    . 'Describe the soil characteristics of the development site and surrounding lands: '
    . '<br /><br />'
    . $siteCondition->SoilCharComment
    . '<br /><br /><br />'
  
    . '<table><thead><tr>'
    . '<th>Soil Sample Depth</th>'
    . '<th>Soil Classification</th>'
    . '<th>Description</th>'
    . '</tr></thead>'
    . '<tbody><tr>'
    . '<td>' . $siteCondition->soilSampleDepth1 . '</td>'
    . '<td>' . $siteCondition->soilClassification1 . '</td>'
    . '<td>' . $siteCondition->description1 . '</td>'
    . '</tr><tr>'
    . '<td>' . $siteCondition->soilSampleDepth2 . '</td>'
    . '<td>' . $siteCondition->soilClassification2 . '</td>'
    . '<td>' . $siteCondition->description2 . '</td>'
    . '</tr><tr>'
    . '<td>' . $siteCondition->soilSampleDepth3 . '</td>'
    . '<td>' . $siteCondition->soilClassification3 . '</td>'
    . '<td>' . $siteCondition->description3 . '</td>'
    . '</tr></tbody></table>'
  
    . '<br />'
  
    . '<br /><br /><hr />'   
  
/*****************************End of the Site Conditions Page (Soil Characteristic)****************************/

/******************Start of the Site Conditions Page (Natural Environment Characteristics)*********************/

    . '<h2>Natural Environment Characteristics</h2>'  
    . 'Describe the natural environment within which the development is occurring: '
    . '<br /><br />'
    . $siteCondition->NatEnvCharComment
    . '<br /><br />'
 
    . '<br /><br /><hr />';  
}
/********************End of the Site Conditions Page (Natural Environment Characteristics)*********************/

/***********************Start of the Infrastructure Page (Infrastructure for Operation)************************/
if (isset($infrastructure)){

$html .= '<div style="page-break-after:always;"></div>'
    . '<h2>Infrastructure for Operation</h2>'
    . 'Describe the operations of the proposed development (e.g. proposed hours of operation, number of personnel, vehicle movement, proposed site visitor numbers, proposed residential population, proposed employee population):'
    . '<br /><br />'
    . $infrastructure->InfraforOpComment
    . '<br /><br />'
    . '<div style="page-break-after:always;"></div>'
    . '<table><thead><tr>'
    . '<th>Infrastructure for operation</th>'
    . '<th>No.</th>'
    . '<th>Comments / Description / Indicative Area Size / Length etc.</th>'
    . '</tr></thead>'
    . '<tbody><tr>'
    . '<td>Access Roads</td>'
    . '<td>' . $infrastructure->accessRoadsNo . '</td>'
    . '<td>' . $infrastructure->accessRoadsD . '</td>'
    . '</tr><tr>'
    . '<td>Infrastructure Corridors</td>'
    . '<td>' . $infrastructure->infrastructureCorridorsNo . '</td>'
    . '<td>' . $infrastructure->infrastructureCorridorsD . '</td>'
    . '</tr><tr>'
    . '<td>Fixed Infrastructure (e.g. substation)</td>'
    . '<td>' . $infrastructure->fixedInfrastructureNo . '</td>'
    . '<td>' . $infrastructure->fixedInfrastructureD . '</td>'
    . '</tr><tr>'
    . '<td>Water Tanks</td>'
    . '<td>' . $infrastructure->waterTanksNo . '</td>'
    . '<td>' . $infrastructure->waterTanksD . '</td>'
    . '</tr><tr>'
    . '<td>Site office</td>'
    . '<td>' . $infrastructure->siteOfficeNo . '</td>'
    . '<td>' . $infrastructure->siteOfficeD . '</td>'
    . '</tr><tr>'
    . '<td>Communications Tower</td>'
    . '<td>' . $infrastructure->communicationsTowerNo . '</td>'
    . '<td>' . $infrastructure->communicationsTowerD . '</td>'
    . '</tr><tr>'
    . '<td>Waste Disposal Pit (e.g. oils)</td>'
    . '<td>' . $infrastructure->wasteDisposalNo . '</td>'
    . '<td>' . $infrastructure->wasteDisposalD . '</td>'
    . '</tr><tr>'
    . '<td>On-site water treatment plant</td>'
    . '<td>' . $infrastructure->waterTreatmentNo . '</td>'
    . '<td>' . $infrastructure->waterTreatmentD . '</td>'
    . '</tr><tr>'
    . '<td>On-site sewerage treatment plant</td>'
    . '<td>' . $infrastructure->sewerageTreatmentNo . '</td>'
    . '<td>' . $infrastructure->sewerageTreatmentD . '</td>'
    . '</tr><tr>'
    . '<td>On-site renewable energy plant</td>'
    . '<td>' . $infrastructure->renewableEnergyNo . '</td>'
    . '<td>' . $infrastructure->renewableEnergyD . '</td>'
    . '</tr><tr>'
    . '<td>On-site water feature</td>'
    . '<td>' . $infrastructure->waterFeatureNo . '</td>'
    . '<td>' . $infrastructure->waterFeatureD . '</td>'
    . '</tr><tr>'
    . '<td>Exhaust stack</td>'
    . '<td>' . $infrastructure->exhaustStackNo . '</td>'
    . '<td>' . $infrastructure->exhaustStackD . '</td>'
    . '</tr><tr>'
    . '<td>On-site community cooling faciltiies</td>'
    . '<td>' . $infrastructure->communityCoolingNo . '</td>'
    . '<td>' . $infrastructure->communityCoolingD . '</td>'
    . '</tr><tr>'
    . '<td>Heavy Vehicle Turnarounds</td>'
    . '<td>' . $infrastructure->vehicleTurnaroundsNo . '</td>'
    . '<td>' . $infrastructure->vehicleTurnaroundsD . '</td>'
    . '</tr><tr>'
    . '<td>Above-ground carparking</td>'
    . '<td>' . $infrastructure->aboveCarParkingNo . '</td>'
    . '<td>' . $infrastructure->aboveCarParkingD . '</td>'
    . '</tr><tr>'
    . '<td>Under-ground carparking</td>'
    . '<td>' . $infrastructure->underCarParkingNo . '</td>'
    . '<td>' . $infrastructure->underCarParkingD . '</td>'
    . '</tr><tr>'
    . '<td>On-site flood mitigation infrastructure (e.g.pumps)</td>'
    . '<td>' . $infrastructure->floodMitigationNo . '</td>'
    . '<td>' . $infrastructure->floodMitigationD . '</td>'
    . '</tr><tr>'
    . '<td>Irrigation Areas</td>'
    . '<td>' . $infrastructure->irrigationAreasNo . '</td>'
    . '<td>' . $infrastructure->irrigationAreasD . '</td>'
    . '</tr><tr>'
    . '<td>Irrigation Facilities (pumps, tanks, etc.)</td>'
    . '<td>' . $infrastructure->irrigationFacilitiesNo . '</td>'
    . '<td>' . $infrastructure->irrigationFacilitiesD . '</td>'
    . '</tr><tr>'
    . '<td>Irrigation Water Pipes</td>'
    . '<td>' . $infrastructure->waterPipesNo . '</td>'
    . '<td>' . $infrastructure->waterPipesD . '</td>'
    . '</tr><tr>'
    . '<td>Stormwater Retention Systems</td>'
    . '<td>' . $infrastructure->retentionSystemsNo . '</td>'
    . '<td>' . $infrastructure->retentionSystemsD . '</td>'
    . '</tr><tr>'
    . '<td>Stormwater Detention Systems</td>'
    . '<td>' . $infrastructure->detentionSystemsNo . '</td>'
    . '<td>' . $infrastructure->detentionSystemsD . '</td>'
    . '</tr><tr>'
    . '<td>Retaining Walls</td>'
    . '<td>' . $infrastructure->retainingWallsNo . '</td>'
    . '<td>' . $infrastructure->retainingWallsD . '</td>'
    . '</tr></tbody></table><br />'

    . '<br /><br /><hr />'

/************************End of the Infrastructure Page (Infrastructure for Operation)*************************/

/*****************************Start of the Infrastructure Page (Operational Works)*****************************/

    . '<h2>Operational Works</h2>'  
    . 'Describe the operations of the proposed development (e.g. proposed hours of operation, number of personnel, vehicle movement, proposed site visitor numbers, proposed employee population):'
    . '<br /><br />'
    . $infrastructure->OpWorksComment
    . '<br /><br />'
    . '<table><thead><tr>'
    . '<th>Infrastructure for operation</th>'
    . '<th>No.</th>'
    . '<th>Comments / Description / Indicative Area Size / Length etc.</th>'
    . '</tr></thead>'
    . '<tbody><tr>'
    . '<td>Earthworks and Retaining Walls</td>'
    . '<td>' . $infrastructure->earthworksNo . '</td>'
    . '<td>' . $infrastructure->earthworksD . '</td>'
    . '</tr><tr>'
    . '<td>Access Roads</td>'
    . '<td>' . $infrastructure->accessRoadsNo . '</td>'
    . '<td>' . $infrastructure->accessRoadsD . '</td>'
    . '</tr><tr>'
    . '<td>Construction Camps</td>'
    . '<td>' . $infrastructure->constructionCampsNo . '</td>'
    . '<td>' . $infrastructure->constructionCampsD . '</td>'
    . '</tr><tr>'
    . '<td>Lay Down Areas</td>'
    . '<td>' . $infrastructure->layDownAreasNo . '</td>'
    . '<td>' . $infrastructure->layDownAreasD . '</td>'
    . '</tr><tr>'
    . '<td>Site Offices</td>'
    . '<td>' . $infrastructure->operationalSiteOfficeNo . '</td>'
    . '<td>' . $infrastructure->operationalSiteOfficeD . '</td>'
    . '</tr><tr>'
    . '<td>Truck Turnarounds</td>'
    . '<td>' . $infrastructure->truckTurnaroundsNo . '</td>'
    . '<td>' . $infrastructure->truckTurnaroundsD . '</td>'
    . '</tr><tr>'
    . '<td>Workshops</td>'
    . '<td>' . $infrastructure->workshopsNo . '</td>'
    . '<td>' . $infrastructure->workshopsD . '</td>'
    . '</tr></tbody></table><br />'
  
    . '<br /><br /><hr />'  
  
/******************************End of the Infrastructure Page (Operational Works)******************************/

/**********************************Start of the Infrastructure Page (Gravel/Fill)******************************/

    . '<h2>Gravel/Fill</h2>'  
    . 'Is a Gravel Permit required? ' . $infrastructure->GravelFillPermitReq . ' ' . $infrastructure->GravelFillPermitReqEntity
    . '<br />'
    . 'Is a gravel transport permit required? ' . $infrastructure->GravelFillTransPermitReq . ' ' . $infrastructure->GravelFillTransPermitReqEntity
    . '<br />'
  
    . '<br /><br /><hr />'
  
/*********************************End of the Infrastructure Page (Gravel/Fill)*********************************/

/**********************************Start of the Infrastructure Page (Top Soil)******************************/

    . '<h2>Top Soil</h2>'  
    . 'Is a top soil permit required? ' . $infrastructure->TopSoilPermitReq . ' ' . $infrastructure->TopSoilPermitReqEntity
    . '<br />'
    . 'Is a Top Soil transport permit required? ' . $infrastructure->TopSoilTransPermitReq . ' ' . $infrastructure->TopSoilTransPermitReqEntity
    . '<br />'
  
    . '<br /><br /><hr />';   
}
/*********************************End of the Infrastructure Page (Top Soil)*********************************/

/*****Start of the Climate Page (Energy Management - Community Strategies for Passive Cooling and Heating)*****/
if(isset($climate)){

$html .= '<div style="page-break-after:always;"></div>'
    . '<h2>Energy Management - Community Strategies for Passive Cooling and Heating</h2>'
    . 'Describe the passive cooling and heating program that is to be implemented for this development: '
    . '<br /><br />'
    . $climate->ClimateComment
    . '<br /><br /><br />'
    . '<h3>Community Strategies for Passive Cooling and Heating - Design</h3>'
    . '<table><thead><tr>'
    . '<th colspan="3"></th>'
    . '<th>Target</th>'
    . '<th>Proposed</th>'
    . '<th>Actual</th>'
    . '<th>Gap</th>'
    . '</tr></thead><tbody><tr>'
    . '<td colspan="3">Enter the number of passive cooling strategies listed that have been incorporated into the community design: </td>'
    . '<td>' . $climate->coolingStratTarget . '</td>'
    . '<td>' . $climate->coolingStratProposed . '</td>'
    . '<td>' . $climate->coolingStratActual . '</td>'
    . '<td>' . $climate->coolingStratGap . '</td>'
  
    . '</tr><tr>'
  
    . '<td colspan="3">Enter the number of passive heating strategies listed that have been incorporated into the community design: </td>'
    . '<td>' . $climate->heatingStratTarget . '</td>'
    . '<td>' . $climate->heatingStratProposed . '</td>'
    . '<td>' . $climate->heatingStratActual . '</td>'
    . '<td>' . $climate->heatingStratGap . '</td>'
  
    . '</tr><tr>'
  
    . '<td colspan="3">Enter the percentage of community hardscape (excluding roads) that has utilised strategies to reduce the build up of heat: </td>'
    . '<td>' . $climate->comHardscapeHeatTarget . '</td>'
    . '<td>' . $climate->comHardscapeHeatProposed . '</td>'
    . '<td>' . $climate->comHardscapeHeatActual . '</td>'
    . '<td>' . $climate->comHardscapeHeatGap . '</td>'
    . '</tr></tbody></table>'
    
    . '<br /><br />'
  
    . '<h3>Technical Requirements</h3>'
    . '<table><thead><tr>'
    . '<th colspan="3"></th>'
    . '<th>Required</th>'
    . '<th>Document Title and Revision / <br />Drawing Number, Title and Revision</th>'
    . '<th>Responsible Party</th>'
    . '</tr></thead><tbody><tr>'
  
    . '<td colspan="3">Annual weather conditions for the site including solar azimuth and altitude,<br /> solar radiation, prevailing wind direction, wind speeds, wind temperatures<br /> and humidity have been considered in the design of the proposed development. </td>'
    . '<td>' . $climate->annualWeatherConReq . '</td>'
    . '<td>' . $climate->annualWeatherConDoc . '</td>'
    . '<td>' . $climate->annualWeatherConParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Site map illustrating the annual onsite wind conditions. </td>'
    . '<td>' . $climate->siteMapAnnualWeatherConReq . '</td>'
    . '<td>' . $climate->siteMapAnnualWeatherConDoc . '</td>'
    . '<td>' . $climate->siteMapAnnualWeatherConParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Conceptual solar and wind analysis report including studies for all adopted <br /> strategies and evidence of how the community design promotes shading and wind <br /> flows for passive cooling and improved pedestrian comfort. </td>'
    . '<td>' . $climate->ConSolarWindAnalysisReq . '</td>'
    . '<td>' . $climate->ConSolarWindAnalysisDoc . '</td>'
    . '<td>' . $climate->ConSolarWindAnalysisParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Site plan illustrating how the adopted strategies will be implemented. </td>'
    . '<td>' . $climate->sitePlanAdoptStratReq . '</td>'
    . '<td>' . $climate->sitePlanAdoptStratDoc . '</td>'
    . '<td>' . $climate->sitePlanAdoptStratParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Conceptual shadow effect on neighbouring properties is completed and provided <br />for regulator and community assessment (if required). </td>'
    . '<td>' . $climate->conShadowEffectReq . '</td>'
    . '<td>' . $climate->conShadowEffectDoc . '</td>'
    . '<td>' . $climate->conShadowEffectParty . '</td>'
    . '</tr></tbody></table>'
  
    . '<br /><br />'
  
    . '<h3>Advanced Analysis Techniques</h3>'
    . '<table><thead><tr>'
    . '<th colspan="3"></th>'
    . '<th>Required</th>'
    . '<th>Document Title and Revision / <br />Drawing Number, Title and Revision</th>'
    . '<th>Responsible Party</th>'
    . '</tr></thead><tbody><tr>'
  
    . '<td colspan="3">Narrative of the advanced solar and wind analysis describing how the results <br /> informed the final community design. </td>'
    . '<td>' . $climate->advSolarWindAnalysisReq . '</td>'
    . '<td>' . $climate->advSolarWindAnalysisDoc . '</td>'
    . '<td>' . $climate->advSolarWindAnalysisParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Technical report containing outputs from the advanced solar and wind modeling <br />analysis for all adopted strategies, demonstrating an improved level of performance. </td>'
    . '<td>' . $climate->advSolarWindOutReq . '</td>'
    . '<td>' . $climate->advSolarWindOutDoc . '</td>'
    . '<td>' . $climate->advSolarWindOutParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Site plan indicating how the strategies will be implemented for passive cooling <br /> and heating, and landscaping. </td>'
    . '<td>' . $climate->sitePlanHeatCoolStratReq . '</td>'
    . '<td>' . $climate->sitePlanHeatCoolStratDoc . '</td>'
    . '<td>' . $climate->sitePlanHeatCoolStratParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">As-built street sections illustrating urban heat reduction strategies. </td>'
    . '<td>' . $climate->streetUrbanHeatReq . '</td>'
    . '<td>' . $climate->streetUrbanHeatDoc . '</td>'
    . '<td>' . $climate->streetUrbanHeatParty . '</td>'
    . '</tr></tbody></table>'
  
    . '<br /><br />'
  
    . '<h3>Regulator requirements</h3>'
    . '<table><thead><tr>'
    . '<th colspan="3"></th>'
    . '<th>Required</th>'
    . '<th>Document Title and Revision / <br />Drawing Number, Title and Revision</th>'
    . '<th>Responsible Party</th>'
    . '</tr></thead><tbody><tr>'
  
    . '<td colspan="3">Does the proposed development meet and/or exceed national design guidelines for <br />"green" buiding ratings/ "green" infrastructure targets. </td>'
    . '<td>' . $climate->PropDevGreenGuideReq . '</td>'
    . '<td>' . $climate->PropDevGreenGuideDoc . '</td>'
    . '<td>' . $climate->PropDevGreenGuideParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Does the Local Government/ Regional Government Planning Systems define design guidelines? </td>'
    . '<td>' . $climate->GovPlanDefGuideReq . '</td>'
    . '<td>' . $climate->GovPlanDefGuideDoc . '</td>'
    . '<td>' . $climate->GovPlanDefGuideParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Does the Local Government/ Regional Government Planning Systems define infrastructure charging regimes? </td>'
    . '<td>' . $climate->GovPlanDefInfraReq . '</td>'
    . '<td>' . $climate->GovPlanDefInfraDoc . '</td>'
    . '<td>' . $climate->GovPlanDefInfraParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Do these guidelines provide incentives for energy and waste efficient buildings? </td>'
    . '<td>' . $climate->IncEnergyWasteEffReq . '</td>'
    . '<td>' . $climate->IncEnergyWasteEffDoc . '</td>'
    . '<td>' . $climate->IncEnergyWasteEffParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">If yes to incentives, are there monetary or development incentives that assist in <br />the promotion of efficient buildings/ developments? </td>'
    . '<td>' . $climate->MonDevIncAssistReq . '</td>'
    . '<td>' . $climate->MonDevIncAssistDoc . '</td>'
    . '<td>' . $climate->MonDevIncAssistParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Does the proposed development meet or exceed the guidelines to allow incentive <br /> opportunities to be implemented? </td>'
    . '<td>' . $climate->PropDevguideIncReq . '</td>'
    . '<td>' . $climate->PropDevguideIncDoc . '</td>'
    . '<td>' . $climate->PropDevguideIncParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">If the monetary incentives are available, what is the value of <br /> these incentives for this development? </td>'
    . '<td>' . $climate->MonIncValueDevCurrency . '</td>'
    . '<td>' . $climate->MonIncValueDev . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">If other development incentives are available, how are these applied <br /> to the proposed development? </td>'
    . '<td colspan="2">' . $climate->OtherDevIncApp . '</td>'  
    . '</tr></tbody></table>'
  
    . '<br /><br />'

    . '<br /><br /><hr />' 

/******End of the Climate Page (Energy Management - Community Strategies for Passive Cooling and Heating)******/

/*******Start of the Climate Page (Community Strategies for Passive Cooling and Heating - Construction)*******/

    . '<h2>Community Strategies for Passive Cooling and Heating - Construction</h2>'  
    . '<h3>Submission Requirements</h3>'
    . '<table><thead><tr>'
    . '<th colspan="3">Conceptual Solar and Wind Analysis</th>'
    . '<th>Achieved <br />&amp; <br />Submitted?</th>'
    . '<th>Document Title and Revision / <br />Drawing Number, Title and Revision</th>'
    . '<th>Responsible Party</th>'
    . '</tr></thead><tbody><tr>'
    . '<td colspan="3">Revised documentation as per design rating including as-built site plans illustrating <br />how the adopted strategies were integrated into the design: </td>'
    . '<td>' . $climate->DocRateAdoptStratReq . '</td>'
    . '<td>' . $climate->DocRateAdoptStratDoc . '</td>'
    . '<td>' . $climate->DocRateAdoptStratParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Photographic evidence of linear parks or vegetated corridors, shelter belts and <br />wind towers where applicable: </td>'
    . '<td>' . $climate->PhotoEvParkReq . '</td>'
    . '<td>' . $climate->PhotoEvParkDoc . '</td>'
    . '<td>' . $climate->PhotoEvParkParty . '</td>'
    . '</tr></tbody></table>'
  
    . '<br /><br />'
  
    . '<table><thead><tr>'
    . '<th colspan="3">Advanced Analysis Techniques</th>'
    . '<th>Achieved <br />&amp; <br />Submitted?</th>'
    . '<th>Document Title and Revision / <br />Drawing Number, Title and Revision</th>'
    . '<th>Responsible Party</th>'
    . '</tr></thead><tbody><tr>'
    . '<td colspan="3">Revised documentation as per design rating including as-built site plans illustrating <br />how the adopted strategies were integrated into the design: </td>'
    . '<td>' . $climate->RevDocSitePlanStratReq . '</td>'
    . '<td>' . $climate->RevDocSitePlanStratDoc . '</td>'
    . '<td>' . $climate->RevDocSitePlanStratParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Photographic evidence of alternative passive cooling strategies where applicable: </td>'
    . '<td>' . $climate->PhotoEvAltCoolStratReq . '</td>'
    . '<td>' . $climate->PhotoEvAltCoolStratDoc . '</td>'
    . '<td>' . $climate->PhotoEvAltCoolStratParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Plan drawings highlighting the extent of all hardscape surfaces, overlaid with <br />clearly identifiable \'hashed\' areas denoting the coverage of the various measures: </td>'
    . '<td>' . $climate->DrawHardSurfHashReq . '</td>'
    . '<td>' . $climate->DrawHardSurfHashDoc . '</td>'
    . '<td>' . $climate->DrawHardSurfHashParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Typical street sections illustrating urban heat reduction strategies: </td>'
    . '<td>' . $climate->StreetSectUrbanHeadRedReq . '</td>'
    . '<td>' . $climate->StreetSectUrbanHeadRedDoc . '</td>'
    . '<td>' . $climate->StreetSectUrbanHeadRedParty . '</td>'
    . '</tr></tbody></table>'
  
    . '<br /><br />'
  
    . '<h3>Technical Factors</h3>'
    . '<table><thead><tr>'
    . '<th colspan="3"></th>'
    . '<th>Required</th>'
    . '<th>Document Title and Revision / <br />Drawing Number, Title and Revision</th>'
    . '<th>Responsible Party</th>'
    . '</tr></thead><tbody><tr>'
  
    . '<td colspan="3">Calculations from Community Energy Strategy confirming the total annual energy consumption <br /> of all community infrastructure:</td>'
    . '<td>' . $climate->CalcComEnStratAnConsReq . '</td>'
    . '<td>' . $climate->CalcComEnStratAnConsDoc . '</td>'
    . '<td>' . $climate->CalcComEnStratAnConsParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Building Guidelines to comply with legislated requirements:</td>'
    . '<td>' . $climate->BuildGuideLegRequireReq . '</td>'
    . '<td>' . $climate->BuildGuideLegRequireDoc . '</td>'
    . '<td>' . $climate->BuildGuideLegRequireParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Demonstrate the mechanism for ensuring compliance with building guidelines:</td>'
    . '<td>' . $climate->DemMechComGuideReq . '</td>'
    . '<td>' . $climate->DemMechComGuideDoc . '</td>'
    . '<td>' . $climate->DemMechComGuideParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Draft of building guidelines highlighting energy model outputs and iterative steps in optimising <br/>the designs in order to achieve the targeted reductions have been developed <br />and submitted. At a minimum this should include: <br />
- Design drawings and model screenshots illustrating representative buildings. <br />
- Details on the baseline and proposed building elements including: building envelope, lighting, <br />HVAC, service water heating and receptacle and process loads. <br />
- Summary table highlighting the most effective strategies.<br />
- Energy consumption of proposed and baseline buildings confirming the percentage reduction.</td>'
    . '<td>' . $climate->EnOutOpTarRedReq . '</td>'
    . '<td>' . $climate->EnOutOpTarRedDoc . '</td>'
    . '<td>' . $climate->EnOutOpTarRedParty . '</td>'
    . '</tr></tbody></table>'
  
    . '<br /><br />'
  
    . '<h3>Regulator requirements</h3>'
    . '<table><thead><tr>'
    . '<th colspan="3"></th>'
    . '<th>Required</th>'
    . '<th>Document Title and Revision / <br />Drawing Number, Title and Revision</th>'
    . '<th>Responsible Party</th>'
    . '</tr></thead><tbody><tr>'
  
    . '<td colspan="3">Has the proposed development met and/or exceeded national design guidelines for "green" <br /> buiding ratings/ "green" infrastructure targets?</td>'
    . '<td>' . $climate->PropDevNatDesGuideGreenReq . '</td>'
    . '<td>' . $climate->PropDevNatDesGuideGreenDoc . '</td>'
    . '<td>' . $climate->PropDevNatDesGuideGreenParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Has the development met Local Government/ Regional Government Planning Systems define <br/>design guidelines for energy and water efficient buildings/ developments/ infrastructure?</td>'
    . '<td>' . $climate->GovPlanSysDesGuideReq . '</td>'
    . '<td>' . $climate->GovPlanSysDesGuideDoc . '</td>'
    . '<td>' . $climate->GovPlanSysDesGuideParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">Local Government/ Regional Government Planning Systems define infrastructure charging /<br /> incentive regimes for energy and water efficient buildings/ developments/ infrastructure?</td>'
    . '<td>' . $climate->GovPlanSysInfraCharIncReq . '</td>'
    . '<td>' . $climate->GovPlanSysInfraCharIncDoc . '</td>'
    . '<td>' . $climate->GovPlanSysInfraCharIncParty . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">If the monetary incentives are available, what was the total value of these incentives <br />for this development in agreement with the regulator?</td>'
    . '<td>' . $climate->TotValIncDevAgreeCurrency . '</td>'
    . '<td>' . $climate->TotValIncDevAgreeValue . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">If the monetary incentives are available, how were these incentives considered and <br />implemented for this development in agreement with the regulator?</td>'
    . '<td colspan="2">' . $climate->MonIncImpDevReg . '</td>'
    . '</tr><tr>'
  
    . '<td colspan="3">If other development incentives are available, how were these incentives considered and <br />implented for this development in agreement with the regulator?</td>'
    . '<td colspan="2">' . $climate->OtherIncImpDevReg . '</td>' 
    . '</tr></tbody></table>'


    . '<br /><br /><hr />';  
}
/********End of the Climate Page (Community Strategies for Passive Cooling and Heating - Construction)********/

/******************************Start of the Operations Page (Operational Waste)******************************/
if (isset($operation)){
$html .= '<div style="page-break-after:always;"></div>'
    . '<h2>Operational Waste</h2>'
    . 'Describe the operation waste program activities to be implemented for this development:' 
    . '<br /><br />'

    . $operation->OpWasteComment
  
    . '<br />'
    . '<h3>Waste Composition</h3>'
    . '<table><tr>'
    . '<td colspan="2"></td>'
    . '<td>Paper/Cardboard</td>'
    . '<td>Aluminium</td>'
    . '<td>Glass</td>'
    . '<td>Hazardous</td>'
    . '<td>Non-Hazardous</td>'
    . '<td>Organic</td>'
    . '<td>Total</td>'
  
    . '</tr><tr>'
  
    . '<td>Target volume</td>'
    . '<td>' . $operation->O_Tvolume_Units . '</td>'
    . '<td>' . $operation->O_Tvolume_Paper . '</td>'
    . '<td>' . $operation->O_Tvolume_Aluminium . '</td>'
    . '<td>' . $operation->O_Tvolume_Glass . '</td>'
    . '<td>' . $operation->O_Tvolume_Hazardous . '</td>'
    . '<td>' . $operation->O_Tvolume_NonHazardous . '</td>'
    . '<td>' . $operation->O_Tvolume_Organic . '</td>'
    . '<td>' . $operation->totalTargetO . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Proposed volume for landfill</td>'
    . '<td>' . $operation->O_PvolumeForLandfill_Units . '</td>'
    . '<td>' . $operation->O_PvolumeForLandfill_Paper . '</td>'
    . '<td>' . $operation->O_PvolumeForLandfill_Aluminium . '</td>'
    . '<td>' . $operation->O_PvolumeForLandfill_Glass . '</td>'
    . '<td>' . $operation->O_PvolumeForLandfill_Hazardous . '</td>'
    . '<td>' . $operation->O_PvolumeForLandfill_NonHazardous . '</td>'
    . '<td>' . $operation->O_PvolumeForLandfill_Organic . '</td>'
    . '<td>' . $operation->totalProposedLandO . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Proposed volume for recycle / reuse</td>'
    . '<td>' . $operation->O_PvolumeForRecycle_Units . '</td>'
    . '<td>' . $operation->O_PvolumeForRecycle_Paper . '</td>'
    . '<td>' . $operation->O_PvolumeForRecycle_Aluminium . '</td>'
    . '<td>' . $operation->O_PvolumeForRecycle_Glass . '</td>'
    . '<td>' . $operation->O_PvolumeForRecycle_Hazardous . '</td>'
    . '<td>' . $operation->O_PvolumeForRecycle_NonHazardous . '</td>'
    . '<td>' . $operation->O_PvolumeForRecycle_Organic . '</td>'
    . '<td>' . $operation->totalProposedRecycleO . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Actual volume for landfill</td>'
    . '<td>' . $operation->O_ActVolumeForLandfill_Units . '</td>'
    . '<td>' . $operation->O_ActVolumeForLandfill_Paper . '</td>'
    . '<td>' . $operation->O_ActVolumeForLandfill_Aluminium . '</td>'
    . '<td>' . $operation->O_ActVolumeForLandfill_Glass . '</td>'
    . '<td>' . $operation->O_ActVolumeForLandfill_Hazardous . '</td>'
    . '<td>' . $operation->O_ActVolumeForLandfill_NonHazardous . '</td>'
    . '<td>' . $operation->O_ActVolumeForLandfill_Organic . '</td>'
    . '<td>' . $operation->totalActualLandO . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Actual volume for recycle/reuse</td>'
    . '<td>' . $operation->O_ActVolumeForRecycle_Units . '</td>'
    . '<td>' . $operation->O_ActVolumeForRecycle_Paper . '</td>'
    . '<td>' . $operation->O_ActVolumeForRecycle_Aluminium . '</td>'
    . '<td>' . $operation->O_ActVolumeForRecycle_Glass . '</td>'
    . '<td>' . $operation->O_ActVolumeForRecycle_Hazardous . '</td>'
    . '<td>' . $operation->O_ActVolumeForRecycle_NonHazardous . '</td>'
    . '<td>' . $operation->O_ActVolumeForRecycle_Organic . '</td>'
    . '<td>' . $operation->totalActualRecycleO . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Difference in volume for landfill</td>'
    . '<td>' . $operation->O_DifVolumeForLandfill_Units . '</td>'
    . '<td>' . $operation->O_DifVolumeForLandfill_Paper . '</td>'
    . '<td>' . $operation->O_DifVolumeForLandfill_Aluminium . '</td>'
    . '<td>' . $operation->O_DifVolumeForLandfill_Glass . '</td>'
    . '<td>' . $operation->O_DifVolumeForLandfill_Hazardous . '</td>'
    . '<td>' . $operation->O_DifVolumeForLandfill_NonHazardous . '</td>'
    . '<td>' . $operation->O_DifVolumeForLandfill_Organic . '</td>'
    . '<td>' . $operation->totalDifLandO . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Difference in volume for recycle/re-use</td>'
    . '<td>' . $operation->O_DifVolumeForRecycle_Units . '</td>'
    . '<td>' . $operation->O_DifVolumeForRecycle_Paper . '</td>'
    . '<td>' . $operation->O_DifVolumeForRecycle_Aluminium . '</td>'
    . '<td>' . $operation->O_DifVolumeForRecycle_Glass . '</td>'
    . '<td>' . $operation->O_DifVolumeForRecycle_Hazardous . '</td>'
    . '<td>' . $operation->O_DifVolumeForRecycle_NonHazardous . '</td>'
    . '<td>' . $operation->O_DifVolumeForRecycle_Organic . '</td>'
    . '<td>' . $operation->totalDifRecycleO . '</td>'
  
    . '</tr></table>'
    . '<br /><br />'
  
    . '<h3 style="padding-top:50px;">Waste Composition Cost Analysis</h3>'
    . '<table><tr>'

    . '<td colspan="2"></td>'
    . '<td>Paper / Cardboard</td>'
    . '<td>Aluminium</td>'
    . '<td>Glass</td>'
    . '<td>Hazardous</td>'
    . '<td>Non-Hazardous</td>'
    . '<td>Organic</td>'
    . '<td>Total</td>'
  
    . '</tr><tr>'
  
    . '<td>Value (landfill)/Unit</td>'
    . '<td>' . $operation->valueLandfillCurrencyO . '</td>'
    . '<td>' . $operation->valueLandfillPaperO . '</td>'
    . '<td>' . $operation->valueLandfillAluminiumO . '</td>'
    . '<td>' . $operation->valueLandfillGlassO . '</td>'
    . '<td>' . $operation->valueLandfillHazardousO . '</td>'
    . '<td>' . $operation->valueLandfillNonHazardousO . '</td>'
    . '<td>' . $operation->valueLandfillOrganicO . '</td>'
    . '<td>' . $operation->valueLandfillTotalO . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Value (recycle)/Unit</td>'
    . '<td>' . $operation->valueRecycleCurrencyO . '</td>'
    . '<td>' . $operation->valueRecyclePaperO . '</td>'
    . '<td>' . $operation->valueRecycleAluminiumO . '</td>'
    . '<td>' . $operation->valueRecycleGlassO . '</td>'
    . '<td>' . $operation->valueRecycleHazardousO . '</td>'
    . '<td>' . $operation->valueRecycleNonHazardousO . '</td>'
    . '<td>' . $operation->valueRecycleOrganicO . '</td>'
    . '<td>' . $operation->valueRecycleTotalO . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Actual Value (landfill)/Unit</td>'
    . '<td>' . $operation->actualLandfillCurrencyO . '</td>'
    . '<td>' . $operation->actualLandfillPaperO . '</td>'
    . '<td>' . $operation->actualLandfillAluminiumO . '</td>'
    . '<td>' . $operation->actualLandfillGlassO . '</td>'
    . '<td>' . $operation->actualLandfillHazardousO . '</td>'
    . '<td>' . $operation->actualLandfillNonHazardousO . '</td>'
    . '<td>' . $operation->actualLandfillOrganicO . '</td>'
    . '<td>' . $operation->actualLandfillTotalO . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Actual Value (recycle)/Unit</td>'
    . '<td>' . $operation->actualRecycleCurrencyO . '</td>'
    . '<td>' . $operation->actualRecyclePaperO . '</td>'
    . '<td>' . $operation->actualRecycleAluminiumO . '</td>'
    . '<td>' . $operation->actualRecycleGlassO . '</td>'
    . '<td>' . $operation->actualRecycleHazardousO . '</td>'
    . '<td>' . $operation->actualRecycleNonHazardousO . '</td>'
    . '<td>' . $operation->actualRecycleOrganicO . '</td>'
    . '<td>' . $operation->actualRecycleTotalO . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Total Value Proposed</td>'
    . '<td>' . $operation->totalValuePropCurrencyO . '</td>'
    . '<td>' . $operation->totalValuePropPaperO . '</td>'
    . '<td>' . $operation->totalValuePropAluminiumO . '</td>'
    . '<td>' . $operation->totalValuePropGlassO . '</td>'
    . '<td>' . $operation->totalValuePropHazardousO . '</td>'
    . '<td>' . $operation->totalValuePropNonHazardousO . '</td>'
    . '<td>' . $operation->totalValuePropOrganicO . '</td>'
    . '<td>' . $operation->totalValuePropTotalO . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Total Value Actual</td>'
    . '<td>' . $operation->totalValueActCurrencyO . '</td>'
    . '<td>' . $operation->totalValueActPaperO . '</td>'
    . '<td>' . $operation->totalValueActAluminiumO . '</td>'
    . '<td>' . $operation->totalValueActGlassO . '</td>'
    . '<td>' . $operation->totalValueActHazardousO . '</td>'
    . '<td>' . $operation->totalValueActNonHazardousO . '</td>'
    . '<td>' . $operation->totalValueActOrganicO . '</td>'
    . '<td>' . $operation->totalValueActTotalO . '</td>'
  
    . '</tr></table>'

    . '<br /><br /><hr />' 

/********************************End of the Operations Page (Operational Waste)******************************/

/*****************Start of the Operations Page (Operational waste diversion from landfill rates)***************/

    . '<h2>Operational waste diversion from landfill rates</h2>'
    . 'Comments: '
    . '<br /><br />'
    . $operation->OpLandWasteComment
    . '<br /><br />'
    . '<h3>General</h3>'
  
    . 'Will an operational waste management plan be written? ' . $operation->O_WasteManagementPlan
    . '<br />'
    . 'Will adequate access be provided for refuse collection vehicles? ' . $operation->AccessProvCollectVehicles
    . '<br />'
    . 'Will landscape waste be collected? ' . $operation->LandscapeWasteCollect
    . '<br />'
    . 'Will landscape waste be treated in a suitable facility, e.g. composting? ' . $operation->LandscapeWasteTreated
    . '<br />'
    . 'Will at least one collection point will be provided to collect hazardous waste from the community? ' . $operation->CollectionPointHazardousWaste
    . '<br />'
    . 'Will adequately sized collection and storage waste facilities be provided? ' . $operation->CollectionStorageWasteFacilities
    . '<br />'
    . 'If appropriate, will adequately sized treatment waste treatment facilities be provided? ' . $operation->TreatmentWasteFacilities
    . '<br /><br />'
  
    . '<h3>Non-residential</h3>'
    . 'Will waste education be provided to staff, guests, students, etc., e.g. leaflets? ' . $operation->WasteEdNonResident
    . '<br />'
    . 'Will non-residential non-organic waste be stored and collected as separate streams? ' . $operation->NonResidentNonorganicWasteCollectedSep
    . '<br />'
    . 'Will organic waste from all non-residential building uses be stored and collected separately? ' . $operation->NonResidentOrganicWasteCollectedSep
    . '<br />'
    . 'Will there be a facilities manager responsible for waste in the building? ' . $operation->NonResidentFacilityManager
    . '<br /><br />'
    
    . '<h3>Technical Factors Non-Residential</h3>'
    . 'Will non-organic recyclable waste be segregated manually on-site or mechanically in a recycling plant? ' . $operation->NonResidentNonorganicRecycleWasteSegManOrMechPlant
    . '<br />'
    . 'Will organic waste be composted, and if so will it be done on-site or off-site? ' . $operation->NonResidentOrganicWasteComposted
    . '<br /><br />'
    
    . '<h3>Residential</h3>'
    . 'Will waste education be provided to residents, e.g. leaflets? ' . $operation->WasteEdResident
    . '<br />'
    . 'Will non-organic residential waste be stored and collected as separate streams? ' . $operation->ResidentNonorganicWasteCollectedSep
    . '<br />'
    . 'Will organic residential waste be stored and collected separately? ' . $operation->ResidentOrganicWasteCollectedSep
    . '<br /><br />'
    
    . '<h3>Residential Technical Factors</h3>'
    . 'Will non-organic recyclable waste be segregated manually on-site or mechanically in a recycling plant? ' . $operation->ResidentNonorganicRecycleWasteSegManOrMechPlant
    . '<br />'
    . 'Will organic waste be composted, and if so will it be done on-site or off-site? ' . $operation->ResidentOrganicWasteComposted
    . '<br />'

    . '<br /><br /><hr />'; 
}
/******************End of the Operations Page (Operational waste diversion from landfill rates)***************/

/**********************Start of the Construction Indicators Page (Demolition Waste)****************************/
if(isset($waste)){
$html .= '<div style="page-break-after:always;"></div>'
    . '<h2>Demolition Waste</h2>'
    . 'Describe the demolition waste program and its objectives to be implemented for this development:' 
    . '<br /><br />'

    . $waste->DemWasteComment
  
    . '<br />'
    . '<h3>Waste Composition</h3>'
    . '<table style="page-break-after:always;"><tr>'
    . '<td></td><td></td>'
    . '<td>Concrete</td>'
    . '<td>Steel</td>'
    . '<td>Aluminium</td>'
    . '<td>Copper</td>'
    . '<td>Timber</td>'
    . '<td>Glass</td>'
    . '<td>Hazardous</td>'
    . '<td>Non-Hazardous</td>'
    . '<td>Organic</td>'
    . '<td>Conduit</td>'
    . '<td>Total</td>'
  
    . '</tr><tr>'
  
    . '<td>Target volume</td>'
    . '<td>' . $waste->D_Tvolume_Units . '</td>'
    . '<td>' . $waste->D_Tvolume_Concrete . '</td>'
    . '<td>' . $waste->D_Tvolume_Steel . '</td>'
    . '<td>' . $waste->D_Tvolume_Aluminium . '</td>'
    . '<td>' . $waste->D_Tvolume_Copper . '</td>'
    . '<td>' . $waste->D_Tvolume_Timber . '</td>'
    . '<td>' . $waste->D_Tvolume_Glass . '</td>'
    . '<td>' . $waste->D_Tvolume_Hazardous . '</td>'
    . '<td>' . $waste->D_Tvolume_NonHazardous . '</td>'
    . '<td>' . $waste->D_Tvolume_Organic . '</td>'
    . '<td>' . $waste->D_Tvolume_Conduit . '</td>'
    . '<td>' . $waste->totalTargetD . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Proposed volume for landfill</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_Units . '</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_Concrete . '</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_Steel . '</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_Aluminium . '</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_Copper . '</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_Timber . '</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_Glass . '</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_Hazardous . '</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_NonHazardous . '</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_Organic . '</td>'
    . '<td>' . $waste->D_PvolumeForLandfill_Conduit . '</td>'
    . '<td>' . $waste->totalProposedLandD . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Proposed volume for recycle / reuse</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_Units . '</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_Concrete . '</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_Steel . '</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_Aluminium . '</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_Copper . '</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_Timber . '</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_Glass . '</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_Hazardous . '</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_NonHazardous . '</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_Organic . '</td>'
    . '<td>' . $waste->D_PvolumeForRecycle_Conduit . '</td>'
    . '<td>' . $waste->totalProposedRecycleD . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Actual volume for landfill</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_Units . '</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_Concrete . '</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_Steel . '</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_Aluminium . '</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_Copper . '</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_Timber . '</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_Glass . '</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_Hazardous . '</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_NonHazardous . '</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_Organic . '</td>'
    . '<td>' . $waste->D_ActVolumeForLandfill_Conduit . '</td>'
    . '<td>' . $waste->totalActualLandD . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Actual volume for recycle/reuse</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_Units . '</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_Concrete . '</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_Steel . '</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_Aluminium . '</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_Copper . '</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_Timber . '</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_Glass . '</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_Hazardous . '</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_NonHazardous . '</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_Organic . '</td>'
    . '<td>' . $waste->D_ActVolumeForRecycle_Conduit . '</td>'
    . '<td>' . $waste->totalActualRecycleD . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Difference in volume for landfill</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_Units . '</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_Concrete . '</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_Steel . '</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_Aluminium . '</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_Copper . '</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_Timber . '</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_Glass . '</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_Hazardous . '</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_NonHazardous . '</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_Organic . '</td>'
    . '<td>' . $waste->D_DifVolumeForLandfill_Conduit . '</td>'
    . '<td>' . $waste->totalDifLandD . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Difference in volume for recycle/re-use</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_Units . '</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_Concrete . '</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_Steel . '</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_Aluminium . '</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_Copper . '</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_Timber . '</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_Glass . '</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_Hazardous . '</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_NonHazardous . '</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_Organic . '</td>'
    . '<td>' . $waste->D_DifVolumeForRecycle_Conduit . '</td>'
    . '<td>' . $waste->totalDifRecycleD . '</td>'
  
    . '</tr></table>'  
  
/****************************Cost Analysis From Waste Composition (Demolition Waste)**************************/
  
    . '<h3 style="padding-top:50px;">Waste Composition Cost Analysis</h3>'
    . '<table><tr>'

    . '<td></td><td></td>'
    . '<td>Concrete</td>'
    . '<td>Steel</td>'
    . '<td>Aluminium</td>'
    . '<td>Copper</td>'
    . '<td>Timber</td>'
    . '<td>Glass</td>'
    . '<td>Hazardous</td>'
    . '<td>Non-Hazardous</td>'
    . '<td>Organic</td>'
    . '<td>Conduit</td>'
    . '<td>Total</td>'
  
    . '</tr><tr>'
  
    . '<td>Value (landfill)/Unit</td>'
    . '<td>' . $waste->valueLandfillCurrencyD . '</td>'
    . '<td>' . $waste->valueLandfillConcreteD . '</td>'
    . '<td>' . $waste->valueLandfillSteelD . '</td>'
    . '<td>' . $waste->valueLandfillAluminiumD . '</td>'
    . '<td>' . $waste->valueLandfillCopperD . '</td>'
    . '<td>' . $waste->valueLandfillTimberD . '</td>'
    . '<td>' . $waste->valueLandfillGlassD . '</td>'
    . '<td>' . $waste->valueLandfillHazardousD . '</td>'
    . '<td>' . $waste->valueLandfillNonHazardousD . '</td>'
    . '<td>' . $waste->valueLandfillOrganicD . '</td>'
    . '<td>' . $waste->valueLandfillConduitD . '</td>'
    . '<td>' . $waste->valueLandfillTotalD . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Value (recycle)/Unit</td>'
    . '<td>' . $waste->valueRecycleCurrencyD . '</td>'
    . '<td>' . $waste->valueRecycleConcreteD . '</td>'
    . '<td>' . $waste->valueRecycleSteelD . '</td>'
    . '<td>' . $waste->valueRecycleAluminiumD . '</td>'
    . '<td>' . $waste->valueRecycleCopperD . '</td>'
    . '<td>' . $waste->valueRecycleTimberD . '</td>'
    . '<td>' . $waste->valueRecycleGlassD . '</td>'
    . '<td>' . $waste->valueRecycleHazardousD . '</td>'
    . '<td>' . $waste->valueRecycleNonHazardousD . '</td>'
    . '<td>' . $waste->valueRecycleOrganicD . '</td>'
    . '<td>' . $waste->valueRecycleConduitD . '</td>'
    . '<td>' . $waste->valueRecycleTotalD . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Actual Value (landfill)/Unit</td>'
    . '<td>' . $waste->actualLandfillCurrencyD . '</td>'
    . '<td>' . $waste->actualLandfillConcreteD . '</td>'
    . '<td>' . $waste->actualLandfillSteelD . '</td>'
    . '<td>' . $waste->actualLandfillAluminiumD . '</td>'
    . '<td>' . $waste->actualLandfillCopperD . '</td>'
    . '<td>' . $waste->actualLandfillTimberD . '</td>'
    . '<td>' . $waste->actualLandfillGlassD . '</td>'
    . '<td>' . $waste->actualLandfillHazardousD . '</td>'
    . '<td>' . $waste->actualLandfillNonHazardousD . '</td>'
    . '<td>' . $waste->actualLandfillOrganicD . '</td>'
    . '<td>' . $waste->actualLandfillConduitD . '</td>'
    . '<td>' . $waste->actualLandfillTotalD . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Actual Value (recycle)/Unit</td>'
    . '<td>' . $waste->actualRecycleCurrencyD . '</td>'
    . '<td>' . $waste->actualRecycleConcreteD . '</td>'
    . '<td>' . $waste->actualRecycleSteelD . '</td>'
    . '<td>' . $waste->actualRecycleAluminiumD . '</td>'
    . '<td>' . $waste->actualRecycleCopperD . '</td>'
    . '<td>' . $waste->actualRecycleTimberD . '</td>'
    . '<td>' . $waste->actualRecycleGlassD . '</td>'
    . '<td>' . $waste->actualRecycleHazardousD . '</td>'
    . '<td>' . $waste->actualRecycleNonHazardousD . '</td>'
    . '<td>' . $waste->actualRecycleOrganicD . '</td>'
    . '<td>' . $waste->actualRecycleConduitD . '</td>'
    . '<td>' . $waste->actualRecycleTotalD . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Total Value Proposed</td>'
    . '<td>' . $waste->totalValuePropCurrencyD . '</td>'
    . '<td>' . $waste->totalValuePropConcreteD . '</td>'
    . '<td>' . $waste->totalValuePropSteelD . '</td>'
    . '<td>' . $waste->totalValuePropAluminiumD . '</td>'
    . '<td>' . $waste->totalValuePropCopperD . '</td>'
    . '<td>' . $waste->totalValuePropTimberD . '</td>'
    . '<td>' . $waste->totalValuePropGlassD . '</td>'
    . '<td>' . $waste->totalValuePropHazardousD . '</td>'
    . '<td>' . $waste->totalValuePropNonHazardousD . '</td>'
    . '<td>' . $waste->totalValuePropOrganicD . '</td>'
    . '<td>' . $waste->totalValuePropConduitD . '</td>'
    . '<td>' . $waste->totalValuePropTotalD . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Total Value Actual</td>'
    . '<td>' . $waste->totalValueActCurrencyD . '</td>'
    . '<td>' . $waste->totalValueActConcreteD . '</td>'
    . '<td>' . $waste->totalValueActSteelD . '</td>'
    . '<td>' . $waste->totalValueActAluminiumD . '</td>'
    . '<td>' . $waste->totalValueActCopperD . '</td>'
    . '<td>' . $waste->totalValueActTimberD . '</td>'
    . '<td>' . $waste->totalValueActGlassD . '</td>'
    . '<td>' . $waste->totalValueActHazardousD . '</td>'
    . '<td>' . $waste->totalValueActNonHazardousD . '</td>'
    . '<td>' . $waste->totalValueActOrganicD . '</td>'
    . '<td>' . $waste->totalValueActConduitD . '</td>'
    . '<td>' . $waste->totalValueActTotalD . '</td>'
  
    . '</tr></table>'
  
    . '<br /><hr />'
  
/************************End of the Construction Indicators Page (Demolition Waste)***************************/
  
/**********************Start of the Construction Indicators Page (Construction Waste)**************************/
  
  
    . '<h2>Construction Waste</h2>'
    . 'Describe the construction waste management program and its objectives to be implemented for this development:' 
    . '<br /><br />'

    . $waste->ConWasteComment
  
    . '<br /><div style="page-break-after:always;"></div>'
    . '<h3>Waste Composition</h3>'
    . '<table><tr>'
    . '<td></td><td></td>'
    . '<td>Concrete</td>'
    . '<td>Steel</td>'
    . '<td>Aluminium</td>'
    . '<td>Copper</td>'
    . '<td>Timber</td>'
    . '<td>Glass</td>'
    . '<td>Hazardous</td>'
    . '<td>Non-Hazardous</td>'
    . '<td>Organic</td>'
    . '<td>Conduit</td>'
    . '<td>Total</td>'
  
    . '</tr><tr>'
  
    . '<td>Target volume</td>'
    . '<td>' . $waste->C_Tvolume_Units . '</td>'
    . '<td>' . $waste->C_Tvolume_Concrete . '</td>'
    . '<td>' . $waste->C_Tvolume_Steel . '</td>'
    . '<td>' . $waste->C_Tvolume_Aluminium . '</td>'
    . '<td>' . $waste->C_Tvolume_Copper . '</td>'
    . '<td>' . $waste->C_Tvolume_Timber . '</td>'
    . '<td>' . $waste->C_Tvolume_Glass . '</td>'
    . '<td>' . $waste->C_Tvolume_Hazardous . '</td>'
    . '<td>' . $waste->C_Tvolume_NonHazardous . '</td>'
    . '<td>' . $waste->C_Tvolume_Organic . '</td>'
    . '<td>' . $waste->C_Tvolume_Conduit . '</td>'
    . '<td>' . $waste->totalTargetC . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Proposed volume for landfill</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_Units . '</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_Concrete . '</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_Steel . '</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_Aluminium . '</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_Copper . '</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_Timber . '</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_Glass . '</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_Hazardous . '</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_NonHazardous . '</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_Organic . '</td>'
    . '<td>' . $waste->C_PvolumeForLandfill_Conduit . '</td>'
    . '<td>' . $waste->totalProposedLandC . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Proposed volume for recycle / reuse</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_Units . '</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_Concrete . '</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_Steel . '</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_Aluminium . '</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_Copper . '</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_Timber . '</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_Glass . '</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_Hazardous . '</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_NonHazardous . '</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_Organic . '</td>'
    . '<td>' . $waste->C_PvolumeForRecycle_Conduit . '</td>'
    . '<td>' . $waste->totalProposedRecycleC . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Actual volume for landfill</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_Units . '</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_Concrete . '</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_Steel . '</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_Aluminium . '</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_Copper . '</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_Timber . '</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_Glass . '</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_Hazardous . '</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_NonHazardous . '</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_Organic . '</td>'
    . '<td>' . $waste->C_ActVolumeForLandfill_Conduit . '</td>'
    . '<td>' . $waste->totalActualLandC . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Actual volume for recycle/reuse</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_Units . '</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_Concrete . '</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_Steel . '</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_Aluminium . '</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_Copper . '</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_Timber . '</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_Glass . '</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_Hazardous . '</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_NonHazardous . '</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_Organic . '</td>'
    . '<td>' . $waste->C_ActVolumeForRecycle_Conduit . '</td>'
    . '<td>' . $waste->totalActualRecycleC . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Difference in volume for landfill</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_Units . '</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_Concrete . '</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_Steel . '</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_Aluminium . '</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_Copper . '</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_Timber . '</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_Glass . '</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_Hazardous . '</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_NonHazardous . '</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_Organic . '</td>'
    . '<td>' . $waste->C_DifVolumeForLandfill_Conduit . '</td>'
    . '<td>' . $waste->totalDifLandC . '</td>'
  
    . '</tr><tr>'  
  
    . '<td>Difference in volume for recycle/re-use</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_Units . '</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_Concrete . '</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_Steel . '</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_Aluminium . '</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_Copper . '</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_Timber . '</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_Glass . '</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_Hazardous . '</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_NonHazardous . '</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_Organic . '</td>'
    . '<td>' . $waste->C_DifVolumeForRecycle_Conduit . '</td>'
    . '<td>' . $waste->totalDifRecycleC . '</td>'
  
    . '</tr></table>'  
  
/****************************Cost Analysis From Waste Composition (Demolition Waste)****************************/
  
    . '<h3 style="padding-top:50px;">Waste Composition Cost Analysis</h3>'
    . '<table><tr>'

    . '<td></td><td></td>'
    . '<td>Concrete</td>'
    . '<td>Steel</td>'
    . '<td>Aluminium</td>'
    . '<td>Copper</td>'
    . '<td>Timber</td>'
    . '<td>Glass</td>'
    . '<td>Hazardous</td>'
    . '<td>Non-Hazardous</td>'
    . '<td>Organic</td>'
    . '<td>Conduit</td>'
    . '<td>Total</td>'
  
    . '</tr><tr>'
  
    . '<td>Value (landfill)/Unit</td>'
    . '<td>' . $waste->valueLandfillCurrencyC . '</td>'
    . '<td>' . $waste->valueLandfillConcreteC . '</td>'
    . '<td>' . $waste->valueLandfillSteelC . '</td>'
    . '<td>' . $waste->valueLandfillAluminiumC . '</td>'
    . '<td>' . $waste->valueLandfillCopperC . '</td>'
    . '<td>' . $waste->valueLandfillTimberC . '</td>'
    . '<td>' . $waste->valueLandfillGlassC . '</td>'
    . '<td>' . $waste->valueLandfillHazardousC . '</td>'
    . '<td>' . $waste->valueLandfillNonHazardousC . '</td>'
    . '<td>' . $waste->valueLandfillOrganicC . '</td>'
    . '<td>' . $waste->valueLandfillConduitC . '</td>'
    . '<td>' . $waste->valueLandfillTotalC . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Value (recycle)/Unit</td>'
    . '<td>' . $waste->valueRecycleCurrencyC . '</td>'
    . '<td>' . $waste->valueRecycleConcreteC . '</td>'
    . '<td>' . $waste->valueRecycleSteelC . '</td>'
    . '<td>' . $waste->valueRecycleAluminiumC . '</td>'
    . '<td>' . $waste->valueRecycleCopperC . '</td>'
    . '<td>' . $waste->valueRecycleTimberC . '</td>'
    . '<td>' . $waste->valueRecycleGlassC . '</td>'
    . '<td>' . $waste->valueRecycleHazardousC . '</td>'
    . '<td>' . $waste->valueRecycleNonHazardousC . '</td>'
    . '<td>' . $waste->valueRecycleOrganicC . '</td>'
    . '<td>' . $waste->valueRecycleConduitC . '</td>'
    . '<td>' . $waste->valueRecycleTotalC . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Actual Value (landfill)/Unit</td>'
    . '<td>' . $waste->actualLandfillCurrencyC . '</td>'
    . '<td>' . $waste->actualLandfillConcreteC . '</td>'
    . '<td>' . $waste->actualLandfillSteelC . '</td>'
    . '<td>' . $waste->actualLandfillAluminiumC . '</td>'
    . '<td>' . $waste->actualLandfillCopperC . '</td>'
    . '<td>' . $waste->actualLandfillTimberC . '</td>'
    . '<td>' . $waste->actualLandfillGlassC . '</td>'
    . '<td>' . $waste->actualLandfillHazardousC . '</td>'
    . '<td>' . $waste->actualLandfillNonHazardousC . '</td>'
    . '<td>' . $waste->actualLandfillOrganicC . '</td>'
    . '<td>' . $waste->actualLandfillConduitC . '</td>'
    . '<td>' . $waste->actualLandfillTotalC . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Actual Value (recycle)/Unit</td>'
    . '<td>' . $waste->actualRecycleCurrencyC . '</td>'
    . '<td>' . $waste->actualRecycleConcreteC . '</td>'
    . '<td>' . $waste->actualRecycleSteelC . '</td>'
    . '<td>' . $waste->actualRecycleAluminiumC . '</td>'
    . '<td>' . $waste->actualRecycleCopperC . '</td>'
    . '<td>' . $waste->actualRecycleTimberC . '</td>'
    . '<td>' . $waste->actualRecycleGlassC . '</td>'
    . '<td>' . $waste->actualRecycleHazardousC . '</td>'
    . '<td>' . $waste->actualRecycleNonHazardousC . '</td>'
    . '<td>' . $waste->actualRecycleOrganicC . '</td>'
    . '<td>' . $waste->actualRecycleConduitC . '</td>'
    . '<td>' . $waste->actualRecycleTotalC . '</td>'
  
    . '</tr><tr>'
  
    . '<td>Total Value Proposed</td>'
    . '<td>' . $waste->totalValuePropCurrencyC . '</td>'
    . '<td>' . $waste->totalValuePropConcreteC . '</td>'
    . '<td>' . $waste->totalValuePropSteelC . '</td>'
    . '<td>' . $waste->totalValuePropAluminiumC . '</td>'
    . '<td>' . $waste->totalValuePropCopperC . '</td>'
    . '<td>' . $waste->totalValuePropTimberC . '</td>'
    . '<td>' . $waste->totalValuePropGlassC . '</td>'
    . '<td>' . $waste->totalValuePropHazardousC . '</td>'
    . '<td>' . $waste->totalValuePropNonHazardousC . '</td>'
    . '<td>' . $waste->totalValuePropOrganicC . '</td>'
    . '<td>' . $waste->totalValuePropConduitC . '</td>'
    . '<td>' . $waste->totalValuePropTotalC . '</td>'
 
    . '</tr><tr>'
  
    . '<td>Total Value Actual</td>'
    . '<td>' . $waste->totalValueActCurrencyC . '</td>'
    . '<td>' . $waste->totalValueActConcreteC . '</td>'
    . '<td>' . $waste->totalValueActSteelC . '</td>'
    . '<td>' . $waste->totalValueActAluminiumC . '</td>'
    . '<td>' . $waste->totalValueActCopperC . '</td>'
    . '<td>' . $waste->totalValueActTimberC . '</td>'
    . '<td>' . $waste->totalValueActGlassC . '</td>'
    . '<td>' . $waste->totalValueActHazardousC . '</td>'
    . '<td>' . $waste->totalValueActNonHazardousC . '</td>'
    . '<td>' . $waste->totalValueActOrganicC . '</td>'
    . '<td>' . $waste->totalValueActConduitC . '</td>'
    . '<td>' . $waste->totalValueActTotalC . '</td>'
  
    . '</tr></table>'
  
    . '<br /><hr style="page-break-after:always;" />'
  
/**********************End of the Construction Indicators Page (Construction Waste)***************************/
  
/***Start of the Construction Indicators Page (Construction and Demolition waste recycling and salvage rates)***/
  
    . '<h2>Construction and Demolition Waste Recycling and Salvage Rates</h2>'
    . 'Describe the construction and demolition waste recycling management program and its objectives to be implemented for this development:' 
    . '<br /><br />'

    . $waste->RecWasteComment
  
    . '<br />'
    . '<h3>Salvage and recycling of Construction and Demolition waste</h3>'
    .'<br />'
    . 'Will a construction and demolition waste management plan be written? ' 
    . $waste->C_D_WasteManagementPlan
    . '<br />'
    . 'Will waste education be provided to construction contractors? '
    . $waste->WasteEdConstructionContractors
    . '<br />'
    . 'Will waste education be provided to demolition contractors? '
    . $waste->WasteEdDemolitionContractors
    . '<br />'
    . 'Will waste be adequately segregated and temporarily stored on-site during construction? '
    . $waste->WasteSegTempStoreOnsiteConstruction
    . '<br />'
    . 'Will waste be adequately segregated and temporarily stored on-site during demolition? '
    . $waste->WasteSegTempStoreOnsiteDemolition
    . '<br />'
    . 'Will there be a person responsible of C&amp;D waste management? '
    . $waste->PersonResponsibleCDWaste
    . '<br />'
    . '<div style="page-break-after:always;"></div>'
  
    . '<h3>Technical factors</h3>'
    .'<br />'
    . 'What percentage of material from existing community elements/buildings will be reused in the new one? ' 
    . $waste->PercentMatExistCommReused . '%'
    . '<br />'
    . 'Will construction waste be segregated in a recycling plant? '
    . $waste->ConstructionSegRecyclingPlant
    . '<br />'
    . 'Which plant(s)? '
    . $waste->ConstructionPlants
    . '<br />'
    . 'Will demolition waste be segregated in a recycling plant? '
    . $waste->DemolitionSegRecyclingPlant
    . '<br />'
    . 'Which plant(s)? '
    . $waste->DemolitionPlants
    . '<br />'
    . 'Override automatic values and enter customised capture rates? '
    . $waste->OverrideCapRate
    . '<br />'
    . 'Construction customised capture rates? '
    . $waste->OverrideConstructionCapRate
    . '<br />'
    . 'Demolition customised capture rates? '
    . $waste->OverrideDemolitionCapRate
    . '<br />'
  
    . '<br /><hr style="page-break-after:always;"/>'
  
/****End of the Construction Indicators Page (Construction and Demolition waste recycling and salvage rates)****/

/**********************Start of the Construction Indicators Page (Electricity)***************************/
  
    . '<h2>Electricity</h2>'
    . 'Description of Electricity:  <br /><br />'
    . $waste->ElectricityComment 
  
    . '<br /><br /><hr style="page-break-after:always;"/>'

/*******************************End of Construction Indicators Page (Electricity)******************************/
  
/**********************************Start of the Construction Indicators Page (Fuel)***************************/
  
    . '<h2>Fuel</h2>'
    . 'Description of Fuel:  <br /><br />'
    . $waste->FuelComment
  
    . '<br /><br /><hr style="page-break-after:always;"/>'

/***********************************End of Construction Indicators Page (Fuel)**********************************/
  
/**************************Start of the Construction Indicators Page (Renewable Energy)************************/
  
    . '<h2>Renewable Energy</h2>'
    . 'Description of Renewable Energy:  <br /><br />'
    . $waste->RenewableEnergyComment
  
    . '<br /><br /><hr style="page-break-after:always;"/>'

/****************************End of Construction Indicators Page (Renewable Energy)****************************/
  
/**********************Start of the Construction Indicators Page (Labour)***************************/
  
    . '<h2>Labour</h2>'
    . 'Description of Labour:  <br /><br />'
    . $waste->LabourComment
   
    . '<br /><br /><hr style="page-break-after:always;"/>';
}
/**********************************End of Construction Indicators Page (Labour)*******************************/

/**************************************************End Section************************************************/

$html .= '</body></html>';
//return PDF::load($html, 'A4', 'landscape')->show();
return PDF::load($html, 'A4', 'landscape')->download($projectName);


?>