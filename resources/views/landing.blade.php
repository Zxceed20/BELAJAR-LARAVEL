<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist\css\bootstrap.css') }}">
</head>
<body>
    

    <!-- <button type="button" class="btn btn-success">Hijau</button> -->
<!-- 
    <div class="container-sm bg-success m-5">Container SM</div>
    <div class="container-md bg-primary m-5">Container SM</div>
    <div class="container-lg bg-danger m-5">Container SM</div>
    <div class="container-xl bg-warning m-5">Container SM</div>
    <div class="container-xxl bg-secondary m-5">Container SM</div> -->


<!-- <div class="container">
    <div class="row">
        <div class="col-auto bg-warning">lorem</div>
        <div class="col-2 bg-danger">HALO</div>
        <div class="col-2 bg-primary">HALO</div>
    </div>
</div> -->


<nav class="navbar navbar-expand-lg bg-success ">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Surya Budi Utomo</a>
      <button class="navbar-toggler bg-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto d-flex gap-3 text-center pt-lg-0 pt-sm-4">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- gyro -->

  <section class="hero">
    <div class="container pt-3">
        <div class="hero-box d-flex align-items-center flex-md-row flex-column gap-5">
            <div class="box">
                <h1>BELAJAR <span class="text-success">BOOTSTRAP</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit neque ducimus aliquam, quos harum numquam, nam recusandae porro sunt adipisci tempore eum consequatur facere, doloremque illo ex possimus itaque quidem?</p>
                <a class="btn btn-success" href="">Tentang Kami</a>
                <a class="btn btn-outline-success" href="">Project Kami</a>
            </div>
            <div class="box mb-5">
                <img style="height: auto; width: 200px;" src="k.jpg" alt="">
            </div>
        </div>
    </div>
  </section>
<hr>


  <!-- kelas -->
  <section class="about">
    <div class="container">
        <div class="box-about text-center mb-4">
            <h1 class="fw-bold mb-5">ABOUT</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, illo quae. Perspiciatis officia nam, quo atque odit veritatis quaerat provident? Reprehenderit temporibus expedita quam provident aut sed officiis laborum ex? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur voluptatem aliquam similique veniam molestias voluptates sit eveniet quis provident, minus dolor, maiores iure velit? Magnam iure consequatur accusamus optio neque!</p>

        </div>
    </div>
  </section>

<br><br><br><br> <hr>
   <!-- service  -->
<br><br>
   <section class="service m-5">
    <h1 class="fw-bold text-center mb-5">OUR SERVICE</h1>
    <div class="container">
      <div class="d-flex flex-wrap flex-md-row flex-column gap-4 justify-content-center align-items-center">
          <div class="card border-success" style="width: 18rem;">
              <img src="kucing.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Jasa Pembuatan Web</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">Rp.800.000</li>
              </ul>
              <div class="card-body">
                  <a href="#" class="btn btn-outline-success">WhatsApp</a>
              </div>
          </div>
          <!-- Ulangi div card untuk kartu lainnya -->
          <div class="card border-success" style="width: 18rem;">
            <img src="kucing.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Install OS</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Rp.40.000</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-outline-success">WhatsApp</a>
            </div>
        </div>
        <div class="card border-success" style="width: 18rem;">
          <img src="kucing.jpg" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">Jasa Desain</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
              <li class="list-group-item">Rp.400.000</li>
          </ul>
          <div class="card-body">
              <a href="#" class="btn btn-outline-success">WhatsApp</a>
          </div>
      </div>
      <div class="card border-success" style="width: 18rem;">
        <img src="kucing.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pembuatan Logo</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Rp.1.000.000</li>
        </ul>
        <div class="card-body">
            <a href="#" class="btn btn-outline-success">WhatsApp</a>
        </div>
    </div>
      </div>
  </div>
   </section>

   <br><br><hr>


<!-- service end  -->



<!-- project  -->

<br><br>
<section class="project m-5 ">
    <h1 class="fw-bold text-center">PROJECT</h1>
    <div class="box d-flex align-items-center flex-md-row flex-column gap-5">
      <div class="card" style="width: 18rem;">
        <img src="kucing.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Web Toko</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="https://github.com/Zxceed20" class="btn btn-primary">Github</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="kucing.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Biodata</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="https://github.com/Zxceed20" class="btn btn-primary">Github</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="kucing.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kalkulator</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="https://github.com/Zxceed20" class="btn btn-primary">Github</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="kucing.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Program JAVA</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="https://github.com/Zxceed20" class="btn btn-primary">Github</a>
        </div>
      </div>
    </div>
      
</section>



<br><br><hr>
<!-- project edn  -->


<!-- faq  -->
<br><br>

<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          Dimana anda bekerja?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Saya sedang menempuh pendidikan di SMKN 1 Surabaya</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Apa hobby anda?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Saya senang bermain musik dan saya juga suka menggambar dan mempelajari bahasa pemrograman</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          Dimana anda mempelajari bahasa pemrograman
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Saya mempelajari basa pemrograman di youtube dan platfrom pelatian gratis seperti IDCamp dan lain lain</div>
      </div>
    </div>
  </div>



<!-- FAQ  -->

  <!-- one pages -->


    

    <script src="bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\js\bootstrap.js"></script>
</body>
</html>