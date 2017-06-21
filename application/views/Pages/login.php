<div class="col-md-9" id="content">
    <br><br><br>
    <?php echo form_open('user/log',['class' =>'form-horizontal']);?>
    <div class="form-horizontal col-md-8">
        <div class="form-group">
            <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
    </div>
</form>
</div>
