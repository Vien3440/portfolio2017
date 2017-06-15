<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CrudModel
 *
 * @author vien34
 */
abstract class CrudModel extends CI_Model{
    
    abstract public function getAll();
    abstract public function create();
    abstract public function update();
    abstract public function delete();
  
}
