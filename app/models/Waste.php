<?php

class Waste extends Eloquent 
{
  
  
  public function project() {
    return $this->hasOne('Project');
  }
}

?>