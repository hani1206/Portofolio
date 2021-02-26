  <!-- Main Content -->
  <style>
    div.a {
  text-align: center;
}

h1 {
  text-shadow: 2px 2px #FF0000;
}
  </style>
  
  <div class="a">
  <h1 class="post-title">
    PORTOFOLIO
    </h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-11 col-md-3 mx-auto">
        
          <div class="row text-justify">
              <p>Selamat datang! Website ini dibuat untuk menunjukan pengalaman dan karya yang sudah Haya Dieni buat untuk keperluan yang positif. Dilarang menyebar luaskan website ini karena tidak untuk umum hanya untuk keperluan bekerja.</p>
            </div>

             <div class="a">
              <h1 class="post-title">
                BIODATA
                </h1>
                <hr>
             </div>
<?php foreach($data_diri as $dd) : ?>
  <div class="col-lg-11 col-md-3 mx-auto" style="width: 1000px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="<?= base_url('assets/img/data/').$dd['image'];?>" style= "width: 300px">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $dd['nama']; ?></h5>
            <p class="card-text"><?= $dd['jurusan']; ?></p>
            <p class="card-text"><?= $dd['kampus']; ?></p>
            <p class="card-text"><?= $dd['email']; ?></p>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; ?>

</div>
</div>
</div>

       