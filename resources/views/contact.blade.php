<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="contact-gambar">
      <h1>contact</h1>
      <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis beatae qui hic veritatis debitis!</p>
    </section>
  
    <section class="halaman-contact">
        <h1 class="text-center mt-5" >{{ $title }}</h1>
        <p class="text-center mb-5 container">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id cupiditate commodi deserunt perferendis dicta.</p>
        <div class="form-sosmed container">
            <div class="sosial-media">
                <ul>
                    <li>
                        <img src="gambar/phone.png" alt="">
                        <span>083115998188</span>
                    </li>
                    <li>
                        <img src="gambar/email.png" alt="">
                        <span>yayasan@gmail.com</span>
                    </li>
                    <li>
                        <img src="gambar/location.png" alt="">
                        <span>Br.Calo, Pupuan, Tegallalang, Gianyar, bali</span>
                    </li>
                </ul>
                <h1 class="ms-5 fs-4 mt-5" id="text-media-sosial">meida sosial</h1>
                <ul class="d-flex">
                    <li>
                       <a href=""><img src="gambar/wa.png" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="gambar/ig.png" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="gambar/fb.png" alt=""></a>
                    </li>
                </ul>
            </div>
            <div class="form">
                <form action="">
                    <label for="nama">Nama</label><br>
                    <input type="text" placeholder="Nama"><br>
                    <label for="ucapan">Ucapan</label><br>
                    <textarea name="ucapan" id="" rows="5" placeholder="Ucapan"></textarea><br>
                    <button type="submit">Kirim</button>
                </form>
            </div>
        </div>
        <div class="map my-5">
            <iframe class="rounded-2" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d829.7499109999665!2d115.30587967914074!3d-8.403821825395752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1714888309304!5m2!1sid!2sid" width="80%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
  </x-layout>