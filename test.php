<?php
  $x = 20;
  if($x>10 && $x<30){
    echo '$xは10より大きいかつ30より小さい';
  }if($x>10 || $x<30){
    echo '$xは10以上または30以下';
    

  }if(!($x==20)){
    echo '$xは20ではない';

    }
  

  $age = 23;
  if($age>=30){
    echo 'あなたは30歳以上です。';
  }elseif($age<30){
    echo 'あなたは30歳未満です。';
    
  }

  $x = 1071;
    
  // 以下にif-elseif-else文を書いてください
  if($x%3==0 && $x%7==0){
    echo 'xは3の倍数かつ7の倍数です。';
  }elseif($x%3==0){
    echo 'xは3の倍数ですが7の倍数ではありません。';
  }elseif($x%7==0){
    echo 'xは7の倍数ですが3の倍数ではありません。';
  }else{
    echo 'xは7の倍数でも3の倍数でもありません。';

  }

  $coin = 33;

  $a= $coin%5;
  
  switch($a){
    case 0;
      echo '表';
    break;

    case 1;
      echo '裏';
    break;

    case 2;
      echo 'エラー';
    break;










  }




  ?>

 