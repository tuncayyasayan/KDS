<?php

require("baglan.php");
if(!$baglan){
	die("Baglanti başarisiz<br>".mysqli_connect_error());
}
else
{
	echo"Baglanti başarılı<br>";
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veritabani1";



$adsoyad=$_POST["ad_soyad"];
$email=$_POST["e_mail"];
$dogum=$_POST["dogum"];   
$meslek=$_POST["meslek"];
$soru1=$_POST['soru1'];
$soru2=$_POST['soru2'];
$soru3=$_POST['soru3'];
$soru4=$_POST['soru4'];
$soru5=$_POST['soru5'];
$soru6=$_POST['soru6'];
$soru7=$_POST['soru7'];
$soru8=$_POST['soru8'];
$soru9=$_POST['soru9'];
$soru10=$_POST['soru10'];
$soru11=$_POST['soru11'];
$soru12=$_POST['soru12'];
$soru13=$_POST['soru13'];
$soru14=$_POST['soru14'];
$soru15=$_POST['soru15'];

echo "Adi Soyadi: $adsoyad";
echo "<br>";
echo "E-posta: $email";
echo "<br>";
echo "Dogum Yeri: $dogum";
echo "<br>";
echo "Meslegi: $meslek";
echo "<br>";
echo "<br>";

$cevapa=0;
$cevapb=0;
$cevapc=0;
$cevapd=0;


echo "1.Soru: $soru1";
echo "<br>";
echo "2.Soru: $soru2";
echo "<br>";
echo "3.Soru: $soru3";
echo "<br>";
echo "4.Soru: $soru4";
echo "<br>";
echo "5.Soru: $soru5";
echo "<br>";
echo "6.Soru: $soru6";
echo "<br>";
echo "7.Soru: $soru7";
echo "<br>";
echo "8.Soru: $soru8";
echo "<br>";
echo "9.Soru: $soru9";
echo "<br>";
echo "10.Soru: $soru10";
echo "<br>";
echo "11.Soru: $soru11";
echo "<br>";
echo "12.Soru: $soru12";
echo "<br>";
echo "13.Soru: $soru13";
echo "<br>";
echo "14.Soru: $soru14";
echo "<br>";
echo "15.Soru: $soru15";
echo "<br>";
echo "<br>";
if ($soru1=='a')
{
	mysqli_query($baglan,"INSERT INTO test(cevapa) values (1)");
	$cevapa=$cevapa+1;
} 
else if ($soru1=='b')
{
	mysqli_query($baglan,"INSERT INTO test(cevapb) values (1)");
	$cevapb=$cevapb+1;
} 
else if ($soru1=='c')
{
	mysqli_query($baglan,"INSERT INTO test(cevapc) values (1)");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"INSERT INTO test(cevapd) values (1)");
	$cevapd=$cevapd+1;
}

