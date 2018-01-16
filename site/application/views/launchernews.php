<h3 style="color: #5e9ca0; text-align: center;">HUNgaros Extreme<br />V 3.0</h3>
<?php

 for($i = 0; $i<count($posts);$i++){

   $post = $posts[$i];
  ?>
<h3><?php echo $post->post_subject?></h3>
    <p><?php echo parse_bbcode($post->post_text);?></p>

  <?php
  if($i < count($posts)-1)
  {
    ?>
    <hr><?php
  }
}

?>
