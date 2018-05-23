
<?php $result = $news->getById('oop_posts', $_GET['detail']) ?>
  <!-- Title -->
<h1 class="mt-4"><?= $result['title'] ?></h1>

<!-- Author -->
<p class="lead">
  by
  <a href="#">Ismet Maulana</a>
</p>

<hr>

<!-- Date/Time -->
<p>Posted on <?= $result['date_post'] ?></p>

<hr>

<!-- Preview Image -->
<?php echo cl_image_tag($result['image_news'], array("class" => "img-fluid rounded")) ?>

<hr>

<!-- Post Content -->
<p class="lead"><?= $result['news'] ?></p>

<blockquote class="blockquote">
  <footer class="blockquote-footer">
    <cite title="Source Title"><?= $result['title'] ?></cite>
  </footer>
</blockquote>
<hr>

<!-- Comments Form -->
<div class="card my-4">
  <h5 class="card-header">Leave a Comment:</h5>
  <div class="card-body">
    <form method="POST">
      <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control">
        <label for="">Reply</label>
        <textarea class="form-control" name="comment" rows="3"></textarea>
        <input type="hidden" name="post_id" value="<?php echo $result['id'] ?>">
      </div>
      <button type="submit" name="add" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<!-- Single Comment -->
<?php if (isset($_GET['sukses'])) { ?>
  <div class="alert alert-success">
    <p> New Comment added below. </p>
  </div>
<?php } ?>
<?php if ( $comment->getTotal('oop_comments', $result['id']) > 0 ) { ?>
  <?php foreach ($comment->getAllCommentById('oop_comments', $result['id']) as $com) { ?>
    <div class="media mb-4">
      <img class="d-flex mr-3 rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFavmj2jfnr_YSBMUsrlbjh4ipSNEgbhGbnffP3VC1Y5j67oYN" width="5%" alt="">
      <div class="media-body">
        <h5 class="mt-0 text-info"><?= $com['username'] ?></h5>
        <?= $com['reply'] ?>
      </div>
    </div>
  <?php } ?>
<?php } else { ?>
  <div class="alert alert-success">
    <code> Tidak Ada Comment </code>
  </div>
<?php } ?>