<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <section class="what-we-do-gambar">
    <h1 class="titles">{{ $title }}</h1>
    <p class="text-center about-title container">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis beatae qui hic veritatis debitis!</p>
  </section>

<section class="mb-5 isi flex flex-collumn">
  <div class="what-we-text d-flex flex-row-reverse container mt-5 div">
      <div class="informasi container align-items-center" style="align-content: center">
        <h1 class="ps-4">Keliki <br> Smart Education</h1>
        <p class="ps-4">
          Kami memberikan pembelajaran formal seperti matematika dan bahasa inggris kepada lebih dari 20 anak setiap minggunya. selama kegiatan ini berjalan sudah ada lebih dari 30 anak yang berani berkomunikasi dalam bahasa inggris serta memiliki kemampuan yang baik dalam menghitung 
        </p>
        {{-- <p>hello</p> --}}
        <div class="list-faq-tabs">
          <input type="radio" name="acc" id="faq-1" checked/>
          <label for="faq-1">
            <h2>Pembelajaran dengan game</h2>
          </label>
          <div class="content">
            <p>Tambahan pembelajaran dengan game sehinga dapat menjadi menyenangkan</p>
          </div>
        </div>
        <div class="list-faq-tabs">
          <input type="radio" name="acc" id="faq-2" />
          <label for="faq-2">
            <h2>Belajar public speaking dan pramuka</h2>
          </label>
          <div class="content">
            <p>pembangunan karakter dimana kami mengajarkan public speaking dan pramuka</p>
          </div>
        </div>
        <div class="list-faq-tabs">
          <input type="radio" name="acc" id="faq-3" />
          <label for="faq-3">
            <h2>minat dan bakat serta soft skill</h2>
          </label>
          <div class="content">
            <p>menumbuhkan minat dan bakat serta soft skill, seperti seni tari dan melukis, serta dalam bidang olahraga futsal dan badminton</p>
          </div>
        </div>
      </div>
      <div class="gambar">
        <img class="image-about" src="gambar/gambar-2.jpg" alt="gambar utama" style="width: 450px" />
      </div>
    </div>
  <div class="what-we-text d-flex container mt-5 div">
      <div class="informasi container align-items-center" style="align-content: center">
        <h1 class="ps-4">Desa Berdikari</h1>
        <p class="ps-4">
          Kami tidak hanya mengasah kreativitas mereka tetapi juga memperkenalkan mereka pada kekayaan budaya lokal. Aktivitas ini membantu mereka memahami dan mengapresiasi warisan budaya. Selain itu, mereka juga mengembangkan kemampuan artistik dan ekspresif, yang sangat penting untuk pertumbuhan pribadi dan keterlibatan mereka dalam masyarakat yang lebih luas.
        </p>
      </div>
      <div class="gambar">
        <img class="image-about" src="gambar/gambar-2.jpg" alt="gambar utama" style="width: 450px" />
      </div>
    </div>
  <div class="what-we-text d-flex flex-row-reverse container mt-5 div">
      <div class="informasi container align-items-center" style="align-content: center">
        <h1 class="ps-4">Ecolution</h1>
        <p class="ps-4">
          Keliki Ecolution adalah gerakan evolusi ramah lingkungan yang dijalankan dengan pendidikan peduli lingkungan sejak dini. Gerakan ini juga melibatkan aksi dan kolaborasi nyata terhadap lingkungan sekitar desa Keliki, bertujuan untuk menciptakan perubahan positif yang berkelanjutan dalam pelestarian alam.
        </p>
      </div>
      <div class="gambar">
        <img class="image-about" src="gambar/gambar-2.jpg" alt="gambar utama" style="width: 450px" />
      </div>
    </div>
  </section>
</x-layout>