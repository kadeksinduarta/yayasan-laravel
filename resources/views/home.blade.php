{{-- {{ dd($title) }} --}}
<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
    <section class="halaman-utama container" id="home">
        <div class="informasi">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. In nostrum non, consequuntur tenetur odio ad vel quisquam aut praesentium culpa, rerum fuga. Eius harum eaque dicta laborum, minus ullam eos laboriosam aut modi, ste
            deleniti cumque, fugit optio.
          </p>
          <a href="#" class="button mt-4">Explore</a>
        </div>
        <div class="gambar">
          <img src="gambar/gambar.jpg" alt="gambar utama" />
        </div>
      </section>
      <!-- akhir sectin home -->
      <!--  -->
      <!-- section about -->
      <section class="about pt-5">
        <h1 class="text-center pt-3 pb-5">About Us</h1>
        <div class="about-informasi d-flex container align-items-center">
          <div class="informasi">
            <p class="p">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. In nostrum non, consequuntur tenetur odio ad vel quisquam aut praesentium culpa, rerum fuga. Eius harum eaque dicta laborum, minus ullam eos laboriosam aut modi, ste
              deleniti cumque, fugit optio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. In nostrum non, consequuntur tenetur odio ad vel quisquam aut praesentium culpa, rerum fuga. Eius harum eaque dicta laborum, minus ullam eos
              laboriosam aut modi, ste deleniti cumque, fugit optio.
            </p>
          </div>
          <div class="gambar">
            <img class="image-about" src="gambar/gambar-2.jpg" alt="gambar utama" />
          </div>
        </div>
        <div class="about-informasi-2 about-informasi d-flex container align-items-center">
          <div class="informasi">
            <p class="ps-4">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. In nostrum non, consequuntur tenetur odio ad vel quisquam aut praesentium culpa, rerum fuga. Eius harum eaque dicta laborum, minus ullam eos laboriosam aut modi, ste
              deleniti cumque, fugit optio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. In nostrum non, consequuntur tenetur odio ad vel quisquam aut praesentium culpa, rerum fuga. Eius harum eaque dicta laborum, minus ullam eos
              laboriosam aut modi, ste deleniti cumque, fugit optio.
            </p>
          </div>
          <div class="gambar">
            <img src="gambar/gambar-2.jpg" alt="gambar utama" />
          </div>
        </div>
      </section>
      <!-- akhir section about -->
  
      <!-- our gallery -->
      <section class="our-gallery container pt-5">
        <h1 class="text-center mt-3">Our Gallery</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsum a, suscipit nulla libero voluptatibus.</p>
  
        <!-- gambar -->
        <div class="containers container">
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
  
      <!-- section sertifikat -->
      <section class="sertifikat text-center bg-success p-4 mt-5">
        <h1>Sertifikat Dan Penghargaan</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus autem mollitia blanditiis praesentium laudantium.</p>
        <div class="sertifikat d-flex justify-content-around flex-wrap container">
          <img src="gambar/sertif.png" class="mt-4" alt="sertif" style="max-width: 300px" />
          <img src="gambar/sertif.png" class="mt-4" alt="sertif" style="max-width: 300px" />
          <img src="gambar/sertif.png" class="mt-4" alt="sertif" style="max-width: 300px" />
          <img src="gambar/sertif.png" class="mt-4" alt="sertif" style="max-width: 300px" />
          <img src="gambar/sertif.png" class="mt-4" alt="sertif" style="max-width: 300px" />
          <img src="gambar/sertif.png" class="mt-4" alt="sertif" style="max-width: 300px" />
        </div>
      </section>
      <!-- akhir section sertifikat -->
  
      <!-- section our schedule -->
     
      <!-- akhir section our schedule -->
  
      <!-- section bergabung dan mendukung -->
      <section class="bergabung-dan-mendukung bg-success container p-4">
        <h1 class="text-center">Bergabung dan mendukung</h1>
        <p class="text-center mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga perspiciatis hic itaque tempora consequatur dicta.</p>
        <div class="content-bergabung-mendukung">
          <div class="no-rekening">
            <div class="norek">
              <h5>bergabung dan mendukung</h5>
              <p class="m-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos fuga, a hic eligendi reiciendis vitae quas quia.</p>
              <button class="py-2 px-5 border-0 rounded mt-3">Transfer</button>
            </div>
          </div>
          <div class="informasi">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum dignissimos ad illo error, vel dolores consequatur animi nam temporibus, amet eius placeat eveniet molestias. Dolores architecto rerum magnam, omnis eveniet eum
            earum eius. Architecto quia omnis perferendis velit inventore eum blanditiis repellat reprehenderit vel minus? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum dignissimos ad illo error,quia omnis perferendis
            velit inventore eum blanditiis repellat reprehenderit vel minus?
          </div>
        </div>
      </section>
      <!-- akhir section bergabung dan mendukung -->
  
      <!-- section kebijakan dan privasi -->
      <section class="kebijakan-dan-privasi container bg-danger p-4">
        <h1 class="text-center">Kebijakan privasi</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ad aut soluta earum.</p>
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
      <section class="testimoni mb-5 container  ">
        <h1>Testimoni</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus minus animi illum qui.</p>
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
        </div>
      </section>
      <!-- akhir section testimoni -->
  
    
</x-layout>