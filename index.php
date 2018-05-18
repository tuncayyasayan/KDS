<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>IK Destek Sistemi</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<br>
<form class="form-singing" action="analiz.php" method="POST">
	<div class="container" >
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"><strong>Iletisim </strong> Bilgileri <span></span></h4>
                <div class="form">
				
                    <input   placeholder="Adiniz ve soyadiniz"  name="ad_soyad">
					<br>
                    <input   placeholder="E-posta adresiniz" name="e_mail">
					<br>
                    <input   placeholder="Dogum yeriniz" name="dogum">
					<br>
                    <input   placeholder="Mesleginiz" name="meslek">
                
            </div>
            </div>
            </div
	</div>
</div>
<br>
<br>
<div class="container" style="width:3800px">
<div class="col-md-4">

				<h2>1.Aşağıdaki beyitlerden hangisi sizi daha iyi anlatır?</h2>
				<div class="form-check">
				
					<label class="toggle">
						<input type="radio" name="soru1" value="a"> <span class="label-text">Güçlü, kararlı, girişken ve doğuştan liderim Düşer kalkar, yoluma devam ederim</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru1" value="b"> <span class="label-text">Hayata anlamlı renkler katar eğlenceyi severim Ömür boyu herkesin mutlu ve neşeli olmasını dilerim.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru1" value="c"> <span class="label-text">Her anımı huzurlu ve sakin geçirmek isterim. Kavga gürültüyü sevmem, işlerimde en kolay yolu seçerim.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru1" value="d"> <span class="label-text">Her şeyin mükemmel, düzgün, kusursuz olmasını isterim İlişkilerimde saygılı ve mesafeli olmayı severim.</span>
					</label>
				</div>
				
			<br>
			
				<h2>2.Genellikle hangi tempoda ve nasıl konuşursunuz?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru2" value="a"> <span class="label-text">Hızlı ve sonuca yönelik</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru2" value="b"> <span class="label-text">Çok hızlı, heyecanlı ve eğlenceli</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru2" value="c"> <span class="label-text">Daha yavaş ve sakin</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru2" value="d"> <span class="label-text">Normal ve söyleyeceklerimi aklımda tartarak</span>
					</label>
				</div>
			
			<br>
				<h2>3.Bir işe motive olmanızı sağlayan en önemli unsur hangisidir?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru3" value="a"> <span class="label-text">Sonuçları düşünmek</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru3" value="b"> <span class="label-text">Onaylanmak, takdir edilmek</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru3" value="c"> <span class="label-text">Guruptaki arkadaşlarımın desteği</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru3" value="d"> <span class="label-text">Etkinlik, düzen ve disiplin</span>
					</label>
				</div>
			
			<br>
			
				<h2>4.Çalışma tarzınız hangisine uygundur?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru4" value="a"> <span class="label-text">Yoğun ve hızlıyımdır. Aynı anda birkaç iş bir arada yapabilirim.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru4" value="b"> <span class="label-text">Özgür bir ortamda çalışırım. İnsan ilişkileri odaklıyımdır.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru4" value="c"> <span class="label-text">Ön planda olmayan; ama gruba her türlü desteği veren bir yapım vardır.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru4" value="d"> <span class="label-text">Ayrıntıları önemserim ve tek bir konuya odaklanarak çalışırım.</span>
					</label>
				</div>
			
			<br>
			
				<h2>5.Çalışma temponuzu nasıl değerlendiriyorsunuz?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru5" value="a"> <span class="label-text">Hızlı bir tempoda çalışır, çabuk karar almayı severim.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru5" value="b"> <span class="label-text">İşlerin, rutin ve sıkıcı olmadığı ortamlarda yüksek motivasyonla çalışırım.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru5" value="c"> <span class="label-text">Nadiren aceleciyimdir. Geçde olsa üstlendiğim işi bitiririm.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru5" value="d"> <span class="label-text">Ayrıntılı düşünerek karar veririm. İş bitirici bir tempoyla çalışırım.</span>
					</label>
				</div>
			
			<br>
			
				<h2>6.Hangisi sizi daha çok rahatsız eder?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru6" value="a"> <span class="label-text">Zaman israfı ve işlerin gecikmesi</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru6" value="b"> <span class="label-text">Tekrar gerektiren işler ve monotonluk</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru6" value="c"> <span class="label-text">Çatışma ortamı ve anlaşmazlıklar</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru6" value="d"> <span class="label-text">Yanılmak ve yapılan hatanın tekrarlanması</span>
					</label>
				</div>
			
			<br>
			
				<h2>7.Bulunduğunuz gruplarda hangi konumda daha başarılı olursunuz?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru7" value="a"> <span class="label-text">Olaylara yön veren ve otoriteyi kullanan</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru7" value="b"> <span class="label-text">İnsanları motive eden ve neşelendiren</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru7" value="c"> <span class="label-text">Uzlaştırıcı ve grup içindeki uyumu sağlayan</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru7" value="d"> <span class="label-text">Bilgi sağlayıcı, araştırıcı ve olayları takip eden</span>
					</label>
				</div>
			
			<br>
			
				<h2>8.Hangisi sizi daha çok strese sokar?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru8" value="a"> <span class="label-text">Olaylar üzerindeki güç ve kontrolümün azaldığını hissetmek</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru8" value="b"> <span class="label-text">Sıkıcı, rutin işler yapılan bir ortamda bulunmak</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru8" value="c"> <span class="label-text">Beni aşacağını düşündüğüm sorumluluklar üstlenmek</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru8" value="d"> <span class="label-text">Düzensiz ortamlar ve eksik yapılan işler</span>
					</label>
				</div>
			
			<br>
			
				<h2>9.Bir öğrenci olsanız ve öğretmeniniz sınav kağıdınızı ikinci defa incelediğinde puanınızı artırdığını söylese, nasıl bir tepki verirsiniz?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru9" value="a"> <span class="label-text">Bunu zaten hak ettiğimi düşünürüm.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru9" value="b"> <span class="label-text">Çok sevinirim ve sevincimi belli ederim.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru9" value="c"> <span class="label-text">Hocama teşekkür eder ve saygı duyarım.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru9" value="d"> <span class="label-text">Hocamın nerede hata yaptığını merak eder, kağıdımı görmek isterim.</span>
					</label>
				</div>
			
			<br>
			
				<h2>10.Saatler sürecek bir iş toplantısına katılmanız gerektiğinde aşağıdakilerden hangisini benimsersiniz?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru10" value="a"> <span class="label-text">Konunun ana hatlarının konuşulması için, sonucun belli olmasından hemen sonra çıkmayı tercih ederim.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru10" value="b"> <span class="label-text">Toplantı eğlenceli bir şekilde devam ettiğinde sonuna kadar kalmayı, sıkıcı olmaya başladığında erken çıkmayı tercih ederim.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru10" value="c"> <span class="label-text">Toplantının huzur içinde geçmesi ve güzel kararlar çıkması için üstüme düşeni yaparım.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru10" value="d"> <span class="label-text">Toplantıya vaktinden önce gelir, tüm detayları not eder ve bir değerlendirme yapmak için geç çıkarım.</span>
					</label>
				</div>
			
			<br>
			
				<h2>11.Kendinizde gördüğünüz en zayıf yönünüz hangisidir?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru11" value="a"> <span class="label-text">İnsanlar işleri istediğim gibi yapmadığında ve seri olmadıklarında sinirlenmek</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru11" value="b"> <span class="label-text">Düzensiz, dağınık ve programsız olmak</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru11" value="c"> <span class="label-text">Kimseye hayır diyememek ve başkalarının işine koşarken kendi işimi aksatmak</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru11" value="d"> <span class="label-text">Her şeyin kusursuz ve mükemmel olmasını istemek. İnsanlar buna uymadığında sinirlenmek</span>
					</label>
				</div>
			
			<br>
			
				<h2>12.Kendinizde gördüğünüz en güçlü yönünüz hangisidir?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru12" value="a"> <span class="label-text">Kısa sürede karar alan ve harekete geçen yapım</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru12" value="b"> <span class="label-text">Girdiğim ortamlara neşe ve heyecan katan tarafım</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru12" value="c"> <span class="label-text">Her türlü ortama uyum sağlama ve çatışmaları önleme gayretim</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru12" value="d"> <span class="label-text">Her şeyi planlı, programlı ve düzenli yapma huyum</span>
					</label>
				</div>
			
			<br>
			
				<h2>13.Aşağıdaki ifadelerden hangisi sizi daha iyi tanımlar?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru13" value="a"> <span class="label-text">Güçlü, kararlı, otoriter ve yönlendirici</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru13" value="b"> <span class="label-text">Popüler, neşeli, sevimli ve muzip</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru13" value="c"> <span class="label-text">Barışçıl, sevecen, uyumlu ve sakin</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru13" value="d"> <span class="label-text">Tertipli, düzenli, disiplinli ve planlı</span>
					</label>
				</div>
			
			<br>
			
				<h2>14.Çalışma masanızda nelere dikkat edersiniz?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru14" value="a"> <span class="label-text">Öncelik verdiğim şeyleri yapacak şekilde düzenlenmiş sade bir masayı tercih ederim.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru14" value="b"> <span class="label-text">İnsanlara karma karışık gelen; ama benim aradığım her şeyi bulduğum bir masada çalışırım.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru14" value="c"> <span class="label-text">Önce masamın üzerine gerekli olan her türlü araç gereci koyarım. Sık sık kalkarak enerjimi harcamak istemem.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru14" value="d"> <span class="label-text">İyi bir iş çıkarmam için masam son derece derli-toplu ve düzenli olmalıdır.</span>
					</label>
				</div>
			
			<br>
			
				<h2>15.Ertesi gün çözülmesi gereken bir problem varsa o akşamki ruh haliniz nasıl olur?</h2>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru15" value="a"> <span class="label-text">Çok büyük tedirginlik duymam; çünkü ertesi gün o işi  olması gerektiği gibi yapacağımdan eminimdir.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru15" value="b"> <span class="label-text">Çok tedirginlik duymam; çünkü nasıl olsa işler bir  şekilde hallolacaktır.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru15" value="c"> <span class="label-text">Sorumluluğun üstümde olmasından dolayı tedirginlik  duyarım.</span>
					</label>
				</div>
				<div class="form-check">
					<label class="toggle">
						<input type="radio" name="soru15" value="d"> <span class="label-text">Tedirginlik duyarım ve gecenin büyük bir bölümünde  problemin nasıl çözüleceğiyle ilgili planlar yaparım.</span>
					</label>
				</div>
			
			<br>
				

			<input type="submit" value="GONDER" name="submit" class="txt2" action="analiz.php"></input>
			</form>
			<br>
			<br>
			<br>
		</div>
</div>
</div>
</body>
</html>
