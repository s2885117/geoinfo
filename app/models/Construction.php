<?php

class Construction extends Eloquent 
{
  
  
  public function project() {
    return $this->hasOne('Project');
  }
}