<script>
        function goBack() {
            window.history.back()
        }
</script>

<link rel="stylesheet" href="<?php echo URL?>theme/assets/js/dropzone-5.5.0/dist/dropzone.css">
<link rel="stylesheet" href="<?php echo URL?>https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script src="<?php echo URL?>theme/assets/js/dropzone-5.5.0/dist/dropzone.min.js"></script>

<div class="card">
                        <div class="card-body">
                            <h2>Create Picture</h2>
                            <div class="form-group">
                                    <label for="InputTitle">Title :</label>
                                    <input type="text" class="form-control" id="InputTitle" placeholder="Title"> </div>
                            <form action="/" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                            
                            </form><br>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <input type="button" value="Cancel" class="btn btn-light" onclick="goBack()">
                        </div>
</div>