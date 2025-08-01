<!-- Footer Section -->
<footer class="text-white position-relative" style="background-image: url('{{ asset('images/home/about.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0.7); background-blend-mode: overlay;">
  <div class="container py-5">
    <div class="row align-items-start gy-4">

      {{-- Office & Yard Info --}}
      <div class="col-md-6">
        <h5 class="fw-bold mb-3">
          <i class="bi bi-geo-alt-fill text-warning me-2"></i> Office & Yard
        </h5>
        <p class="mb-0"><strong>Head Office:</strong></p>
        <p class="mb-1">South Quarter Building, Tower A, 16th Floor</p>
        <p class="mb-1">Jl. R.A. Kartini Kav. 8, Cilandak Barat, Jakarta Selatan 12430</p>
        <p class="mb-1">Tel: +62‑21‑5703329 • Fax: +62‑21‑5703334</p>
        <p class="mt-3 mb-0"><strong>Yard:</strong></p>
        <p class="mb-1">Desa Margasari, Kec. Pulo Ampel, Serang, Banten 42455</p>
        <p class="mb-1">Tel: +62‑254‑575‑0088 / +62‑254‑575‑0306 • Fax: +62‑254‑575‑0091</p>
      </div>

      {{-- Contact & Social --}}
      <div class="col-md-6 text-center text-md-end">
        <p class="mb-2 fs-6">Questions or visit inquiries?</p>
        <a href="/contact" class="btn btn-warning fw-semibold px-4 py-2 mb-3">Contact Us</a>
        
        <div class="d-flex flex-wrap justify-content-center justify-content-md-end align-items-center gap-3">
          <a href="mailto:business_dev@gunanusa.co.id" class="text-white text-decoration-none small">business_dev@gunanusa.co.id</a>
          <a href="mailto:bidding@gunanusa.co.id" class="text-white text-decoration-none small">bidding@gunanusa.co.id</a>
          <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white fs-5"><i class="bi bi-telephone-fill"></i></a>
        </div>
      </div>

    </div>
  </div>

  <button id="backToTop" class="btn btn-warning rounded-circle shadow position-fixed" 
      style="bottom: 24px; right: 24px; z-index: 999; display: none;">
      <i class="bi bi-arrow-up-short fs-4"></i>
  </button>

  <div class="text-center py-3" style="background-color: #000;">
    © PT Gunanusa Utama Fabricators 2025
  </div>
</footer>

<script>
    const btn = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
    const heroHeight = document.getElementById("hero")?.offsetHeight || 400;

    if (window.scrollY > heroHeight) {
        btn.style.display = "block";
        } else {
        btn.style.display = "none";
    }
    });

    btn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>