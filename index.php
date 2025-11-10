<!DOCTYPE html>
<html>
    <head> 

    </head>
    <body>
        <?php

          
        $price= 1.2658;
        echo round($price,2);
        echo "<br>";
        echo ceil($price);
         echo "<br>";
         echo floor($price);//1-in
         echo "<br>";

         echo mt_rand(1,100);
         echo "<br>";
         echo lcg_value();
         echo "<br>";
         
        
          $w=[];
          for ($i=0; $i<5;$i++){
            $w[]=rand(1,100);
          }
          echo max($w);
          echo "<br>";
          echo min($w);
         //2-rd


         echo "<br>";
         $num1= -15.7;
         $num2= 8.3;
         echo abs($num1);
         echo "<br>";
         echo abs($num2);
         echo "<br>";
         echo pow($num1,2);
         echo "<br>";
         echo sqrt($num2);
         echo "<br>";
         echo pow($num1,$num2);//3-rd
         echo "<br>";

         $text="  hi ";
         echo trim($text);
         echo "<br>";
         echo strlen($text);
         echo "<br>";
         echo ucfirst($text);
         echo "<br>";
         echo strtoupper($text);
         echo "<br>";
        $text1= "BYE";
        echo strtolower($text1);//4-rd
        echo "<br>";


        $sentence ="i love javascript,javascript is great!";
        echo substr_count($sentence,"javascript");
        echo "<br>";
        echo str_replace("javascript","php",$sentence );
        echo "<br>";
        echo strchr($sentence,"great");
        echo "<br>";
        
        if (strpos($sentence, "love") !== FALSE) {
         echo "The string contains the character 'love'.";
      } else {
         echo "The string does not contain the character 'love'.";
      }//5-rd
      $email="user@example.com";
      echo "<br>";
      echo substr($email,0,4);
      echo "<br>";
      echo substr($email, 4);  
      echo "<br>";
      $arr=array('username','domain');
      echo implode("at",$arr);
      echo "<br>";
      $f=implode("at",$arr);
      echo substr($f,-4);//6-rd
      echo "<br>";

      $t="svetlana israyelyan";
      $word=explode(" ",$t);
      $firstName= $word[0];
      $lastName= $word[count($word)-1];
      echo $firstName;
      echo "<br>";//7-rd kes
        

      $fruit = ["apple","banana","kiwi","pear","straberry"];
      echo count($fruit);
       echo"<br>";
      echo $fruit[1];
      echo"<br>";
      array_pop($fruit);
      print_r($fruit);
      echo"<br>";
     array_unshift($fruit,"grapes");
     print_r($fruit);
     echo"<br>";
     array_push($fruit,"watermelon");
      print_r($fruit);
      echo "<br>";
  
      //8-rd 
      echo "<br>";

      $student = array("name"=>"sveta","surname"=>"israyelyan","age"=>"18");
    $k= array_keys($student);
   
     print_r($k);
      echo"<br>";
       $k1=array_values($student); 
     print_r($k1);
     echo "<br>";
     if (in_array("age", $student))
      {
         echo "Match found";
        }
      else
    {
        echo "Match not found";
       }
        $student["city"]="ijevan";
        print_r($student);//հարցնել ուսուցչին թե ինչու է թիվ բերում
        //9-rd
        echo "<br>";

        $numbers=[5,12,8,130,44,3 ];
        print_r(max($numbers));
         echo "<br>";
         print_r(min($numbers));
          echo "<br>";
          echo (array_sum($numbers));
                  echo "<br>";

          if(in_array("44",$numbers)){
            echo "true";
          } else{
            echo "false";
          }
          echo "<br>";
          function check($numbers){
            return $numbers%2==0;
          }

          $n=array_filter($numbers,"check");
          print_r($n);//10-rd

        echo "<br>";

        $fruits=["apple","banana"];
        $veggies=["carrot","potato"];
        sort($fruits);

          $clength = count($fruits);
          for($x = 0; $x < $clength; $x++) {
          echo $fruits[$x];
         echo "<br>";
     }
      echo "<br>";
      $p=array_merge($fruits,$veggies);
      print_r($p);
      echo "<br>";
      print_r(array_reverse($p));
      echo"<br>";
      print_r(implode(",",$p));//11-rd xndir
      echo"<br>";

      $h= [ 
        ["name"=>"svetlana","grade"=>[18,19.65,20] ],
        ["name"=>"harry","grade"=>[17,19.5,18]],
        ["name"=>"hermione","grade"=>[20,20,18.75]]
      ];
      $h_averages =[];
       foreach($h as $learner){
        $name=$learner['name'];
        $grade=$learner['grade'];
        $total_score= array_sum($grade);
        $grade_count= count($grade);
        $average=$total_score/$grade_count;
        $h_averages[$name]=$average;
        echo "**".$name ."-". number_format($average,2)."\n";
      }
      echo "<br>";
      $high=max($h_averages);
      $best_student=array_search($high,$h_averages);
      echo "lavaguyn usanox"." ". $best_student.number_format($high,2);
      echo"<br>";
            echo"--------\n";
      foreach($h as $learner){
        echo "* ". $learner['name']."\n";      }//13-rd xndir
        echo "<br>";
        $prices=[100,200,150,300];
        $final_prices=array_map(function($price){
          $price_with_vat=$price*1.2;
          $price_with_discount=$price_with_vat*0.9;
          return
          round($price_with_discount)."amd";
        }, $prices);
        print_r ($final_prices);//12-rd

        echo "<br>";

        $keys=["name","age","city"];
        $values=["john",25,"Yerevan"];
        $array=array_combine($keys,$values);
        print_r($array);
        echo "<br>";
         $array["height"]="1.90";
         print_r($array);
         echo "<br>";
         
         print_r(array_splice($array,1));//14-rd


        

          
          

 ?>

    </body>
</html>
  