<?php

function parse_bbcode($text='')
{
  	$parsed = strip_tags($text);

  	// replacements
  	$parsed = preg_replace('#\[b\](.+)\[\/b\]#iUs', '<strong>$1</strong>', $parsed);
  	$parsed = preg_replace('#\[link\=(.+)\](.+)\[\/link\]#iUs', '<a href="$1">$2</a>', $parsed);
    $parsed = preg_replace('#\[url\=(.+)\](.+)\[\/url\]#iUs', '<a class="postlink" href="$1">$2</a>', $parsed);
    $parsed = preg_replace('#\[color\=(.+)\](.+)\[\/color\]#iUs', '<span style="color:$1">$2</span>', $parsed);

     	$parsed = preg_replace('#\[img\](.+)\[\/img\]#iUs', '<img src="$1" alt="Image" />', $parsed);
     	$parsed = preg_replace('#\[quote\=(.+)\](.+)\[\/quote]#iUs', '<div class="quote">$2</div><div class="quote-author">By: $1</div>', $parsed);
      $parsed = str_replace("\n","<br>",$parsed);
  return $parsed;
}
