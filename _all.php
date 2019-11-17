
    <?php

        for ($i = 1;$i < 10;$i ++) {
            for($j = 1;$j < 17; $j ++) {
                if($j == 1) {
                    echo str_pad($i*$j,2," ",STR_PAD_LEFT);
                } else {
                    echo str_pad($i*$j,4," ",STR_PAD_LEFT);
                }
            }
        }
        
        echo"<br>";
        echo"<br>";
        echo"<br>";




        ////////////////////   forifelse     /////////////////////

        //$a < 20　←先頭の数字;
        //$b < 7　←数字が繰り返される数;
        
        #ここの数字がわからない;

        for($a = 1; $a<20; $a++) { 
            for($b = 1; $b<7; $b++) { 
                if ($b == 1) {
                    echo str_pad($a*$b,3," ",STR_PAD_LEFT);
                } else {
                 echo str_pad($a*$b,6," ",STR_PAD_LEFT); 
                }
            }
        }

        echo"<br>";
        echo"<br>";
        echo"<br>";

        for($i = 1; $i <= 20; $i++) {
            $price = $i*10;
            echo "the price of $price is $price <br>";
        }


        ////////////////////   function    /////////////////////


        function text() {
            echo "kanako";
        }
        text();
 
        function name($fname = "kanako",$lname = "sugita") {
            echo "$fname and $lname";
        }
        echo"<br>";
        name();
        echo"<br>";
        name ("Asami","Nakayama");
        echo"<br>";
        name ("tarou");

        echo"<br>";


        function add($a,$b) {
            $sum = $a + $b;
            echo $sum;
        }
        add (100,10);


        $like = array ("Movie","Netflix","Travel");

        foreach ($like as $hobby) {
            echo $like;
        }

        $cars = array("VOLVO","BMW","toyota",10);
        echo"<br>";

        var_dump($cars);
        echo"<br>";

        echo count($cars);
        echo"<br>";

        $lengh = count($cars);
        for($x = 2;$x < $lengh;$x ++) {
            echo $cars[$x]." <br>";
        }
        echo"<br>";


        $arr=array("kanako"=>20,"noriko"=>30,"asami"=>40);
        echo $arr['kanako'];
        echo"<br>";
        echo"<br>";
        
        foreach ($arr as $x=>$arr) {
            echo $x."は".$arr."です";
        }
         
        $multi = array (
                    array ("kanako","vietnam",10),
                    array ("noriko","japan",11),
                    array ("pak","korea",4)
        );

        echo"<br>";

        echo $multi[0][0]."は天才です";

        echo"<br>";

        sort($like);
        foreach ($like as $l) {
            echo $l;
        }

        rsort ($like);
        foreach ($like as $i) {
            echo $i;
        }


        echo"<br>";

        $prac = "Hello world";
        echo strlen ($prac);
        echo"<br>";


        echo str_word_count($prac);
        echo"<br>";


        echo strrev ($prac);
        echo"<br>";

        echo strpos("kanako","sugita");

        echo str_replace("kanako","hello vietnam","vietnam");

     ?>