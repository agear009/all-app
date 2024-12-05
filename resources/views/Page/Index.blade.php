@extends('Layouts.MainPage')

@section('Container')

    <main>
    <div class="w-100 overflow-hidden position-relative bg-black text-white" data-aos="fade">
      <div class="position-absolute w-100 h-100 bg-black opacity-75 top-0 start-0"></div>
      <div class="container py-vh-4 position-relative mt-5 px-vw-5 text-center">
        <div class="row d-flex align-items-center justify-content-center py-vh-5">
          <div class="col-12 col-xl-10">
            <span class="h5 text-secondary fw-lighter"></span>
            <h1 class="display-huge mt-3 mb-3 lh-1">Selamat datang di PT Saamparan Digital group</h1>
          </div>
          <div class="col-12 col-xl-8">
            <p class="lead text-secondary">Perusahaan terpercaya dalam bisnis Digital,sejak tahun 2023 kami berkomitment untuk menghadirkan solusi inovatif.</p>
          </div>
          <div class="col-12 text-center">



            <a href="https://api.whatsapp.com/send?phone=6281214209177" class="btn btn-xl btn-light" target="blank">Hubungi
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
            </a>
          </div>
        </div>
      </div>

    </div>

    <div class="w-100 position-relative bg-black text-white bg-cover d-flex align-items-center">
      <div class="container-fluid px-vw-5">
        <div class="position-absolute w-100 h-50 bg-dark bottom-0 start-0"></div>
        <div class="row d-flex align-items-center position-relative justify-content-center px-0 g-5">
          <div class="col-12 col-lg-6">
            <img src="{{asset('assets/halaman_sdg/img/webp/rekber.jpeg')}}" width="2280" height="1732" alt="Rekber "
              class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up">
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <img src="../../assets/halaman_sdg/img/webp/agregator.jpeg" width="1116" height="1578" alt="Agregator "
              class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up" data-aos-duration="2000">
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <img src="../../assets/halaman_sdg/img/webp/DigitalLearning.jpeg" width="1116" height="848" alt="learning"
              class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up" data-aos-duration="3000">
          </div>
        </div>
      </div>
    </div>
    <div class="bg-dark">
      <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-7 text-lg-end" data-aos="fade-right">
            <span class="h5 text-secondary fw-lighter">PT Saamparan Digital Group</span>
            <h2 class="display-4">di sahkan pada tanggal 18 Desember 2023 , Bergerak di bidang  Penyedia Jasa Digital Untuk Akselerasi Bisnis, Perorangan, Perusahaan. Profesionalitas menjadi nilai yang selalu menuntun kami untuk dapat memberikan yang terbaik untuk klien.
            </h2>
          </div>
          <div class="col-12 col-lg-5" data-aos="fade-left">
            <h3 class="pt-5">VISI</h3>
            <p class="text-secondary">Perusaahaan Digital yang meraih suskses kelas dunia.<br>

            </p>
            <h3 class="border-top border-secondary pt-5 mt-5">MISI</h3>
            <p class="text-secondary">1.	Selalu mengutamakan dan memberikan kemudahan kepada semua klien yang memakai jasa perusahaan.<br>
            2.	Sebagai Rool Model Perusahan yang bergerak di bidang digital dan menjadi percontohan bagi  Perusahan Perusahan yang mulai merintis di bidang yang sama.<br>
            3.	Perusahan yang mempunyai projeck projeck di bidang digital yang bisa memberikan peluang bisnis untuk masyarakat.<br>
            4.	Perusahan yang terus berkembang dan terupdate dalam bidang media sosial dan digital.<br>
            5.	Perusahaan yang selalu mejungjung tinggi profesionalitas dalam memberikan pelayan kepada klien.<br>
            6.	Selalu Mengutamakan Kesejahteraan Karyawan agar tercipta suasana yang baik sehingga    karyawan bekerja secara profesional.<br>
            7.	Selalu melaksanan Evaluasi sebagai acuan untuk meningkatkan kwalitas perusahaan.<br>
            8.	Bekerja dengan juju dan amanah.<br>
            <a href="#" class="link-fancy link-fancy-light me-2"></a>

            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-black py-vh-3">
      <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow">

        <div class="row gx-5">
          <div class="col-12 col-md-6">
            <div class="card bg-transparent mb-5" data-aos="zoom-in-up">
              <div class="bg-dark shadow rounded-5 p-0">
                <img src="{{asset('assets/halaman_sdg/img/webp/rekber.jpeg')}}" width="582" height="327" alt="rekber"
                  class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                <div class="p-5">
                  <h2 class="fw-lighter">JASA PENGAMANAN TRANSAKSI</h2>
                  <p class="pb-4 text-secondary">JASA PENGAMANAN TRANSAKSI MEDIA SOSIAL BAIK FB,TIKTOK,YOUTOBE,IG DAN LAINYA</p>
                  <a href="#" class="link-fancy link-fancy-light"></a>
                </div>
              </div>
            </div>

            <div class="card bg-transparent" data-aos="zoom-in-up">
              <div class="bg-dark shadow rounded-5 p-0">
                <img src="{{asset('assets/halaman_sdg/img/webp/agregator.jpeg')}}" width="582" height="442" alt="abstract image"
                  class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                <div class="p-5">
                  <h2 class="fw-lighter">Agregator Musik</h2>
                  <p class="pb-4 text-secondary">MEMBANTU MENDISTRIBUSIKAN MUSIK ANDA KE PLATFORM STREMING SEPERTI YOUTOBE,YOUTOBE STUDIO,SPOTIFITY,JOOX DAN STRIMING MUSIK LAINYA</p>
                  <a href="#" class="link-fancy link-fancy-light"></a>
                </div>
              </div>
                </div>


            <div class="card bg-transparent" data-aos="zoom-in-up">
                <div class="bg-dark shadow rounded-5 p-0">
                  <img src="{{asset('assets/halaman_sdg/img/webp/desain.jpeg')}}" width="582" height="442" alt="abstract image"
                    class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                  <div class="p-5">
                    <h2 class="fw-lighter">DESIGN FOR DIGITAL </h2>
                    <p class="pb-4 text-secondary">MEDIA YAITU SEBAGAI JASA PEMBUAT KONTEN DALAM BENTUK GAMBAR ATAU VIDIO UNTUK MARKETING BISNIS</p>
                    <a href="#" class="link-fancy link-fancy-light"></a>
                  </div>
                </div>
                  </div>

            </div>

          <div class="col-12 col-md-6">
            <div class="p-5 pt-0 mt-5" data-aos="fade">
              <span class="h5 text-secondary fw-lighter">LAYANAN PERUSAHAAN SAAMPARAN DIGITAL GROUP</span>
              <h2 class="display-4">PENGELOLAAN MEDIA</h2>
            </div>
            <div class="card bg-transparent mb-5 mt-5" data-aos="zoom-in-up">
              <div class="bg-dark shadow rounded-5 p-0">
                <img src="{{asset('assets/halaman_sdg/img/webp/managemensosialmedia.jpeg')}}" width="582" height="390" alt="abstract image"
                  class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                <div class="p-5">
                  <h2 class="fw-lighter">MANAJEMEN MEDIA</h2>
                  <p class="pb-4 text-secondary">SOSIAL,DIGITAL MARKETING,JASA PEMBAYARAN ONLINE(REKBER).
                  </p>
                  <a href="#" class="link-fancy link-fancy-light"></a>
                </div>
              </div>
            </div>

            <div class="card bg-transparent" data-aos="zoom-in-up">
              <div class="bg-dark shadow rounded-5 p-0">
                <img src="{{asset('assets/halaman_sdg/img/webp/it.jpeg')}}" width="582" height="327" alt="abstract image"
                  class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                <div class="p-5">
                  <h2 class="fw-lighter">IT & SOFTWARE </h2>
                  <p class="pb-4 text-secondary">JASA WEBSITE COMPANY PROFILE HINGGA E-COMMERCE DAN LAYANAN SISTEM UNTUK MENDUKUNG BISNIS </p>
                  <a href="#" class="link-fancy link-fancy-light"></a>
                </div>
              </div>
            </div>

            <div class="card bg-transparent" data-aos="zoom-in-up">
                <div class="bg-dark shadow rounded-5 p-0">
                  <img src="{{asset('assets/halaman_sdg/img/webp/learning.jpeg')}}" width="582" height="327" alt="abstract image"
                    class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                  <div class="p-5">
                    <h2 class="fw-lighter">DIGITAL LEARNING  </h2>
                    <p class="pb-4 text-secondary">TEMPAT BELAJAR DALAM BIDANG DIGITAL DAN MEDIA SOSIAL SEBAGAI KONTEN KREATOR SECARA CEPAT ,TEPAT,DAN AKURAT </p>
                    <a href="#" class="link-fancy link-fancy-light"></a>
                  </div>
                </div>
              </div>

          </div>
        </div>

      </div>

    </div>
    <div class="bg-dark position-relative">
      <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">

          <div class="col-12 col-lg-7">
            <img class="img-fluid rounded-5 mb-n5 shadow" src="{{asset('assets/halaman_sdg/img/webp/jualakun1.jpeg')}}" width="512" height="512"
              alt="a nice person" loading="lazy" data-aos="zoom-in-right">
            <img class="img-fluid rounded-5 ms-5 mb-n5 shadow" src="{{asset('assets/halaman_sdg/img/webp/jualakun2.jpeg')}}" width="512" height="512"
              alt="another nice person" loading="lazy" data-aos="zoom-in-up">
          </div>
          <div class="col-12 col-lg-5 bg-dark rounded-5 py-5" data-aos="fade">
            <span class="h5 text-secondary fw-lighter">Ingin Mengelola Akun YouTube ?</span>
            <h2 class="display-4">Kami menyediakan Akun Youtube yang sudah monetisasi dan telah menhasilkan cuan<br>

                <a href="https://api.whatsapp.com/send?phone=6281214209177" class="btn btn-xl btn-light" target="blank">Hubungi
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                  </a>

            </h2>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-black">
      <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-5 text-center text-lg-end" data-aos="zoom-in-right">
            <span class="h5 text-secondary fw-lighter">Kenapa harus daftar lagu secepatnya?</span>
            <h2 class="display-4">Segara daftarkan musik anda dengan promo harga yang ramah dikantong</h2>
          </div>
          <div class="col-12 col-lg-7 bg-dark rounded-5 py-vh-3 text-center my-5" data-aos="zoom-in-up">
            <h2 class="display-huge mb-5">
              <span class="fs-4 me-2 fw-light">Rp</span><span class="border-bottom border-5">0</span><span
                class="fs-6 fw-light">/ selama waktu promo</span>
            </h2>
            <p class="lead text-secondary">Yu mumpung masih promo daftarin lagu kamu secepatnya promo gak bakalan lama loh, lama atau berakhirnya promo akan di atur oleh perusahaan.</p>
            <a href="#" class="btn btn-xl btn-light">Daftar
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
            </a>
          </div>
        </div>
      </div>

    </div>
    <div class="container-fluid px-vw-5 position-relative" data-aos="fade">
      <div class="position-absolute w-100 h-50 bg-black top-0 start-0"></div>
      <div class="position-relative py-vh-5 bg-cover bg-center rounded-5"
        style="background-image: url({{asset('assets/halaman_sdg/img/webp/rekber.jpeg')}})">
        <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow">
          <div class="row d-flex align-items-center">

            <div class="col-6 d-flex align-items-center bg-dark shadow rounded-5 p-0" data-aos="zoom-in-up">
              <div class="row d-flex justify-content-center">
                <div class="col-12">
                  <img src="{{asset('assets/halaman_sdg/img/webp/jualakun1.jpeg')}}" width="684" height="457" alt="our CEO with some nice numbers"
                    class="img-fluid rounded-5" loading="lazy">
                </div>
                <div class="col-12 col-lg-10 col-xl-8 text-center my-5">
                  <p class="lead border-bottom pb-4 border-secondary">"Kenapa membeli akun YouTube di tempat kami adalah pilihan terbaik? Karena kami menawarkan akun yang aman, terpercaya, dan 100% original, dengan proses yang cepat dan mudah. Kami menjaga kualitas layanan dan memastikan setiap transaksi dilindungi sepenuhnya, memberikan Anda kenyamanan tanpa khawatir. Apakah Anda ingin mengeksplorasi lebih lanjut tentang keamanan dan manfaatnya?."</p>
                  <p class="text-secondary text-center">PT Saamparan Digital Group</p>
                </div>
              </div>
            </div>
            <div class="col-5 offset-1">
              <span class="h5 text-secondary fw-lighter">Pembeli</span>
              <h2 class="display-huge fw-bolder" data-aos="zoom-in-left">+171</h2>
              <p class="h4 fw-lighter text-secondary">
                Sudah banyak yang membeli akun youtube dari perusahaan kami.
              </p>

              <h2 class="display-huge fw-bolder border-top border-secondary pt-5 mt-5" data-aos="zoom-in-left">100%</h2>
              <p class="h4 fw-lighter text-secondary">
                Respon yang kami terima  puas dengan pelayanan kami.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="bg-dark py-vh-5">
      <div class="container px-vw-5">
        <div class="row d-flex gx-5 align-items-center">
          <div class="col-12 col-lg-6">
            <div class="rounded-5 bg-black p-5 shadow" data-aos="zoom-in-right">
              <div class="fs-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


              </div>
              <p class="text-secondary lead">"Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et
                dolore magna aliqua ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
              <div class="d-flex justify-content-start align-items-center border-top border-secondary pt-3">
                <img src="{{asset('assets/halaman_sdg/img/webp/rekber.jpeg')}}" width="96" height="96" class="rounded-circle me-3" alt="a nice person"
                  data-aos="fade" loading="lazy">
                <div>
                  <span class="h6 fw-5">Jane Doemunsky</span><br>
                  <small class="text-secondary">COO, The Boo Corp.</small>
                </div>
              </div>
            </div>
            <div class="rounded-5 bg-black p-5 shadow mt-5" data-aos="zoom-in-right">
              <div class="fs-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-half" viewBox="0 0 16 16">
                  <path
                    d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                </svg>

              </div>
              <p class="text-secondary lead">"Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat."</p>
              <div class="d-flex justify-content-start align-items-center border-top border-secondary pt-3">
                <img src="../../assets/halaman_sdg/img/webp/person13.webp" width="96" height="96" class="rounded-circle me-3" alt="a nice person"
                  data-aos="fade" loading="lazy">
                <div>
                  <span class="h6 fw-5">Jane Doemunsky</span><br>
                  <small class="text-secondary">COO, The Boo Corp.</small>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6">
            <div class="p-5 pt-0" data-aos="fade">
              <span class="h5 text-secondary fw-lighter">What others have to say</span>
              <h2 class="display-4">Invidunt ut labore et dolore magna aliquyam erat.</h2>
            </div>
            <div class="rounded-5 bg-black p-5 shadow mt-5 gradient" data-aos="zoom-in-left">
              <div class="fs-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


              </div>
              <p class="lead">"Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat."</p>
              <div class="d-flex justify-content-start align-items-center border-top pt-3">
                <img src="../../assets/halaman_sdg/img/webp/person16.webp" width="96" height="96" class="rounded-circle me-3" alt="a nice person"
                  data-aos="fade" loading="lazy">
                <div>
                  <span class="h6 fw-5">Jane Doemunsky</span><br>
                  <small>COO, The Boo Corp.</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </main>

@endsection
