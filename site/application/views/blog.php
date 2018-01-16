<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'include/header.php';
?>
		<div id="page-body" class="page-body" role="main"></div>

	<?php
  foreach($posts as $post ){
    include '/include/post.php';
}
  include 'include/footer.php';
