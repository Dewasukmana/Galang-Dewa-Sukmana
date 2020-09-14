@extends('layout/main')
@section('title','home')
@section('container')
        <!-- jumbotron -->
        <div class="jumbotron text-center">
            <img  class="rounded-circle" alt="100x100" src="img/pp.jpg">
            <h1>Galang Dewa.S</h1>
            <p>Student | SMKN1 Purwosari |2018</p>
        </div>
       <!-- akhir jumbotron -->


       <!-- about -->
       <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">About Me</h2>
                    <hr>
                </div>
            </div>



            <div class="row">
                <div class="col-sm-6">
                    <p>Nama Saya Galang Dewa Sukmana,saya lahir 11 januari 2003,saya memiliki 1 saudara laki laki.
                       saya tinggal dengan kedua orang tua saya,alamat rumah saya Dsn.Klangkung Desa Nogosari,Kec.Pandaan
                       ,Kab.Pasuruan...saya saat ini duduk di bangku sekolah kelas XII di SMKN 1 Purwosari.Disana Saya mendapat banyak ilmu Tentang informatika.
                    </p>
                </div>
                <div class="col-sm-6">
                    <p>Menempuh didunia pendidikan lanjut merupakan impian bagi setiap pemuda, terlebih juga pasti setiap siswa ingin sekali memperkenalkan dirinya dengan membuat biodata yang baik dan benar supaya tidak dipandang remeh seseorang,meskipun saya masih belum memiliki sebuah karier</p>
                </div>
            </div>
        </div>
       </section>
       <!-- akhir about -->

       <!-- hobbies -->
       <section class="hobbies" id="hobbies">
           <div class="container">
               <div class="row">
                   <div class="col-sm-12 text-center" >
                       <h2>Hobbies</h2>
                       <hr>
                   </div>
               </div>

               <div class="row text-center">
                   <div class="col-sm-4">
                       <a href="">
                        <img src="hobbies/1.png" class="img-thumbnail">
                       </a>
                   </div>

                   <div class="col-sm-4">
                      <a href="">
                         <img src="hobbies/2.png" class="img-thumbnail">
                      </a>
                   </div>

                   <div class="col-sm-4">
                       <a href="">
                          <img src="hobbies/3.png" class="img-thumbnail">
                       </a>
                   </div>

                   <div class="col-sm-4">
                    <a href="">
                       <img src="hobbies/4.png" class="img-thumbnail">
                    </a>
                  </div>

                  <div class="col-sm-4">
                    <a href="">
                       <img src="hobbies/7.png" class="img-thumbnail">
                    </a>
                  </div>

                  <div class="col-sm-4">
                    <a href="">
                       <img src="hobbies/6.png" class="img-thumbnail">
                    </a>
                  </div>

                  
               </div>

               
           </div>
       </section>
       <!-- akhir hobbies -->


       <!-- contact -->
       <section class="contact" id="contact">
           <div class="container">
              <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>contact</h2>
                    <hr>
                </div>
              </div>

              <div class="row">
                  <div class="col-sm-12">
                      <form>
                          <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text"id="nama" class="form-control" placeholder="masukan nama">
                          </div>

                          <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email"id="nama" class="form-control" placeholder="masukan email">
                          </div>

                          <div class="form-group">
                            <label for="telp">No telp</label>
                            <input type="tel"id="telp" class="form-control" placeholder="masukan No telp">
                          </div>
                         <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" rows="10" placeholder="masukan pesan"></textarea>

                         </div>
                         <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                          
                      </form>
                  </div>
              </div>

           </div>
       </section>
       <!-- akhir contact -->

       <!-- footer -->
       <footer>
           <div class="container">
               <div class="row">
                   
               </div>
           </div>
       </footer>
       <!-- akhir footer -->
@endsection
   
    