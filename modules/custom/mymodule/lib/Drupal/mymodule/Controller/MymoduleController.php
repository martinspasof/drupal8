<?php
// this path => modules/mymodule/lib/Drupal/mymodule/Controller/MymoduleController.php
// will change to this later =>modules/mymodule/lib/Controller/MymoduleController.php

/**
 * @file MymoduleController
 */

namespace Drupal\mymodule\Controller;
use Drupal\Core\Controller\ControllerBase;

class MymoduleController extends ControllerBase{
    public function mymodulePage(){
        $output = array();
        
        $output['mymodule'] = array(
            '#markup' => t('This is my drupal 8 module page'),
        );
        
        return $output;
    }
}