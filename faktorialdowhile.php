<!DOCTYPE html>  
<html>  
<head>  
<title>Faktorial Dengan Menggunakan Do while</title>  
</head>  
<td>Faktorial Dengan Menggunakan Do While</td>  
<body>  
<form name="frm01" method="post">  
<table>  
<tbody><tr>  
<td>Masukkan Angka</td>  
<td><input name="txtAngka" size="5" type="text"></td>  
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
                        $i=1;  
                        do  
                        {  
                             $hasil=$angka * faktorial($angka-1);  
                             $i=$i+1;  
                        }while($i<=5);  
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