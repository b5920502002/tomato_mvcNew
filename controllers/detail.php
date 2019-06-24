<?php

class Detail extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $detail = $this->model->detail();
        $this->view->detail = $detail ;
        //$this->view->genome   = $this->model->genome();
        $this->view->show_img = $this->model->show_img($_POST['accession_number']);
        $this->view->show_primary_img = $this->model->show_primary_img($_POST['accession_number']);
        $this->view->layout   = $this->model->layout();
        $this->view->location   = $this->model->location();
        $this->view->owner_check   = $this->model->owner_check($detail['id_fact_tomato']);
        //print_r($this->model->owner_check($detail['id_fact_tomato']));
        //print_r($_SESSION['member']['id_member']);
        $this->view->render('detail/index');
    }

    public function layout()
    {
        if (isset($_POST['text_layout']) && $_POST['text_layout'] != "" && $_POST['accession_number_layout'] != "") {
            $accession_number = $_POST['accession_number_layout'];
            $layout           = $_POST['text_layout'];
            $this->view->insert_layout = $this->model->insert_layout($_POST['text_layout'], $_POST['accession_number_layout']);
        }
    }

    public function upload_img()
    {

        $count            = count($_FILES["myfile"]["name"]);
        $check            = 0;
        $msg              = "Upload Successfully.";
        $accession_number = $_POST['accession_number'];
        $category         = strtolower($_POST['category']) ;
        $path_folder = 'pic/detail/'."$category" ;

        if ($_FILES["myfile"]["name"][0] == "") {
            //echo "<script> alert('Please select at least one file.');  </script>";
            return false;
        }

        if (!file_exists($path_folder)) {
            mkdir($path_folder, 0777, true);
        }

        $target_dir = $path_folder."/";

        //echo "<script> alert('$target_dir');  </script>";

        for ($i = 0; $i < $count; $i++) {

            $ext = pathinfo(basename($_FILES["myfile"]["name"][$i]), PATHINFO_EXTENSION);

            $target_file   = $target_dir . basename($_FILES["myfile"]["name"][$i]);
            $uploadOk      = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $check = 0;
                $msg   = $imageFileType;
            } else {
                $new_name    = 'img_' . uniqid() . "." . $ext;
                $target_file = $target_dir . $new_name;

                if (move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $target_file)) {
                    $check       = 1;
                    $upload_file = $this->model->upload_file($new_name, $accession_number, strtolower($category));
                    //echo "<script> alert('Success');  </script>";
                    
                    //echo "<script> showSwal('submit-upload'); </script>";
                } else {
                    $check = 0;
                    echo "<script> alert('Upload Fail.');  </script>";
                }
            }
        }

    } // End Function upload_img()

    public function upload_primary_img()
    {
        $check            = 0;
        $msg              = "Upload Successfully.";
        $accession_number = $_POST['primary_accession_number'];
        $path_folder = 'pic/detail/'."$accession_number" ;
        $fileName = "" ;
        $tmpName = "";
        //echo "<script> alert('$path_folder');  </script>";

        if($_POST["setMainImage"] != ""){
            $full_path = $_POST["setMainImage"] ;
            $str_rp = str_replace(URL, "", $full_path);
            $upload_file = $this->model->upload_primary_img($str_rp , $accession_number);
            //echo "<script> alert('$str_rp');  </script>";
            return true ;
        }
        if($_FILES["primary_image"]["name"][0] != ""){
            $fileName = $_FILES["primary_image"]["name"][0];
            $tmpName = $_FILES["primary_image"]["tmp_name"][0];
            //echo "<script> alert('$fileName');  </script>";
        }
        elseif ($_FILES["primary_image"]["name"][1] != "") {
            $fileName = $_FILES["primary_image"]["name"][1];
            $tmpName = $_FILES["primary_image"]["tmp_name"][1];
        }
        else{
            //echo "<script> alert('Please select a image.');  </script>";
            return false;
        }

        if (!file_exists($path_folder)) {
            mkdir($path_folder, 0777, true);
        }

        $target_dir = $path_folder."/";


        $ext = pathinfo(basename($fileName), PATHINFO_EXTENSION);

        $target_file   = $target_dir . basename($fileName);
        $uploadOk      = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $check = 0;
            $msg   = $imageFileType;
            //echo "<script> alert('$msg');  </script>";
        }
        else {
            $new_name    = 'img_' . uniqid() . "." . $ext;
            $target_file = $target_dir . $new_name;
            if (move_uploaded_file($tmpName, $target_file)) {
                $check       = 1;
                $upload_file = $this->model->upload_primary_img($target_file, $accession_number);
                //echo "<script> alert('$target_file');  </script>";
            } else {
                $check = 0;
                $msg   = "Sorry, there was an error uploading your file. ";
                //echo "<script> alert('$msg');  </script>";
            }
        }
        
    } // End Function upload_img()

    public function deleteImage()
    {
        $pathFile = $_POST['filename_delete'];
        $accession_number = $_POST['accession_number_delete'];

        $delete_file = $this->model->delete_file($pathFile,$accession_number);

        $arr_file = explode(',', $pathFile);

        for ($i=0; $i < sizeof($arr_file); $i++) {
         unlink($arr_file[$i]) or die("Couldn't delete file"); 
     }



 }

} // End Class()
