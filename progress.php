<?php
if(empty($argv[1])) $argv[1] = 5;
define("MAX_SEQUENCE",$argv[1]);

for($i=0;$i<MAX_SEQUENCE;$i++){
  $num = $i + 1;
  echo "({$num}/".MAX_SEQUENCE.") ";
  print_progress();
}

function print_progress()
{
  for($i=0;$i<20;$i++){
    animate();
    echo "#";
    // sleep(rand(0,1));
  }
  echo " done\r\n";
}

function animate() {
  for($j=0;$j<8;$j++){
    switch($j){
    case 0:
      echo "-";
      break;
    case 1:
      echo "\\";
      break;
    case 2:
      echo "|";
      break;
    case 3:
      echo "/";
      break;
    case 4:
      echo "-";
      break;
    case 5:
      echo "\\";
      break;
    case 6:
      echo "|";
      break;
    case 7:
      echo "/";
      break;
    }
    usleep(rand(10000,200000));
    if(rand(1,100)<=1) sleep(1.5); 
    echo "\x08";
  }
}

?>
