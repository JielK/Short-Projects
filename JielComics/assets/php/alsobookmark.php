<form method="post" action="bookmark_function.php">
        <input type="hidden" name="title" value="<?php echo $row['title']; ?>">
        <input type="hidden" name="cover" value="<?php echo $row['cover_img']; ?>">
        <input type="hidden" name="dir" value="<?php echo $row['folder']; ?>">
        <?php
          if(isset($_GET['user_id'])){
          include 'assets/php/user_id.php';
        }else{

        }
        ?>
        <input type="hidden" name="comic_id" value="<?php echo $row['comic_id']; ?>">
        <button class="bookmark" type="submit">Bookmark <i class="far fa-bookmark"></i></button>
</form>