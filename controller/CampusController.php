<?php

class CampusController
{
    public function __construct()
    { 
        $this->view = new View();
    } 

    public function getOrigin()
    {
        /*require 'model/ActivityModel.php';
        $activities = new ActivityModel();
        $data['list'] = $activities->getActivities();*/

        $this->view->show("IndexView.php");
    } // 

    
} 