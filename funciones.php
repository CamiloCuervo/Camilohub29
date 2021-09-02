<h1>RESULTADO</h1>
    <?php 
    include ("metodos.php");
    
    $num=$_POST['num'];

    $nums1=array();
    for ($i=0; $i<$num ; $i++) { 
        $nums1[$i]=rand(0,100);
    }
    for ($i=0; $i <$num ; $i++) { 
        echo $nums1[$i].',';
    }


    num($nums1);
    function num($nums1){
        $mayor=0;
        $menor=0;

        foreach ($nums1 as $key){
            if ($mayor < $key){
                $mayor = $key;
            }
            if ($menor > $key){
                $menor = $key; 
    
            }
        }
    echo "<br>"."el numero mayor es".$mayor."<br>";
    echo "el numero menor es".$menor."<br>";
    }
    ?>
    
    <?php 
    function prom($numeros){
        $sum=0;
        for ($i=0; $i <count($numeros) ; $i++) { 
            $sum+=$numeros[$i];
        }
        return $sum;
    }
    echo "el promedio es ".prom($nums1)/$num;
    ?>