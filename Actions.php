<?php
        require_once 'MySQL/baglan.php';
?>


<?php
/****************************************MYSQL TABLO BİRLEŞTİREREK FİLTRELEME YAPMA İŞLEMİM ************************************ */
$bilgicek =$baglanti->prepare("SELECT *  FROM kategoriler INNER JOIN konular ON konular.konu_id = kategoriler.kategori_id WHERE kategori_id=:kategori_id");
$bilgicek->execute(array(
        'kategori_id'=> 1
       
));
$kitapCevap = $bilgicek->fetchAll(PDO::FETCH_ASSOC);

foreach($kitapCevap as $kitapBas){
        echo "<div style='border:1px solid #ddd; width:200px; height:300px; float:left; margin:3px;'>";
        echo $kitapBas["konu_baslik"]."<br>".  $kitapBas["kategori_ad"];
        echo "</div>";
}
        
     
     

?>