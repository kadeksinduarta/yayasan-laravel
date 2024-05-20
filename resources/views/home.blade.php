{{-- {{ dd($title) }} --}}
<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
    <section class="halaman-utama container" id="home">
        <div class="informasi">
          <h1>Yayasan <br>Gumanti Rahayu</h1>
          <p>
            Yayasan kami fokus pada pendidikan formal, pengembangan karakter, soft skill, kreativitas, serta pemahaman budaya dan lingkungan melalui program Keliki Ecolution untuk menciptakan individu yang berdaya saing dan bertanggung jawab.
          </p>
          <a href="#about-us" class="button mt-4">Explore</a>
        </div>
        <div class="gambar">
          <img src="gambar/gambar.jpg" alt="gambar utama" />
          <img src="gambar/gambar-2.jpg" alt="gambar utama" class="gambar-2" style="display: none"/>
        </div>
      </section>
      <!-- akhir sectin home -->
      <!--  -->
      <!-- section about -->
      <section class="about py-5" id="about-us">
        <h1 class="text-center" style=" margin-bottom: 50px;">About Us</h1>
        <div class="about-informasi d-flex container align-items-center">
          <div class="informasi">
            <p class="p">
              Yayasan ini dibentuk karena kami menyadari pentingnya pendidikan formal maupun informal serta pembentukan karakter anak pada usia emas. Dengan menyediakan lingkungan yang mendukung, kami berharap anak-anak dapat tumbuh menjadi individu yang berkualitas, berdaya saing tinggi, serta memiliki keterampilan dan pengetahuan yang luas. Mereka diharapkan mampu menghadapi tantangan global di masa depan dengan percaya diri.
            </p>
          </div>
          <div class="gambar">
            <img class="image-about" src="gambar/gambar-2.jpg" alt="gambar utama" />
          </div>
        </div>
        <div class="about-informasi-2 about-informasi d-flex container align-items-center">
          <div class="informasi">
            <p class="ps-4">
              Kami memberikan pembelajaran formal seperti matematika dan bahasa Inggris kepada lebih dari 20 anak setiap minggunya. Selain itu, kami juga fokus pada pengembangan soft skill, kreativitas, dan pemahaman budaya lokal. Melalui seni, public speaking, pramuka, dan program lingkungan Keliki Ecolution, kami berharap anak-anak dapat berkembang secara holistik dan siap menghadapi masa depan dengan percaya diri.
            </p>
          </div>
          <div class="gambar">
            <img src="gambar/gambar-2.jpg" alt="gambar utama" />
          </div>
        </div>
      </section>
      <!-- akhir section about -->
  
      <!-- our gallery -->
      <section class="our-gallery container py-5">
        <h1 class="text-center">Our Gallery</h1>
        <p class="text-center">Galeri kami menampilkan kreativitas anak-anak dalam seni, budaya, dan lingkungan.</p>
  
        <!-- gambar -->
        <div class="containers container pb-5">
          <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="gambar/bg.png" style="width: 100%" />
          </div>
  
          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="gambar/bg.png" style="width: 100%" />
          </div>
  
          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="gambar/bg.png" style="width: 100%" />
          </div>
  
          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="gambar/bg.png" style="width: 100%" />
          </div>
  
          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="gambar/bg.png" style="width: 100%" />
          </div>
  
          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="gambar/bg.png" style="width: 100%" />
          </div>
  
          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
  
          <div class="caption-container">
            <p id="caption"></p>
          </div>
  
          <div class="row">
            <div class="column">
              <img class="demo cursor" src="gambar/bg.png" style="width: 100%" onclick="currentSlide(1)" alt="" />
            </div>
            <div class="column">
              <img class="demo cursor" src="gambar/bg.png" style="width: 100%" onclick="currentSlide(2)" alt="" />
            </div>
            <div class="column">
              <img class="demo cursor" src="gambar/bg.png" style="width: 100%" onclick="currentSlide(3)" alt="" />
            </div>
            <div class="column">
              <img class="demo cursor" src="gambar/bg.png" style="width: 100%" onclick="currentSlide(4)" alt="" />
            </div>
            <div class="column">
              <img class="demo cursor" src="gambar/bg.png" style="width: 100%" onclick="currentSlide(5)" alt="" />
            </div>
            <div class="column">
              <img class="demo cursor" src="gambar/bg.png" style="width: 100%" onclick="currentSlide(6)" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- akhir our gallery -->
  
      <!-- section bergabung dan mendukung -->
      <section class="bergabung-dan-mendukung py-5">
        <div class="bergabung-dan-mendukung-2 container">
          <h1 class="text-center">Bergabung dan mendukung</h1>
          <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga perspiciatis hic itaque tempora consequatur dicta.</p>
          <div class="content-bergabung-mendukung">
            <div class="no-rekening">
              <div class="norek">
                <h5>Transfer</h5>
                <img src="gambar/bca.svg" alt="" style="width:150px; margin-top:10px;">
                <p class="m-3">0933174795548</p>
                <input type="text" name="" value="0933174795548" id="myInput">
                <button id="buttonCopy" onclick="myFunction()">Copy</button>
              </div>
            </div>
            <div class="informasi">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum dignissimos ad illo error, vel dolores consequatur animi nam temporibus, amet eius placeat eveniet molestias. Dolores architecto rerum magnam, omnis eveniet eum
              earum eius. Architecto quia omnis perferendis velit inventore eum blanditiis repellat reprehenderit vel minus? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum dignissimos ad illo error,quia omnis perferendis
              velit inventore eum blanditiis repellat reprehenderit vel minus?
            </div>
          </div>
        </div>
      </section>
      <!-- akhir section bergabung dan mendukung -->
  
      <!-- section kebijakan dan privasi -->
      <section class="kebijakan-dan-privasi container py-5">
        <h1 class="text-center">Kebijakan privasi</h1>
        <p class="text-center pb-5">Kebijakan privasi kami merincikan prosedur pengumpulan, penggunaan, dan perlindungan informasi pribadi pengguna.</p>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Kebijakan 1</button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well
                as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item mt-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Kebijakan 2</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as
                well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item mt-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Kebijakan 3</button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well
                as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir section kebijakan dan privasi -->
  
      <!-- section testimoni -->
      <section class="testimoni py-5 container  ">
        <h1 class="text-center">Testimoni</h1>
        <p class="text-center pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus minus animi illum qui.</p>
        <div class="list-testimoni container">

          <div class="testimonis">
            <h4>Putra Dwi</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit libero aperiam similique at reiciendis in eligendi iure qui fuga quis?</p>
            <div class="star">
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
            </div>
          </div>
          <div class="testimonis">
            <h4>Putra Dwi</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit libero aperiam similique at reiciendis in eligendi iure qui fuga quis?</p>
            <div class="star">
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
            </div>
          </div>
          <div class="testimonis">
            <h4>Putra Dwi</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit libero aperiam similique at reiciendis in eligendi iure qui fuga quis?</p>
            <div class="star">
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
            </div>
          </div>
          <div class="testimonis">
            <h4>Putra Dwi</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit libero aperiam similique at reiciendis in eligendi iure qui fuga quis?</p>
            <div class="star">
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
              <img src="gambar/Star 1.png" alt="" />
            </div>
          </div>

        </div>
      </section>
      <!-- akhir section testimoni -->
  
    
</x-layout>