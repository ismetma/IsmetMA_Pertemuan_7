<?php if ( $search->getSearchByTitle('oop_posts','title', $_GET['search'] ) ) { ?>
  <?php foreach ($search->getSearchByTitle('oop_posts','title', $_GET['search']) as $blog) { ?>
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
  <p class="text-danger">
    Page Not Found For : <?php echo $_GET['search'] ?>
  </p>
<?php } ?>