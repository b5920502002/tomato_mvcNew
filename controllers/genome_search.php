<?php

class Genome_search extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {	
		//header('Content-Type: application/json');	
		$this->view->genom_chrom = $this->model->chromosome();
		$this->view->genom_atcg = $this->model->atcg();
		$this->view->accession_number = $this->model->accession_number();
		// $json_data = $this->view->genom_chrom;
		// print json_encode($json_data);
	 	$this->view->render('genome_search/index');
	}
	function search() {	
		//header('Content-Type: application/json');	
		//$this->view->genom_chrom = $this->model->index();
		$data = array();
		// $data['chrom'] = $_POST['chrom'];
		// $data['chrom'] = explode(',', $data['chrom']);
		
		//$data['chrom'] = $data['chrom'][0].'-'.$data['chrom'][1];
		if(isset($_POST['chrom']))
		{
			$data['chrom'] = $_POST['chrom'];
			$where = "";
			for($i=0;$i<sizeof($data['chrom'])-1;$i++)
			{
				// $data['chrom'] = "(view_genom.chrom = '".$_POST['chrom'][$i]."' OR) ";
				$where .= "view_genom.chrom ='".$data['chrom'][$i]."' OR ";
			}
			$where .= "view_genom.chrom ='".$data['chrom'][$i]."'";
			$test = "($where)";
			$data['chrom'] = $test;
		}
		else
		{
			$message = "กรุณาเลือกค่า chromosome ";
			echo "<script type='text/javascript'>alert('$message');window.location='index';</script>";
		}
		
		// if(isset($_POST['strand']))
		// {
		// 	$data['strand'] = "view_genom.strand = '".$_POST['strand']."'";
		// }
		// else
		// {
		// 	$data['strand'] = "view_genom.strand = '+' OR view_genom.strand = '-' OR view_genom.strand = '+/-' OR view_genom.strand = '-/+'";
		// }

		// if(isset($_POST['atcg']))
		// {
		// 	$data['atcg'] = $_POST['atcg'];
		// 	$where = "";
		// 	for($i=0;$i<sizeof($data['atcg'])-1;$i++)
		// 	{
		// 		$where .= "view_genom.ATCG ='".$data['atcg'][$i]."' OR ";
		// 	} 
		// 	$where .= "view_genom.ATCG ='".$data['atcg'][$i]."'";
		// 	$test = "($where) AND ";
		// 	$data['atcgWH'] = $test;
		// }
		// else
		// {
		// 	$data['atcgWH']="";
		// }

		// $data['quality'] = $_POST['quality'];
		// $data['quality'] = explode(',', $data['quality']);

		// $data['depth'] = $_POST['depth'];
		// $data['depth'] = explode(',', $data['depth']);

		$data['pos1'] = $_POST['pos1'];
		$data['pos2'] = $_POST['pos2'];
		$pos="";
		// $string2 = str_replace(' ', '', $data['pos1']);
		if ($data['pos1'] !==' ' && $data['pos2'] !==' ' ) 
		{
			// $data['pos1'] = $_POST['pos1'];
			// $data['pos2'] = $_POST['pos2'];
			$pos = "";
			if($data['pos1'] > $data['pos2'])
			{
				$data['pos1'] = number_format($data['pos1']);
				$data['pos2'] = number_format($data['pos2']);
				$message = "เกิดข้อผิดพลาดเนื่องจากค่าของ position1=".$data['pos1']." มากกว่าค่าของ position2=".$data['pos2']."";
				echo "<script type='text/javascript'>alert('$message');
				window.location='index';</script>";
				
			}
			else
			{
				$pos = "(view_genom.position BETWEEN ".$data['pos1']." AND ".$data['pos2'].") AND ";
			}
			
		}
		else if($data['pos1'] !==' ' && $data['pos2'] ==' ' )
		{
			$data['pos1'] = $_POST['pos1'];
			$pos = "";
			$pos = "(view_genom.position >= ".$data['pos1']." ) AND";
		}
		else if($data['pos1'] ==' ' && $data['pos2'] !==' ' )
		{
			$data['pos2'] = $_POST['pos2'];
			$pos = "";
			$pos = "(view_genom.position <= ".$data['pos2'].") AND ";
		}
		else
		{
			$pos = "";
		}

		$data['position'] = $pos;
		
		//$this->view->showresult=$data;
		//$this->view->view_genom = $this->model->showresult();
	
		//$this->view->test=$data['atcgWH'];
		//$this->view->showresult=$this->model->showresult($data);
		//$this->view->genom_strand = strand();
		// $json_data = $this->view->genom_chrom;
		// print json_encode($json_data);
							 //////  test fuction
							// $genome = $this->model->search($data);
							// $ss ="";
							// for ($i=0; $i < strlen($genome['dna'][0]['dna_accession']) ;$i++)
							// {
							// 	$ss .= $genome['dna'][0]['dna_accession'][$i]."@";
							// }
							// $ss = substr($ss,0,-1);
							// $ss =str_replace("W","A,T",$ss);
							// $ss =str_replace("R","T,C",$ss);
							// $ss =str_replace("Y","C,A",$ss);
							// $ss =str_replace("M","G,A",$ss);
							// $ss =str_replace("S","A,G",$ss);
						
							// $test = Genome_toDB($ss);
						
							// $data_genome =DB_toGenome($test);
							// //echo $data_genome;
							// $genome['dna'][8]['dna_accession']=$data_genome;
							// //$data_genome['view_genom']['dna'][0]['dna_accession']=$data_genome;
							// $this->view->genom_search = $genome;

							/////// end test function
		$genome =$this->model->search($data);
		for ($i=0; $i < sizeof($genome['dna']); $i++) { 
			$data_genome =DB_toGenome($genome['dna'][$i]['dna_accession']);
			$genome['dna'][$i]['dna_accession']=$data_genome;
		}
		$this->view->genom_search = $genome;
		$this->view->render('genome_search/showresult');
		
	}	
	
}
	