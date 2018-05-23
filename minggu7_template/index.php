<?php 
  

  include 'cloud/Cloudinary.php';
  include 'cloud/Uploader.php';
  include 'cloud/Api.php';
  include 'controller/Database.php';
  include 'controller/News.php';
  include 'controller/Commentar.php';
  include 'controller/Category.php';
  include 'controller/Search.php';
  include 'controller/cloudy.php';


  // header

  include 'includes/header.php';
  include 'includes/menu.php';

  $news = new \controller\News;
  $comment = new \controller\Commentar;
  $category = new \controller\Category;
  $search = new \controller\Search;
?>

    <!-- Navigation -->
    

    <!-- Page Content -->
        <!-- Blog Entries Column -->

          <!-- Blog Post -->
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                 <h1 class="my-4">Page Heading
                  <small>Secondary Text</small>
                </h1>
                <?php 

                  if (isset($_POST['cari'])) {
                      $keyword = $_POST['keyword'];

                      $search->searchByTitle('oop_posts','title', $keyword);
                  }

                  if (isset($_GET['detail'])) {
                    include 'detail_post.php';
                    // comment

                    if (isset($_POST['add'])){
                      $post_id  = $_POST['post_id']; 
                      $username = $_POST['username']; 
                      $replay   = $_POST['comment'];

                      if ($username == "" ) {
                        echo "<script>alert('Nama Tidak Boleh Kosong ! ')</script>";
                      } else if ( $replay == "" ) {
                        echo "<script>alert('Pesan Tidak Boleh Kosong ! ')</script>";
                      } else {

                        $comment->insertComment('oop_comments', $post_id, $username, $replay);
                      }
                    }

                  } else if(isset($_GET['search'])) {

                    include 'includes/search.php';
                  
                  } else if(isset($_GET['category'])) {

                    include 'includes/category.php';
                  } else {

                    include 'home.php';
                  }

                ?>
          <!-- Pagination -->
          <?php if (isset($_GET['detail']) || isset($_GET['category'] )  || isset($_GET['search'] ) ) { ?>
            
          <?php } else { ?>
            <ul class="pagination justify-content-center mb-4">
              <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
              </li>
            </ul>
          <?php } ?>
          </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <?php include 'includes/asside.php'; ?>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php include 'includes/footer.php'; ?>