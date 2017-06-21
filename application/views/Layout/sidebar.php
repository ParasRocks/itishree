<div id="sidebar" class="col-md-3">
    <br><br><br>
    <h2>Navigations !!</h2>
    <ul class="list-group">
        <li class="list-group-item" style="text-align:left;font-size:24px;"><img src="<?=base_url();?>/png/1.png" style="width:60px;height:60px;"><?php if(isset($_SESSION['user_id'])){ echo $_SESSION['username'];}?></li>
    <?php
        if(isset($_SESSION['user_id']))
        {
            echo anchor('/','Home Page','class="list-group-item"');
            echo anchor('/logout','Logout','class="list-group-item"');
        }
        else{
            echo anchor('/','Home Page','class="list-group-item"');
            echo anchor('/login','Login Here','class="list-group-item"');
            echo anchor('/register','Register Here','class="list-group-item"');
        }
    ?>
    </ul>
</div>
