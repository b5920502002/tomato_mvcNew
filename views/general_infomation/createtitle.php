<script>
    function goBack() {
        window.history.back()
    }
</script>


<div class="card">

    <div class="card-body">
        <h2>Create Title</h2>
        <form class="forms-sample" action="<?php echo URL ?>/General_Infomation/C_title" method="post">
            <div class="form-group">
                <label for="InputTitle">Title :</label>
                <input type="text" class="form-control" name="title_name" id="InputTitle" placeholder="Title"> 
            </div>
            <div class="form-group">
                <label for="InputSubTitle">Subtitle :</label>
                <input type="text" name="title_detail" class="form-control" id="InputSubTitle" placeholder="Subtitle"> </div>
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <input type="button" value="Cancel" class="btn btn-light" onclick="goBack()">
        </form>
    </div>
</div>