if ($soru2=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru2=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru2=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru3=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru3=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru3=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru4=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru4=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru4=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru5=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru5=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru5=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru6=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru6=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru6=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru7=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru7=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru7=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru8=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru8=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru8=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru9=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru9=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru9=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}if ($soru10=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru10=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru10=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru11=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru11=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru11=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru12=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru12=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru12=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru13=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru13=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru13=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru14=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru14=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru14=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
if ($soru15=='a')
{
	mysqli_query($baglan,"update test set cevapa = cevapa+1 WHERE email='$email'");
	$cevapa=$cevapa+1;
} 
else if ($soru15=='b')
{
	mysqli_query($baglan,"update test set cevapb = cevapb+1 WHERE email='$email'");
	$cevapb=$cevapb+1;
} 
else if ($soru15=='c')
{
	mysqli_query($baglan,"update test set cevapc = cevapc+1 WHERE email='$email'");
	$cevapc=$cevapc+1;
} 
else  
{
	mysqli_query($baglan,"update test set cevapd = cevapd+1 WHERE email='$email'");
	$cevapd=$cevapd+1;
}
$sayilar=array($cevapa,$cevapb,$cevapc,$cevapd);
$enbuyuk=max($sayilar);

if ($enbuyuk==$cevapa)
{
	$enson="Kirmizi";
	echo "<br>";
	echo "Karakter Renginiz Kirmizi<br>";
	echo "Kırmızı Karakterli Kişilerin Özellikleri<br>
Güçlü, kararlı kişilerdir. Az laf, çok iş derler. Sonuç odaklıdırlar. Herkesin onlar gibi düşünüp<br>
hareket etmesini isterler. Gereksiz konuşmalardan ve işlerden hoşlanmazlar. Hep yapacak işleri ve<br>
alınmış kararları vardır. Onlar için önemli olan işin özünü anlamak ve sonucu elde etmektir. Bu yüzden<br>
kararlarını uygularken gözleri başka bir şey görmez. Yüksek ancak gerçekçi hedefler belirlemekten ve<br>
bunları gerçekleştirmeye çalışmaktan büyük zevk alırlar. Son derece bağımsız insanlardır. Zaman yönetimi<br>
konusunda üstün bir becerileri vardır. Konuşmaları hızlı ve tempoludur. Çalışma ortamları, ne çok dağınık,<br>
ne de çok düzenlidir. Hep dik durmaya çalışırlar, kimseden yardım istemeyi sevmezler. Kendilerini daima<br>
haklı görme eğilimleri vardır. Bu yüzden eleştiriden pek hoşlanmazlar. Kararlı ve iş bitiricidirler. Ani<br>
kararlarıyla insanları şaşırtabilirler. İşlerine aşırı odaklanırlar fakat sonuçlar konusunda yeterli<br>
değerlendirmeyi yapamayabilirler. Lider özelliklidirler. Özgüvenleri yüksektir.<br>
İşletme için cesur kararlar alabilirler. Bu nedenle daha yüksek mertebede yöneticilik <br>
yapabilirler.Departmanda çalışan olarak var olan kırmızı renk karakterli insanlar liderlik <br> 
yapmak isteyerek departmanın huzurunu kaçırabilir, birden fazla ise çatışmalara yol açabilir.<br> ";
}
else if ($enbuyuk==$cevapb)

{
	$enson="Sari";
	echo "<br>";
	echo "Karakter Renginiz Sari<br>";
	echo "Sarı karakterli kişiler<br>
İlgi çekici ve karizmatik bir yapıya sahiptirler. Dışarıdan bakılınca sevimli, kıpır kıpır,<br>
hikayeler anlatıp güldüren ve gülen insanlardır. Birebir ilişkilerde çok aktiftirler. <br>
Yabancılarla kolaylıkla ve özel bir çaba göstermeksizin ilişki kurabilirler. Geniş bir <br>
tanıdık çevreleri vardır. Hayaller kurmaya yatkındırlar. Vizyonları çok geniştir. Bir <br>
organizasyon içerisinde büyük projeler hayal edebilen, çok daha büyük ve parlak bir geleceği<br>
düşünebilen kişilerdir. Ancak bunları hayata geçirme konusunda büyük sıkıntılar yaşayabilirler.<br>
Bu karakter grubunun genel özellikleri arasında girişken olmaları ayrıntılar üzerinde düşünmemeleri,<br>
çalışma alanlarının dağınık olması da sayılabilir. Bu kişiler, onları toparlayacak birine ihtiyaç<br>
duyarlar. Ayrıca eğlenceli ve hareketlidirler, mutluluk ve enerji yayarlar fakat dikkatsizdirler.<br>
Hazır cevap, ikna edici ve meraklı olmaları, sorunlara ilginç çözümler bulmaları da özelliklerindendir.<br>
Sarı karaktere sahip insanlar daha canlı, hareketli ve neşeli insanlar oldukları için her departmanda <br>
bir tane bulunması departmanın moralini yüksek tutmasını sağlayabilir.";
}
else if ($enbuyuk==$cevapc)
{
	$enson="Yesil";
	echo "<br>";
	echo "Karakter Renginiz Yesil<br>";
	echo	"Yeşil Karakterli Kişilerin Temel Özellikleri<br>
Orta yollu bir karaktere sahiplerdir. Dikkat çekici hatalarda bulunmazlar. En belirgin yönleri her yerde<br>
mutlu olabilmeleri ve hallerinden memnuniyet duymalarıdır. Sabırlıdırlar. Ayırt edilmesi en güç olan ve <br>
zor anlaşılan kişilerdir. İçten içe çok inatçıdırlar. Projeleri yarım bırakabilirler. Pek fazla kimseye <br>
hayır diyemezler. Barışçıl ve fedakardırlar. En çok önemsedikleri şey çevreden saygı görmektir. Daha <br>
duygulu ve heyecanlıdırlar. Gruplarla uyumludurlar. Kendilerini ön plana çıkarmaya çalışmazlar. Başka <br>
insanların katkılarındaki değeri görme konusunda oldukça yeteneklidirler. Uyumlu ilişkilere çok değer <br>
verirler. Başka insanların hislerine karşı duyarlıdırlar. Çok hareketli ortamları sevmezler. İnce ve <br>
düşündürücü espri anlayışına sahiptirler. Kendileriyle barışıktırlar. Çok rahattırlar. Çatışmadan çok <br>
çekinirler. Doğal arabulucudurlar. Çok sabırlıdırlar. İçlerinde fırtınalar koparken dışarıdan sakin <br>
görünebilirler. Kimseyi kırmak istemezler.<br>
Yeşil renk karakterine sahip insanlar oldukça sakin ve uyumlu insanlardır. Bu nedenle işletmenin her <br>
departmanında bulunabilirler fakat yöneticilik yapmak için uygun değildirler.<br>";
}
else {
	$enson="Mavi";
	echo "<br>";	
	echo "Karakter Renginiz Mavi<br>";
	echo "Mavi Karakterli Kişilerin Özellikleri<br>
Mükemmeliyetçidirler. Duruşları, kıyafetleri, tavırları, kısacası her şeyleriyle çok düzenlidirler. Tüm <br>
yaptıkları uyum içinde görünür. Kurallara çok bağlıdırlar. Çalışma ortamları tam anlamıyla mükemmel ve <br>
profesyoneldir. Her şeyleri planlı ve programlıdır. Hassas insanlardır. Ayrıntılar konusunda titiz davranırlar. <br>
Çoğu zaman karar vermede büyük sıkıntılar yaşarlar. Genelde yalnızlıktan hoşlanırlar. Konuştuklarında ses <br>
tonları alçaktır. Konuşma hızları düşüktür. Duygularını açıkça ortaya koymazlar, mantık ağırlıklıdırlar. <br>
Bu yüzden heyecanları ve duyguları da ölçülüdür. Bir olumsuzluk esnasında sakin ve akılcı olabilirler. <br>
Kuralcı olduklarından kolay kolay değişmek istemezler. Daima tedbirlidirler. Olayların olumsuz yönlerini <br>
görüp kaygılanırlar. Detaycıdırlar. Meraklı araştırmacı bir kişilikleri vardır. Riskleri önceden görürler. <br>
Ciddi ve ağır başlıdırlar. Standartları yüksektir. Yeteneklidirler.<br>
Oldukça yüksek disipline sahip olan mavi renk karakterli insanlar yöneticilik için harika insanlardır. Eğer ikinci rennkleri kırmızı değil ise harika birer çalışan olabilirler.";
}

mysqli_query($baglan,"insert into test(adsoyad, email, dogum, meslek, sonuc)values($adsoyad,$email,$dogum,$meslek,$enson)");
echo "<br>";	
echo "<br>A Şıkkı: $cevapa <br>B Şıkkı $cevapb <br>C Şıkkı $cevapc <br>D Şıkkı $cevapd";	
?>


  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
		
          ['A Şıkkı', 'Hours per Day'],
		  ['A Şıkkı',     8],

          ['B Şıkkı',     1],
          ['C Şıkkı',      1],
          ['D Şıkkı',  5]
        ]);

        var options = {
          title: 'Agirlikli Karakter Rengi',
          is3D: true,
		  slices: {0: {color: 'red'}, 1:{color: 'yellow'}, 2:{color: 'green'}, 3:{color: 'blue'}}

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>