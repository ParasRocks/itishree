<div id="content" class="col-md-9">
    <?php
    if(isset($_SESSION['user_id']))
    {
        echo anchor('/post','Post Something new',array('class'=>"btn btn-primary pull-right"));
    }
    ?>
    <br><br>
    <h3 class="pull-right">Latest Posts</h3>

    <hr>

    <?php
    if($posts)
    {
    foreach ($posts as $post)
    {?>
    <div class="col-md-10">
        <h4 style="color:red;"><img src="<?=base_url();?>/png/circle-twitter.png"> <?=$post['title'];?></h4>
        <span style="border-bottom:2px solid blue;padding:2px;">Created By : </span> <span class="auth"><?=$post['author'];?></span>
        <span class="cate"><?=$post['category'];?></span>
        <br><br>
        <p class="well">"<?=$post['description'];?>"</p>
        <hr>
    </div>
    <div class="col-md-2 edit">
        <?php
        if(isset($_SESSION["user_id"]))
        {
            if($_SESSION['user_id']==$post['user_id'])
            {
                echo anchor('post/edit/'.$post['post_id'],'Edit')."<br><br><br>";
                echo anchor('post/delete/'.$post['post_id'],'Delete');
            }
        }
        ?><br>
    </div>
    <?php
    }}
    else{?>
    <div class="col-md-10">
        <h1>ther is no post</h1>
    </div>
    <?php }?>

</div>
