<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

    <!-- Main Content -->
    <main role="main">
      <section>
        <div class="main-content">
          <div class="container min-vh-100">
            <div class="row">
              <div class="col-sm-10 offset-sm-1 text-center align-middle">
                <h2>Our Furniture Inventory</h2>
              </div>
              
              <div class="col-sm-10 offset-sm-1 text-center align-middle">
                <table id="inventory">
                  <tr>
                    <th>Manufacturer</th>
                    <th>Product Name</th>
                    <th>Current Stock</th>
                    <th>Category</th>
                    <th>Weight</th>
                    <th>Cubes</th>
                    <th>Price</th>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
