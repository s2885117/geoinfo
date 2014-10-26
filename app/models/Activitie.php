<?php

class Activitie extends Eloquent 
{
  public function project() {
    return $this->hasOne('Project');
  }
}

?>