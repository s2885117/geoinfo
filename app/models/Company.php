<?php

class Company extends Eloquent 
{
  
  public function user() {
    return $this->hasOne('User');
  }
  
  public function projects() {
    return $this->hasMany('Project');
  }
}