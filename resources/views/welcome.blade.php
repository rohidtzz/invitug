<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Undangan Ulang Tahun Ultras Garuda</title>
  <meta content="Invitaion Ultras GAruda" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon"> --}}
  <link rel="icon" type="image/png" href="{{ asset('ico/tgr.ico') }}"/>
  <link rel="stylesheet" href="{{ asset('landing/assets/img/apple-touch-icon.png" rel="apple-touch-icon') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- Google Fonts -->
  <link href="landing/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css') }}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('formss/css/style.css') }}">
</head>

<body>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Undangan Anniversary 4th Ultras Garuda Sezione Tangerang</h1>
          <h2></h2>
        </div>
      </div>
      <div class="text-center">
        <a href="{{ url('/login') }}" class="btn-get-started scrollto">konfirmasi kehadiran</a>
      </div>

      <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Tempat dan waktu acara</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Lokasi</h3>
									<div id="form-message-warning" class="mb-4"></div>
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>


                              <div id="map-container-google-1" class="z-depth-1-half map-container" >
                                <iframe height="500px" width="100%" src="https://maps.google.com/maps?q=tritonfood%20corner&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                              </div>

								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Tempat dan Waktu Acara</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<i class="fa fa-map-marker"></i>
				        		</div>
				        		<div class="text pl-3">
					            <p>TritonFoodCorner</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<i class="fa fa-calendar"></i>
				        		</div>
				        		<div class="text pl-3">
					            <p>05-11-2022 </p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<i class="fa fa-clock"></i>
				        		</div>
				        		<div class="text pl-3">
					            <p> 15.00 - selesai</p>
					          </div>
				          </div>

			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <h2 class="text-center">Kita Kuat JIka Kita Bersama</h2>




      <div class="row icon-boxes">

        @foreach ($data as $datas)

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
                <div class="icon"><img src="{{ asset('landing/img/logo/'.$datas->logo) }}" width="100%" alt=""></div>
                <h4 class="title text-center"><a aria-disabled="true">{{ $datas->name }}</a></h4>
                <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
            </div>
        @endforeach
        {{-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/tgr.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Tangerang</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Babel.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Bangka Belitung</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Bali.jpg') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Bali</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Balikpapan.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Balikpapan</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Banten.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Banten</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Banyumas.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Banyumas</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Banyuwangi.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Banyuwangi</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Batam.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Batam</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Batang.jpg') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Batang</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Bekasi.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Bekasi</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Blitar.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Blitar</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Blora.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Blora</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Bogor.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Bogor</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Bojonegoro.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Bojonegoro</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Boyolali.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Boyolali</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Brebes.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Brebes</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Cianjur.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Cianjur</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Cilegon.PNG') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Cilegon</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Cirebon.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Cirebon</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Gresik.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Gresik</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Jakarta.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Jakarta</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Jogja.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Jogja</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Kotawaringin_Barat.jpg') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Kotawaringin Barat</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Lamongan.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Lamongan</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Lampung.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Lampung</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Madura.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Madura</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Makassar.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Makassar</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Malang.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Malang</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Mojokerto.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Mojokerto</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Muriaraya.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Muriaraya</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Palembang.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Palembang</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Ponorogo.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Ponorogo</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Pontianak.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Pontianak</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Ranah_Minang.jpg') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Minang</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Riau.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Riau</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Samarinda.jpg') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Samarinda</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Semarang.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Semarang</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Sidoarjo.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Sidoarjo</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Squadra.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Squadra</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UG_Surabaya.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Surabaya</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UGI_Depok.jpg') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Depok</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('landing/img/logo/UGI_Medan.png') }}" width="100%" alt=""></div>
              <h4 class="title text-center"><a>Ultras Garuda Indonesia Sezione Medan</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
        </div> --}}





      </div>
    </div>
  </section><!-- End About Section -->

  {{-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

  <!-- Vendor JS Files -->
  <script src="{{ asset('landing/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('landing/assets/js/main.js') }}"></script>

</body>

</html>
