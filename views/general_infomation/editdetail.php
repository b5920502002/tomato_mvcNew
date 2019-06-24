<script type="text/javascript" src="<?php echo URL?>theme/assets/js/croppie.js"></script>
<link href="<?php echo URL?>theme/assets/js/croppie.css" rel="stylesheet" type="text/css">

 
    <script>
        function goBack() {
            window.history.back()
        }
    </script>

    <style>
        .card-title {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            color: #404852;
            margin-bottom: 10px;
            font-size: 25px;
            text-transform: capitalize;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .cenbut {
            text-align: center;
        }

        .btn-inverse-dark {
            color: #424964;
            background-color: #ffffff;
            background-image: none;
            border-color: rgba(66, 73, 100, 0);
        }

        .btn-group {
            border: 1px solid #aaa;
            border-radius: 0.1875rem;
        }

        .btn-inverse-dark.focus,
        .btn-inverse-dark:focus {
            box-shadow: none;
        }

        .btn-inverse-dark:hover {
            opacity: 0.75;
        }

        .preview-image {
            align-content: center;
            max-width: 250px;
            max-height: 250px;
            width: 100%;
            height: 100%;
        }

        .preview {
            text-align: center;
        }
        .croppie-container {
             width: 100%;
             height: unset; 
}
    </style>


   
    <script>
        $(document).ready(function () {

            handleStatusChanged();

        });

        function handleStatusChanged() {
            $('#toggleElement').on('change', function () {
                toggleStatus();
            });
        }

        function toggleStatus() {
            if ($('#toggleElement').is(':checked')) {
                $('#elementsToOperateOn :input').attr('disabled', true);
            } else {
                $('#elementsToOperateOn :input').removeAttr('disabled');
            }
        }

        //Circle Crop
        $(document).ready(function () {
            var $uploadCrop;

            function readFile(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        //Circle                       
                        $uploadCrop.croppie('bind', {
                            url: e.target.result
                        });

                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $uploadCrop = $('#upload-demo').croppie({
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'circle'
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });

            $('#upload').on('change', function () {

                readFile(this);
            });
            $('.upload-result').on('click', function (ev) {
                $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'original'
                }).then(function (resp) {
                    if (resp == 'data:,') {
                        console.log('no pic');
                    }
                    else {
                        $('#imagebase64').val(resp);
                        $.ajax({
                            url: "crop_image.php",
                            method: "post",
                            data: { imagebase64: resp },
                            success: function (data) {
                                $('#temp_pic').val(data);
                            },
                            error: function (data) {
                                console.log("error");
                                console.log(data);
                            }

                        });

                        $('#myModal1').modal('hide');
                    }

                });
            });



        });

        // Crop Square
        $(document).ready(function () {
            var $uploadCrop;

            function readFile(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $uploadCrop.croppie('bind', {
                            url: e.target.result
                        });
                    }
                    reader.readAsDataURL(input.files[0]);
                }

            }

            $uploadCrop = $('#upload-demo2').croppie({
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'square'
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });

            $('#upload2').on('change', function () {

                readFile(this);
            });
            $('.upload-result').on('click', function (ev) {
                $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'original'
                }).then(function (resp) {
                    if (resp == 'data:,') {
                        console.log('no pic');
                    }
                    else {
                        $('#imagebase64').val(resp);
                        $.ajax({
                            url: "crop_image.php",
                            method: "post",
                            data: { imagebase64: resp },
                            success: function (data) {
                                $('#temp_pic').val(data);
                            },
                            error: function (data) {
                                console.log("error");
                                console.log(data);
                            }

                        });

                        $('#myModal2').modal('hide');
                    }

                });
            });


        });
    </script>





