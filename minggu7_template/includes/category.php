<?php if ($category->getTotalCategory('oop_posts', $_GET['category'] ) > 0 ) { ?>
  <?php foreach ($category->getByCategory('oop_posts', $_GET['category']) as $blog) { ?>
    <div class="card mb-4">
      <?php echo cl_image_tag($blog['image_news'], array("class" => "card-img-top")) ?>
      <div class="card-body">
        <h2 class="card-title"><?= $blog['title'] ?></h2>
        <p class="card-text"><?= $blog['news'] ?></p>
        <a href="index.php?detail=<?= $blog['id'] ?>" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on <?= $blog['date_post'] ?>, by
        <a href="#">Ismet Maulana</a>
      </div>
    </div>
  <?php } ?>
<?php } else { ?>
  <div class="alert alert-danger">
    <code> Maaf ! Bloging Belom Tersedia </code>
  </div>
<?php } ?>