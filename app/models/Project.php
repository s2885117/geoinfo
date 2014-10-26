<?php

class Project extends Eloquent
  {
  
  public function company() {
    return $this->hasOne('Company');
  }
  
  public function users() {
    return $this->belongsToMany('User');
  }
  
  public function overview() {
    return $this->hasOne('Overview');
  }
  
  public function construction() {
    return $this->hasOne('Construction');
  }
  
  public function siteCondition() {
    return $this->hasOne('SiteCondition');
  }
  
  public function infrastructure() {
    return $this->hasOne('Infrastructure');
  }
  
  public function waste() {
    return $this->hasOne('Waste');
  }
  
  public function activitie() {
    return $this->hasOne('Activitie');
  }
  
  public function climate() {
    return $this->hasOne('Climate');
  }
}