
          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <form method="POST" class="input-group">
                  <input type="text" name="keyword" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <input type="submit" class="btn btn-secondary" name="cari" value="Go!">
                  </span>
                </form>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <?php foreach ($category->getAllCategory('oop_category_blog') as $categorys) { ?>
                      <li>
                        <a href="index.php?category=<?= $categorys['id'] ?>"><?= $categorys['category_name'] ?></a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>