<div class="card">
    <div class="card-body">

        <h2>Edit Detail</h2>
        <form class="forms-sample" id="create_detail" action="crop_image.php" method="post">
            <input type="hidden" id="imagebase64" name="imagebase64">
            <div class="form-group">
                <label for="InputTitle">
                    <input id="toggleElement" type="checkbox" name="toggle" onchange="toggleStatus()" />Title or No Title :</label>
                <br>
                <div id="elementsToOperateOn">
                    <input type="text" class="form-control" id="InputTitle" placeholder="Title">
                </div>
            </div>

            <div class="form-group">
                <input name="cb" type="radio" id="cb1" value="1" checked>
                <label for="cd1" style="vertical-align:text-top;text-align:center; padding:0 10px 0 10px;">Crop by circle </label>
                <input name="cb" type="radio" id="cb2" value="2">
                <label for="cd2" style="vertical-align:text-top; text-align:center; padding:0 10px 0 10px;">Crop by square </label>

            </div>


            <div class="form-group">
                <label>Upload and crop image</label>
                <br>
                <button type="button" class="btn btn-success mr-2 btn-crop">Upload image</button>
            </div>
            <div class="form-group">
                <label>Text position</label>
                <br>
                <div class="btn-group">
                    <button type="button" class="btn btn-inverse-dark active  btn-sm pic-left">
                        <i class="fa fa-image"></i>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="btn btn-inverse-dark  btn-sm pic-right">
                        <i class="fa fa-align-justify"></i>
                        <i class="fa fa-image"></i>
                    </button>
                </div>
            </div>
            <div class="show-image">
            </div>
            <div class="form-group">
                <label for="InputMessage">Text :</label>
                <textarea class="form-control" id="InputMessage" rows="4"></textarea>
            </div>



            <button type="button" class="btn btn-success mr-2 btn-preview">Preview</button>
            <input type="button" value="Cancel" class="btn btn-light" onclick="goBack()">

        </form>
        <input type="hidden" id="temp_pic" />
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal1">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close btn-close" data-dismiss="modal">&times;</button>
                <div class="card-body">
                    <form action="" id="form" method="post">
                        <div id="upload-demo"></div>
                        <div class="cenbut">
                            <input type="file" id="upload" value="">
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary upload-result">Crop</button>
                            <button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal2">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close btn-close" data-dismiss="modal">&times;</button>
                <div class="card-body">
                    <form action="" id="form2" method="post">
                        <div id="upload-demo2"></div>
                        <div class="cenbut">
                            <input type="file" id="upload2" value="">
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary upload-result ">Crop</button>
                            <button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="preview_pic">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close btn-close" data-dismiss="modal">&times;</button>
                <div class="card">
                    <div class="card-body">
                        <h4 align="center" class="preview_title" id="preview_title"></h4>
                        <br>
                        <div class="row preview_pic_body">


                        </div>


                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success ">Create</button>
                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function () {
        $('.btn-preview').click(function () {
            /*
            check = $('#imagebase64').val();
            if (check)
            {
                $('#create_detail').submit();
            }
     */
            var pic_left = $(".pic-left").hasClass("active");
            var pic_right = $(".pic-right").hasClass("active");
            $(".preview_pic_body").empty();
            if (pic_left) {
                $(".preview_pic_body").append("<div class='col-lg-4 preview'><img class='preview-image' id='preview_image'></div>");
                $(".preview_pic_body").append("<div class='col-lg-8'><p class='preview_text' id='preview_text'></p></div>");
            }
            else if (pic_right) {
                $(".preview_pic_body").append("<div class='col-lg-8'><p class='preview_text' id='preview_text'></p></div>");
                $(".preview_pic_body").append("<div class='col-lg-4 preview'><img class='preview-image' id='preview_image'></div>");
            }
            var title = $("#InputTitle").val();
            var image = $("#temp_pic").val();
            var text = $("#InputMessage").val();
            $('#preview_title').append(title);
            $('#preview_image').attr("src", image);
            $('#preview_text').append(text);
            if (image) {
                $('#preview_pic').modal('show');
            }
            else {
                alert("Please Upload image");
            }

        });
        $(".btn-crop").click(function () {

            var cb1 = $("#cb1")[0].checked;
            var cb2 = $("#cb2")[0].checked;
            check = $('#upload-demo .cr-image').attr("src");
            if (!check) {
                $("#upload-demo .cr-image").hide();
            }

            if (cb1) {
                $('#myModal1').modal('show');
            }
            else if (cb2) {
                $('#myModal2').modal('show');
            }
        });
        $(".btn-close").click(function () {
            $('#upload').empty();
        });
        $(".pic-left").click(function () {
            $(".pic-right").removeClass("active");
            $(".pic-left").addClass("active");
        });
        $(".pic-right").click(function () {
            $(".pic-left").removeClass("active");
            $(".pic-right").addClass("active");

        });
    });

</script>