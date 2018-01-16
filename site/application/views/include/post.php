<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
						<dl class="row-item">
              <?php
                $posturl = "http://www.hungaros.hu/viewtopic.php?f=".$post->forum_id."&t=".$post->topic_id
              //str_replace("/","%3",$url)?>
						<dt><div class="list-inner"><a href="<?php echo $posturl?>"><?php echo $post->post_subject?></a></div>

            <!--<dd class="share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=http://www.hungaros.hu/<?php echo urlencode($posturl)?>&layout=button&size=small&mobile_iframe=true&width=105&height=28&appId" width="105" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></dd>-->
					</dl>
									</li>
			</ul>

			<ul class="topiclist forums content" style ="font-size: 1.3em; padding:10px">
          <?php echo parse_bbcode($post->post_text);?>
				</ul>


			</div>
		</div>
