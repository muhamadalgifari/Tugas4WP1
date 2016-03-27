    <!DOCTYPE html>  
    <html>  
    <head>  
    <title>Faktorial Dengan Menggunakan For</title>  
    </head> 
    <td>Faktorial Dengan Menggunakan For</td> 
    <body>  
    <form name="frm01" method="post">  
    <table>  
    <tbody><tr>  
    <td>Masukkan Bilangan</td>  
    <td><input name="txtAngka" size="3" type="text"></td>  
    </tr>  
    <tr>  
    <td colspan="2"><input name="hasil" value="Hasil" type="submit"></td>  
    </tr>  
    </tbody></table>  
    <?php  
    error_reporting(0);  
    if($_POST['hasil']!=''){  
                $angka=$_POST['txtAngka'];  
                function faktorial($angka){  
                if($angka<=1){  
                            $hasil=1;  
                            return $hasil;  
                }elseif($angka>1){  
                            for($i=1; $i<=$angka; $i++){  
                                 $hasil=$angka * faktorial($angka-1);  
                            }  
                            return $hasil;  
                }  
    }  
             echo "Angka :".$angka."<br>";  
       echo "Faktorial dari "." ".$angka." "."adalah :"." ".faktorial($angka);  
    }  
    ?>  
    </form>  
    </body>  
    </html>  