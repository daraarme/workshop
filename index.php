<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website Workshop AS</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/tooplate-style.css" rel="stylesheet">

    <style>
        #haha {
            border: 1px solid black;
            padding: 20px;
            margin-top: 20px;
        }

        #haha a {
            margin-right: 20px;
        }

        .mt-20 {
            margin-top: 20px;
        }
    </style>


</head>
<body>
	<div class="tm-container-fluid">
        <!-- code here -->
        <section class="menu" id="haha" style=">
            <a href="#">Home</a>
            <a href="#">About</a>
        </section>

        <section class="tm-bgcolor-2 tm-p-50 mt-20" style="border-radius: 15px; margin-bottom: 20px;">
            <h1>
                <?php
                    $pageTitle = 'Adi Sanggoro ';
                    echo $pageTitle.' - Quality School A Place To Be';
                ?>
            </h1>
            <?php
                $x = 1;
                while($x <=1) {
            ?>
				<h3>Jurusan Smk Adi Sanggoro</h3>
				<ol>
					<li>Geomatika</li>
					<li>Rekayasa Perangkat Lunak</li>
					<li>Teknik Komputer & Jaringan</li>
					<li>Geologi Pertambangan</li>
					<li>Teknik Mekatron</li>
					<li>Tata Busana</li>
				</ol>
				<h3>Ekstrakulikuler</h3>
				<ol>
					<li>Reisas(Rohis)</li>
					<li>Pramuka</li>
					<li>Futsal</li>
					<li>Karate</li>
					<li>Pencak Silat</li>
					<li>Bandung Karate Club</li>
				</ol>
				<h3>Fasilitas</h3>
				<ol>
					<li>Laboratorium Komputer</li>
					<li>Garment</li>
					<li>HotSpot Area</li>
				</ol>
				
                
            <?php
                    $x++;
                }
            ?>
        </section>

		<section class="tm-site-header tm-flex-center tm-mb-50 tm-bgcolor-1 tm-border-rounded">
			<i class="fas fa-heart fa-3x"></i>
			<h1>Adi Sanggoro</h1>
		</section>

		<section class="tm-about tm-mb-80 tm-p-50 tm-bgcolor-2 tm-border-rounded">
			<div class="tm-about-header tm-flex-center">
				<i class="fas fa-users fa-2x"></i>
				<h2>About Us</h2>
			</div>
			<div class="tm-about-text">
				<p class="tm-mb-40">Visi : Pendidikan yang membentuk insan, mandiri, cerdas, terampil, professional, beriman dan bertaqwa.</p>
				<p class="tm-mb-0">Misi : Mencetak tenaga tingkat menengah yang mampu bekerja mandiri, memiliki pengetahuan, keterampilan dan professional sesuai dengan bidang study yang ditempuh.</p>
			</div>
		</section>

		<section class="tm-contact tm-mb-50 tm-bgcolor-3 tm-border-rounded">
			<div class="tm-contact-header tm-flex-center">
				<i class="fas fa-map-pin fa-3x"></i>
				<h2>Contact</h2>
			</div>
			<div class="tm-contact-info">
				<address class="tm-mb-30">
					Jl. Sengked No. 1 kampus IPB Dramaga 
					Bogor 16680
					Email. info_smk@adisanggoro.sch.id
				</address>
				<div class="tm-text-white tm-mb-40">Tel: <a href="tel:0100200340" class="tm-link-white">0251 8620219</a></div>
				<div class="tm-flex">
					<a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a>
					<a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a>
					<a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="tm-contact-form-container">
				<form id="contact-form" action="" method="POST" class="tm-contact-form">
		          	<input type="text" name="name" placeholder="name" required="" />
		          	<input type="email" name="email" placeholder="email" required="" />
		          	<textarea rows="5" name="message" class="tm-mb-30" placeholder="message" required=""></textarea>		          	
		          	<button type="submit" class="tm-right tm-btn-submit">send</button>          	
		        </form>    
			</div>
		</section>

		<footer class="tm-footer">
			Copyright 2020 Nano Folio - Design: <a rel="sponsored" href="https://www.tooplate.com" class="tm-link-gray">Tooplate</a>
		</footer>
	</div>

</body>
</html>