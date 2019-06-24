
    <style>
        a {
            color: #6c757d;
        }

        .sli {
            align-content: center;
            max-width: 250px;
            max-height: 250px;
            width: 100%;
            height: 100%;
        }

        .sa {
            align-content: center;
            max-width: 150px;
            max-height: 150px;
            width: 100%;
            height: 100%;
        }

        .tx {
            text-align: center;
        }
      
    </style>
  

    <div id="showD" class="container">
        <div class="row">
            <div class="col-lg-8">
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" name="accession_number" id="as_search" class="form-control search" placeholder="Accession number">
                    <div class="input-group-append text-white">
                        <button type="submit" class="btn  btn-danger">
                            <i class="text-white fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h2>Administrator</h2>&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="template-demo">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-plus">New</i>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(118px, 32px, 0px);">
                                <a class="dropdown-item" href="<?php echo URL?>general_infomation/createtitle">Create title</a>
                                <a class="dropdown-item" href="<?php echo URL?>general_infomation/createdetail">Create details</a>
                                <a class="dropdown-item" href="<?php echo URL?>general_infomation/createpicture">Create pictures</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <?php                     
        $test =$this->homepage;
        //print_r($test);
        ?>
        <?php 
        foreach($test as $key=>$value)
        {?>
                <?php 
                if($value['type']=='title')
                {?>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="tx card-body">
                                   <h4><?php echo $value['title'];  ?></h4><br>
                                   <h6><?php echo $value['text'];  ?></h6> 
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                else
                {
                    if($value['position']=='1')
                    {?>
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img class="sli img-fluid w-100 rounded" src="<?php echo $value['parth'];?>">
                                                </div>
                                                <div class="col-md-8">
                                                <p>
                                                    <?php echo $value['message'];?>
                                                </p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php   
                    }
                    else
                    {?>
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p style = "color:red;">
                                                    
                                                    <?php echo $value['message'];?> 
                                                </p>
                                            </div>
                                            <div class="col-md-4 ">
                                                    <img class="sli img-fluid w-100 rounded" src="<?php echo $value['parth'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    } 
                }   
        }?>












                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Tomato picture</h2>
                                    <BR>
                                    <div class="row">

                                        <div class="img-card col-xl-3 ">
                                            <div class="card card-pic1">
                                                <div class="card-body card-pic1">
                                                    <div class="clearfix">
                                                        <center>
                                                            <img class="sa img-fluid w-100 rounded" src="<?php echo URL; ?>pic/t3.jpg" alt="Sample Image">
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="img-card col-xl-3  ">
                                            <div class="card card-pic1">
                                                <div class="card-body card-pic1">
                                                    <div class="clearfix">
                                                        <center>
                                                            <img class="sa img-fluid w-100 rounded" src="<?php echo URL; ?>pic/t3.jpg" alt="Sample Image">
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="img-card col-xl-3 ">
                                            <div class="card card-pic1">
                                                <div class="card-body card-pic1">
                                                    <div class="clearfix">
                                                        <center>
                                                            <img class="sa img-fluid w-100 rounded" src="<?php echo URL; ?>pic/t3.jpg" alt="Sample Image">
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="img-card col-xl-3  ">
                                            <div class="card card-pic1">
                                                <div class="card-body card-pic1">
                                                    <div class="clearfix">
                                                        <center>
                                                            <img class="sa img-fluid w-100 rounded" src="<?php echo URL; ?>pic/t3.jpg" alt="Sample Image">
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>