<?php

class Company extends Eloquent 
{
  
  public function user() {
    return $this->hasOne('user');
  }
  
  public function projects() {
    return $this->hasMany('projects');
  }
}