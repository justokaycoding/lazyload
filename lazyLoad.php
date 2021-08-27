<?php

if(isset($_GET['lazyLoad'])){
  echo placeHolder(11, $_GET['index'] + 1);
}

function placeHolder($count = 11, $index = 0){
  $output = '';
  $count;
  for($i = 0; $i < $count; $i++){
    $class = $i + 1 == $count ? 'active ' : '';
    $output .= '<div class="wrapper img '.$class. 'item-'.$index.'" data-index="'.$index.'">';
    $output .= '<p>Lorem ipsum dolor</p>';
    $output .= '<img src="https://picsum.photos/600/300?nocache='.$index.'" />';
    $output .= '</div>';
    $index++;
  }
  return $output;
}
