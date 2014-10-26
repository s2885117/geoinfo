<?php

class Climate extends Eloquent 
{
  
  
  public function project() {
    return $this->hasOne('Project');
  }
}

?>