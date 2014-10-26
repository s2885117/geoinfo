<?php

class Infrastructure extends Eloquent 
{
  
  
  public function project() {
    return $this->hasOne('Project');
  }
}