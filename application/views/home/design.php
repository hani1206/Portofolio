 <style>
    div.a {
  text-align: center;
}
h1 {
  text-shadow: 2px 2px #FF0000;
}
  </style>

        <div class="a">
          <div class="site-heading">
            <h1><?= $judul; ?></h1>
            <small> instagram : @mvylil</small>
          </div>
        </div>
<div class="col-lg-10 col-md-10 mx-auto">
	<hr>
<div class="row row-cols-1 row-cols-md-3">
<?php foreach($design as $d) : ?>
<div class="post-preview">
   <a href="<?= $d['url']; ?>">
  <div class="col mb-4">
    <div class="card">
      <img src="<?= base_url('assets/img/design/').$d['image'];?>" class="card-img-top" alt="..." >
    </div>
</div>
</a>
</div>
<?php endforeach; ?>
  
</div>
</div>