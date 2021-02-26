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
   EXPERIENCE
 </h1>
 <hr>
</div>

<div class="col-lg-10 col-md-10 mx-auto">
<div class="row row-cols-1 row-cols-md-3">
<?php foreach($work as $w) : ?>
  <div class="post-preview">
          <a href="<?= $w['url']; ?>">
             <div class="col mb-4">
        <div class="card">
          <img src="<?= base_url('assets/img/work/').$w['image'];?>" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title"><?= $w['place']; ?></h5>
            <h6 class="card-text"><?= $w['role']; ?></h6>
            <p class="card-text"><?= $w['date']; ?></p>
          </div>
        </div>
      </div>
          </a>
        </div>
 
<?php endforeach; ?>

<?php foreach($organization as $o) : ?>
  <div class="post-preview">
          <a href="<?= $o['url']; ?>">
             <div class="col mb-4">
        <div class="card">
          <img src="<?= base_url('assets/img/work/').$o['image'];?>" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title"><?= $o['place']; ?></h5>
            <h6 class="card-text"><?= $o['role']; ?></h6>
            <p class="card-text"><?= $o['date']; ?></p>
          </div>
        </div>
      </div>
          </a>
        </div>
 
<?php endforeach; ?>
</div>
</div>