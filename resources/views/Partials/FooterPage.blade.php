
<footer class="bg-black border-top border-dark">
    <div class="container py-vh-4 text-secondary fw-lighter">
      <div class="row">
        <div class="col-12 col-lg-5 py-4 text-center text-lg-start">
          <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stack"
              viewBox="0 0 16 16">
              <path
                d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z" />
              <path
                d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z" />
            </svg>
            <span class="ms-md-1 mt-1 fw-bolder me-md-5">PT Saamparan Digital Group</span>
          </a>

        </div>
        <div class="col border-end border-dark">
          <span class="h6">Perusahaan</span>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="#" class="link-fancy link-fancy-light">Tentang</a>
            </li>
            <li class="nav-item">
              <a href="#" class="link-fancy link-fancy-light">Legalitas</a>
            </li>

            <li class="nav-item">
              <a href="#" class="link-fancy link-fancy-light">Karir</a>
            </li>
            <li class="nav-item">
              <a href="#" class="link-fancy link-fancy-light"></a>
            </li>
          </ul>
        </div>
        <div class="col border-end border-dark">
          <span class="h6">Layanan</span>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="#" class="link-fancy link-fancy-light">Transaksi Sosmed</a>
            </li>
            <li class="nav-item">
              <a href="#" class="link-fancy link-fancy-light">Rekening Bersama</a>
            </li>

            <li class="nav-item">
              <a href="www.sdgmusik.com" class="link-fancy link-fancy-light" target="blank">Agregator Musik</a>
            </li>
            <li class="nav-item">
              <a href="#" class="link-fancy link-fancy-light">Web Developer</a>
            </li>
            <li class="nav-item">
              <a href="#" class="link-fancy link-fancy-light">Desain marketing</a>
            </li>
            <li class="nav-item">
              <a href="#" class="link-fancy link-fancy-light">Digital Learning</a>
            </li>
          </ul>
        </div>
        <div class="col">
          <span class="h6">Support</span>
          <ul class="nav flex-column">

            <li class="nav-item">

              <a href="https://api.whatsapp.com/send?phone=6281214209177" target="blank" class="link-fancy link-fancy-light">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container text-center small py-vh-2 border-top border-dark">
      <a href="#" class="link-fancy link-fancy-light" target="_blank">Saamparan Digital Group</a>
     <a href="#" class="link-fancy link-fancy-light" target="_blank"></a>
    </div>
  </footer>

  <script src="../../assets/halaman_sdg/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/halaman_sdg/js/aos.js"></script>
  <script>
    AOS.init({
      duration: 800, // values from 0 to 3000, with step 50ms
    });
  </script>
  <script>
    let scrollpos = window.scrollY;
    const header = document.querySelector(".navbar");
    const header_height = header.offsetHeight;

    const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
    const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");

    window.addEventListener('scroll', function () {
      scrollpos = window.scrollY;

      if (scrollpos >= header_height) { add_class_on_scroll(); }
      else { remove_class_on_scroll(); }

      console.log(scrollpos);
    })
  </script>
