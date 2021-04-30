<?php


class IndexController
{
    public function __construct()
    { 
        $this->view = new View();
    } 

    public function showIndex()
    {
        $this->view->show("IndexView.php");
    } 

    public function showStyle()
    {
        $this->view->show("LearningStyleView.php");
    } 

    public function showCampus()
    {
        $this->view->show("CampusView.php");
    } 

    public function showGender()
    {
        $this->view->show("GenderView.php");
    } 

    public function showStyle2()
    {
        $this->view->show("Style2View.php");
    } 

    public function showProfessor()
    {
        $this->view->show("ProfessorView.php");
    }

    public function showNetWorks()
    {
        $this->view->show("NetworksView.php");
    }

    public function showCrossValidation()
    {
        $this->view->show("CrossValidationView.php");
    }
    
} 