<?php
    include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <input type="hidden" name="id" value="<?php echo $_SESSION['movie']['id']?>">
    <div class="body d-flex justify-content-between">
        <h4>EDIT SERIES</h4>
    </div>
    <hr>
    <form class="row g-3">
        <div class="col-md-12">
            <label for="title" class="form-label">Movie Title</label>
            <input class="form-control" name="name" value="<?php echo $_SESSION['movie']['name']?>" required>
        </div>
        <div class="col-md-12">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select" name="genre" multiple required>
                <option value="Horror" <?php echo $_SESSION['movie']['genre']=='Horror' ? 'selected' : '' ; ?>>Horror</option>
                <option value="Romance" <?php echo $_SESSION['movie']['genre'] ? 'selected' : '' ; ?>>Romance</option>
                <option value="Sci-Fi" <?php echo $_SESSION['movie']['genre']=='Sci-Fi' ? 'selected' : '' ; ?>>Sci-Fi</option>
            </select>
        </div>
        <div class="col-md-12">
            <label for="realese" class="form-label">Realese</label>
            <input class="form-control" name="realese" value="<?php echo $_SESSION['movie']['realese'] ?>" required>
        </div>
        <div class="col-md-12">
            <label for="episode" class="form-label">Episode</label>
            <input class="form-control" name="episode" value="<?php echo $_SESSION['movie']['episode'] ?>" required>
        </div>
        <div class="col-md-12">
            <label for="season" class="form-label">Season</label>
            <input class="form-control" name="season" value="<?php echo $_SESSION['movie']['season'] ?>" required>
        </div>
        <div class="col-md-12">
            <label for="sypnosis" class="form-label">Synopsis</label>
            <input class="form-control" name="synopsis" value="<?php echo $_SESSION['movie']['synopsis'] ?>" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="editMovie">Edit Movie</button>
        </div>
    </form>
</div>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>