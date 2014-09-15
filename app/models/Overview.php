<?php

class Overview extends Eloquent 
{
  
  
  public function project() {
    return $this->hasOne('Project');
  }
}