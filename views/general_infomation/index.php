 <header>
 <!-- include libraries(jQuery, bootstrap) -->
 <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<!-- include summernote css/js -->
<!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script> -->
<link href="<?php echo URL ?>public/summernote/dist/summernote.css" rel="stylesheet">
<script src= "<?php echo URL ?>public/summernote/dist/summernote.js"></script>
</header>

<style>
.dropdown-toggle::after {
    content: none;
}

.navbar {
    position: fixed;
    border:none;
}
.container-fluid {
    padding-left: 0px;
}
.content_HPS{
    margin-bottom: 2%;
}
.btn-md{
    width: 100px;
}
</style>
<?php
    $R_summernote=$this->R_summernote; 
    $Who_login = 0;// 1 = admin , 0 = other
    Session::get('member')['permission'] == "admin" ? $Who_login =1 : '';
?>
    <!-- start dragular -->
        <div id = "dragular-card" class="py-2"> 
            <?php
                foreach($R_summernote as $element) {
                    echo "
                    <div id='card-".$element['id_hps']."' data-id = '".$element['id_hps']."' data-position = '".$element['position']."' class='card content_HPS card rounded mb-2'>
                        <div class='card-body '>
                            <div class='row '>
                                <div class='col-lg-12'>
                                        <div id = '".$element['id_hps']."'>".$element['content']."</div>
                                        
                                </div>
                            </div>";
                            if ($Who_login){
                                echo "<button type='button'  class='btn U_content btn-success btn-md' data_id='".$element['id_hps']."' data = '".$element['content']."' >Edit</button>
                                <button type='button'  class='btn D_content btn-danger btn-md' data_id='".$element['id_hps']."'  >Delete</button>";
                            }
                        echo " 
                        </div>
                    </div>";
                }
            ?>
            
            <div id = "append_content">
            </div>
            </div>
    <!-- end dragular -->
            <?php // show , hidden summernote
                if($Who_login){
                    echo '
                    <div class="card content_HPS ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="postForm" action=""  method="POST" >
                                        <textarea id="summernote" name="content" rows="10"></textarea>
                                        <br/> 
                                        <button type="button" id = "save" class="btn btn-success btn-md">save</button>
                                        <button type="button" id = "preview" class="btn btn-success btn-md" data_id ="" >Preview</button>
                                        <button type="button" id="reset" class="btn btn-danger btn-md">Reset</button>
                                        
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            ?>
        
    

<div class="modal fade" id="preview_modal">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close btn-close" data-dismiss="modal">&times;</button>
                <div class="card">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-lg-12 ">
                                <div id = "preview_body">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="U_HSP" type="button" class="btn btn-success btn-md" data_id ="">Update</button>
                <button id="D_HSP" type="button" class="btn btn-danger btn-md" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script>
             var base_url = "<?php echo URL; ?>";
</script>
<script src="<?php echo URL ?>public/js/general_infomation.js"></script>