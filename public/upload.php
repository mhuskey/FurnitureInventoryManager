<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Upload CSV'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

    <!-- Main Content -->
    <main role="main">
      <section>
        <div class="main-content">
          <div class="container min-vh-100">
            <div class="row">
              <div class="col-sm-10 offset-sm-1">
                <h2>Update Inventory</h2>
                <p>Select and upload a CSV file from your computer to update the <a href="<?php echo url_for('/furniture_inventory.php'); ?>">Furniture Inventory page</a>.</p>
                <br />
                
                <h3>Import CSV</h3>
                <hr />
                <form action="upload.php" method="post" enctype="multipart/form-data">
                  <input type="file" class="form-control-file">
                  <br />
                  <button type="submit" class="btn btn-primary">Upload CSV</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
