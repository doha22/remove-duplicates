<?php 
    $new_m = array();
     $arr = ['التبرعات العينية للاسر',
     'التبرعات العينية للاسر',
     'التبرعات العينية للاسر',
     'التبرعات العينية للاسر'];
    //$arr =['ali amr','ali amr' ,'ali amr','ali amr'];
     $new_arr = array_unique($arr);
    foreach($new_arr as $i => $value){
      $new_m[$i] = $value;
      echo $new_arr[$i];
    }


    
     ?> 