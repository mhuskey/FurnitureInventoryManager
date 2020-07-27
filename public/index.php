<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

    <!-- Main Content -->
    <main role="main">
      <section>
        <div class="main-content">
          <div class="container min-vh-100">
            <div class="row">
              <div class="col-sm-10 offset-sm-1 text-center align-middle">
                  <a href="<?php echo url_for('/furniture_inventory.php'); ?>"><button type="button" class="btn btn-outline-primary">View Our Inventory</button></a>
                  <a href="<?php echo url_for('/about.php'); ?>"><button type="button" class="btn btn-outline-primary">About</button></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>