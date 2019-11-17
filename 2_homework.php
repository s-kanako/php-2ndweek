<html>
    <head>
        <link rel="stylesheet" href ="2_homework.css">
    </head>
    <body>
        
    <div class="box">
        <h2>Variables</h2> 
        <p> $a = 10; <br>
        
            echo $a; <br>
        <?php
            $a = 10;
            echo "a = 10<br>$a";
        ?>
    
    </div>

    <div class="box">
        <h2>Operators</h2>
        <p>$b = 5; <br>
            $c = 10;<br>

            $add = $a + $b; <br>
            echo $add; <br>
        </p>
        <?php
            $b = 5;
            $c = 10;

            $add = $a + $b;
            echo $add;

            echo "<br>";
        ?>

        <p> $d = 10; <br>
            $e = 3; <br>

            $sub = $d - $e; <br>
            echo $sub; <br>
            </p>

            <?php
                $d = 10; 
                $e = 3; 
            
                $sub = $d - $e;
                echo $sub;

            ?>
        </div>

        <div class="box">
            <h2>date type</h2>
                    
            <p>$cars = array("TOYOTA","BMW","Volvo",1,10.4);</p>
                <?php
                    $cars = array("TOYOTA","BMW","Volvo",1,10.4);
                    echo"<br>";
                    var_dump($cars);
                ?>
        </div>

        <div class="box">
            <h2>if</h2>

            <p>
            $x = 10;
            $y = 20;

            if($x > 0) {　<br>
                echo "This number is positive.";
            }
            </p>

            <?php
            
            $x = 10;
            $y = 20;

            if($x > 0) {
                echo "This number is positive.";
                echo "<br>";
            }
            ?>
        </div>

        <div class="box">
            <h2>if-else</h2>

            <p>$x = 5; <br>
                if ($x > 10) { <br>
                    echo "Have a good day!"; <br>
                } else { <br>
                    echo "Have a good night!"; <br>
                } </p>

            <?php
                $x = 5;
                if ($x > 10) {
                    echo "Have a good day!";
                } else {
                    echo "Have a good night!";
                }    
                
            ?>
        </div>

        <div class="box">
            <h2>if-elseif-else</h2>
                <p>
                $x =10; <br>
                        
                        if ($x > 20) { <br>
                            echo "Have a good morning!"; <br>
                        } elseif ($x == 15) { <br>
                            echo "Have a good afternoon!"; <br>
                        } else { <br>
                            echo "Have a good evening!"; <br>
                        }
                </p>
                <?php
                    $x =10;
                        
                    if ($x > 20) {
                        echo "Have a good morning!";
                    } elseif ($x == 15) {
                        echo "Have a good afternoon!";
                    } else {
                        echo "Have a good evening!";
                    }
                    ?>
        </div>

        <div class="box">
            <h2>switch</h2>

                <p>witch ($month) { <br>
                    case "January":<br>
                        echo "I like January";<br>
                    break;<br>

                    case "Febru":<br>
                        echo "I";<br>
                    break;
                    <br>
                    case "March":<br>
                        echo "I like March";<br>
                    break;
                    <br>
                    case "April":<br>
                        echo "I like April";<br>
                    break;
                    <br>
                    case "May":<br>
                        echo "I like May";<br>
                    break;<br>

                    case "Jun":<br>
                        echo "I like Jun";<br>
                    break;<br>

                    case "July":<br>
                        echo "I like July";<br>
                    break;<br>

                    case "August":<br>
                        echo "I like August";<br>
                    break;<br>

                    case "September":<br>
                        echo "I like September";<br>
                    break;<br>

                    case "October":<br>
                        echo "I like October";<br>
                    break;<br>
                    
                    case "November":<br>
                        echo "I like November";<br>
                    break;<br>

                    default:<br>
                        echo "December";
                }</p>

            <?php
            
                switch ($month) 
                {
                    case "January":
                        echo "I like January";
                    break;

                    case "Febru":
                        echo "I";
                    break;

                    case "March":
                        echo "I like March";
                    break;

                    case "April":
                        echo "I like April";
                    break;
                    case "May":
                        echo "I like May";
                    break;
                    case "Jun":
                        echo "I like Jun";
                    break;
                    case "July":
                        echo "I like July";
                    break;
                    case "August":
                        echo "I like August";
                    break;
                    case "September":
                        echo "I like September";
                    break;
                    case "October":
                        echo "I like October";
                    break;
                    case "November":
                        echo "I like November";
                    break;

                    default:
                        echo "December";
                }
                ?>
        </div>

        <div class="box">
            <h2>while</h2>
            <p>$x = 5;
                <br>
                while($x <= 20) { <br>
                    echo $x; <br>
                    $x++;<br>
                }</p>
            <?php
            $x = 5;

            while($x <= 20) {
                echo $x."<br>";
                $x++;
            }
            ?>
        </div>

        <div class="box">
            <h2>do while</h2>
            <p>$x = 1; <br>

                do { <br>
                echo "The number is : $x"; <br> 
                $x +=2; <br> 
                }<br> 
                while ($x <= 10);</p>
            <?php
                $x = 1;

                do {
                echo "The number is : $x <br>"; 
                $x +=2; 
                }
                while ($x <= 10);
            ?>
        </div>

        <div class="box">
            <h2>for</h2>
            <p>   
                for($x=0; $x<=20; $x++) { <br>
                echo $x;<br>
                }   
            </p>   
            <?php
                for($x=0; $x<=20; $x++) {
                    echo $x."<br>";
                }
            
            ?>
        </div>

        <div class="box">
            <h2>function</h2>

            <p>function text() {
                    echo "Hello world";
                }
                text ();
                </p>

            <?php
                function write() {
                echo "Hello world";
                }
                write();
            ?>
        </div>

        <div class="box">
            <h2>string</h2>
            <p>
                echo strlen("Hello　wordl"); <br>
            
                echo str_word_count("Hello s world kanako"); <br>
                
                echo strrev("Hello world!"); <br>
                
                echo strpos("Hello world kanako","kanako"); <br>
                
                echo str_replace("world","Dolly","Hello world"); <br>
               
            </p>
            <?php
                echo"<br>";
            
                echo strlen("Hello　wordl");// 空欄も数える
                echo"<br>";
            
                echo str_word_count("Hello s world kanako");
                echo"<br>";
            
                echo strrev("Hello world!");
                echo"<br>";
            
                echo strpos("Hello world kanako","kanako");
                echo"<br>";
            
                echo str_replace("world","Dolly","Hello world");
                echo"<br>";  
            
            ?>
        </div>

        <div class="box">
            <h2>indexed array</h2>
                $cars = array("VOLVO","BMW","TOYOTA");
                echo "I like".$cars[0],$cars[1].$cars[2];

            <?php
            
                $cars = array("VOLVO","BMW","TOYOTA");
                echo "I like".$cars[0]." , ".$cars[1]." , ".$cars[2];
            ?>
        </div>

        <div class="box">
            <h2>associated array</h2>
                $age = array("Kanako"=>20,"Rekha"=>21,"Sho"=>22); <br>
                foreach ($age as $x => $xvalue) { <br>
                echo "Key is".$x.", value is".$xvalue."<br>";
                }  
                <br>

                <?php

                    $age = array("Kanako"=>20,"Rekha"=>21,"Sho"=>22);
                    foreach ($age as $x => $xvalue) {
                    echo "Key is".$x.", value is".$xvalue."<br>";
                    }  

                ?>
        </div>

        <div class="box">
            <h2>mutidimentional array</h2>
                $arr = array(  <br>
                    array("kanako","japan",20), <br>
                    array("rekha","india",21), <br>
                    array("sho","korea",22) <br>
                ); <br>
                echo $arr[0][0]." is living in".$arr[0][1]."age is ".$arr[0][2];<br>
                echo $arr[1][0]." is living in".$arr[1][1]."age is ".$arr[1][2];<br>
                echo $arr[2][0]." is living in".$arr[2][1]."age is ".$arr[2][2];<br>
                <br>
                <?php
                    $arr = array(
                        array("kanako","japan",20),
                        array("rekha","india",21),
                        array("sho","korea",22)
                    );
                
                    echo $arr[0][0]." is living in".$arr[0][1]."age is ".$arr[0][2]."<br>";
                    echo $arr[1][0]." is living in".$arr[1][1]."age is ".$arr[1][2]."<br>";
                    echo $arr[2][0]." is living in".$arr[2][1]."age is ".$arr[2][2]."<br>";
            
            
                
                ?>
        </div>


    </body>
</html>