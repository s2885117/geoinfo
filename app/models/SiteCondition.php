<?php

class SiteCondition extends Eloquent 
{
  
  
  public function project() {
    return $this->hasOne('Project');
  }
}