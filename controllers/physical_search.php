<?php

class Physical_search extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {		

        $this->view->accession_number = $this->model->accession_number();

    // Fruit
        $this->view->fruit_size = $this->model->fruit_size();
        $this->view->exterior_colour_of_mature_fruit = $this->model->exterior_colour_of_mature_fruit();
        $this->view->presence_of_green_shoulder_trips_on_the_fruit = $this->model->presence_of_green_shoulder_trips_on_the_fruit();
        $this->view->intensity_of_greenback = $this->model->intensity_of_greenback();
        $this->view->fruit_pubescence = $this->model->fruit_pubescence();
        $this->view->predominant_fruit_shape = $this->model->predominant_fruit_shape();
        $this->view->fruit_size_homogeneity = $this->model->fruit_size_homogeneity();
        $this->view->intensity_of_exterior_colour = $this->model->intensity_of_exterior_colour();
        $this->view->ribbing_at_calyx_end = $this->model->ribbing_at_calyx_end();
        $this->view->easiness_of_fruit_to_detach_from_pedicel = $this->model->easiness_of_fruit_to_detach_from_pedicel();
        $this->view->fruit_shoulder_shape = $this->model->fruit_shoulder_shape();
        $this->view->presence_absence_of_jiontless_pedicel = $this->model->presence_absence_of_jiontless_pedicel();
        $this->view->easiness_of_fruit_wall_skin_to_be_peeled = $this->model->easiness_of_fruit_wall_skin_to_be_peeled();
        $this->view->skin_colour_of_ripe_fruit = $this->model->skin_colour_of_ripe_fruit();
        $this->view->flesh_colour_of_peiricarp_interior = $this->model->flesh_colour_of_peiricarp_interior();
        $this->view->flesh_colour_intensity = $this->model->flesh_colour_intensity();
        $this->view->colour_intensity_of_core = $this->model->colour_intensity_of_core();
        $this->view->fruit_cross_sectional_shape = $this->model->fruit_cross_sectional_shape();
        $this->view->shape_of_pistil_scar = $this->model->shape_of_pistil_scar();
        $this->view->fruit_blossom_end_shape = $this->model->fruit_blossom_end_shape();
        $this->view->blossom_end_scar_condition = $this->model->blossom_end_scar_condition();
        $this->view->fruit_firmness_after_storage = $this->model->fruit_firmness_after_storage();
    // End Fruit


        $this->view->plant = $this->model->plant();

        $this->view->seedling = $this->model->seedling();

        $this->view->flower = $this->model->flower();

        $this->view->seed = $this->model->seed();



        $this->view->render('physical_search/index');
    }
    function ajaxChart(){

        $cha = $_GET['cha'];
        header('Content-type: application/json');

        $value = strtolower(str_replace(' ', '_', $cha)) ;
        
        $result = $this->model->chart($value);
        $data = [];

        foreach($result as $key=>$value)
        {
            $data[] = $value;
        }

        ob_end_clean();
        print json_encode($data);

    }

}