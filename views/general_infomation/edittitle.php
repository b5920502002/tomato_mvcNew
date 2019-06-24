<script>
    function goBack() {
        window.history.back()
    }
</script>


<div class="card">

    <div class="card-body">
        <h2>Edit Title</h2>
        <form class="forms-sample">
            <div class="form-group">
                <label for="InputTitle">Title :</label>
                <input type="text" class="form-control" id="InputTitle" placeholder="Title"> </div>
            <div class="form-group">
                <label for="InputSubTitle">Subtitle :</label>
                <input type="text" class="form-control" id="InputSubTitle" placeholder="Subtitle"> </div>
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <input type="button" value="Cancel" class="btn btn-light" onclick="goBack()">
        </form>
    </div>
</div>