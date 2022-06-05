<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/wals1.jfif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/wals2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/wals3.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 

<!-- 
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/wals1.jfif" class="d-block h-5 w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/wals2.jpg" class="d-block w-80" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/wals3.jpeg" class="d-block w-80" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

    <div class="row text-center">
        <?php foreach ($barang as $brg) : ?>
        
            <div class="card mt-4 ml-3 mr-2" style="width: 18rem;">
              <img src="<?php echo base_url(). '/assets/picture/' .$brg->gambar ?>" class="card-img-top" alt="...">
                 <div class="card-body">
                    <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <span class="badge bg-light mt-3 mb-3">Rp.<?php echo number_format($brg->harga, 0,',','.') ?></span><br>
                    <?php echo anchor('welcome/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                    <?php echo anchor('welcome/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>') ?>

                </div>
            </div>

        <?php endforeach ?>
    </div>
</div>