<?php
//while制御文で試し打ち
// $count = 1;
// while ($count <= 100) {
//   foreach($count as $num){


//     if($num % 3 !== 0){
//       echo "{$count}<br />\n";
//       $count++;

//     }

  // echo "{$count}<br />\n";
  // $count++;
//   // }
//   }
// }
  // echo str_repeat("helloworld<br/>",100);


  $list = (range(1,100));

  foreach($list as $num) {

    if($num % 3 !== 0) {
        continue;
    }

    echo $num . 'Wealthy Design<br>';
  }



?>
