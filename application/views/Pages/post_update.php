<div class="col-md-9" id="content">
    <br><br>
    <?php echo form_open('update',['class' =>'form-horizontal']);?>
    <div class="form-horizontal col-md-8">
        <div class="form-group">
            <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?=$post->title;?>">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="<?=$post->author;?>">
        </div>
        <?php echo form_hidden('user_id',$_SESSION['user_id']); ?>
        <div class="form-group">
            <label for="category">Categories</label>
                <select name="categories" class="form-control" id="category">
                    <option value="Weather" <?php //('weather'==$post->category) ? echo "selected";?>>Weather</option>
                    <option value="Sports">Sports</option>
                    <option value="Bollywood">Bollywood</option>
                    <option value="Hollywood">Hollywood</option>
                    <option value="News">News</option>
                </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?=$post->description;?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Post">
        </div>
    </div>
</div>
