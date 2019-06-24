<?php

class Search_results2 extends Controller {

    public $model2 = null;
	function __construct() {
		parent::__construct();
        require 'models/table_display2_model.php';
        $this->model2 = new table_display2_model();
	}
	
	function index() {
		
		//$this->view->search = $this->model->search();
		$member = Session::get('member');
		$this->view->id_member = $member['id_member'];
		//$this->view->ShareWithMe = $this->model->get_share();

		//$this->view->image_result = $this->model->image_result();


        $tomato = $this->model->search();
        $path = $this->model->image_result();
        // Start : Asree ADD
        $ShareWithMe = $this->model->get_share();
        $CheckShareWithMe = false;
        $member = Session::get('member');
        if($member){
            //print_r($member);
            $member_id =   $member["id_member"];
        }
        else{
            //print("null");
            $member_id = -1;
        }
        foreach ($tomato as $key => $value) {
            if( $value['status_ow'] == 'Public' ){

            }
            else {
                // Start // chang data Unpublick to public required shar with me
                $CheckShareWithMe = false;
                foreach ($ShareWithMe as $key2=> $value2) {
                    if( $value2['id_fact_tomato'] == $value['id_fact_tomato'] ){
                        $tomato[$key]['status_ow'] = 'Public';
                        $CheckShareWithMe = true;
                        break;
                    }
                }
                // End // chang data Unpublick to public required shar with me
                if($CheckShareWithMe){

                }
                else if( $member_id != $value['id_member'] ){
                    // //print($key);
                    // print_r($tomato[$key]['accession_number'] );
                    // echo '<br>';
                    unset($tomato[$key]);
                    unset($path[$key]);
                }
            }
        }

		$accession_number = array();
        $id_accession_number = array();
        $i = 0;
        //print_r($tomato);
		foreach ($tomato as $item => $val)
        {
            $accession_number[$i] = $tomato[$item]['accession_number'];
            $id_accession_number[$i] = $tomato[$item]['id_accession_number'];
            $i++;
        }

        $_SESSION['radio_position'] = "all";
        //print_r($accession_number);
        $this->view->tdp_all = $this->model2->tdp_all($accession_number);
        $this->view->tdp_same = $this->model2->tdp_same($accession_number);
        $this->view->tdp_diff = $this->model2->tdp_diff($accession_number);

        $this->view->num_result = sizeof($accession_number);
        $this->view->id_accession_number = $id_accession_number;
        $this->view->accession_number = $accession_number;

		$this->view->render('search_results2/index');
	}	
}