<?php

class Project extends Eloquent
  {
  
  public function company() {
    return $this->hasOne('Company');
  }
  
  public function users() {
    return $this->belongsToMany('User');
  }
}