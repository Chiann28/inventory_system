<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RMS Inventory</title>
    <link rel="stylesheet" href="assets/dash.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="logo-details">
          <div class="icon" style="font-size: 40px">AMS</div>
          <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="sidebar-nav">
          <li>
            <a href="admindash.html"
              ><i class="bx bx-grid-alt" id="icons"></i
              ><span class="links_name">Dashboard</span></a
            >
          </li>
          <li class="active">
            <a href="admininv.html"
              ><i class="bx bx-box" id="icons"></i
              ><span class="links_name">Inventory</span></a
            >
          </li>
          <li>
            <a href="adminppmp.html"
              ><i class="bx bxs-edit" id="icons"></i
              ><span class="links_name">PPMP</span></a
            >
          </li>
          <li>
            <a href="adminsc.html"
              ><i class="bx bx-shape-circle" id="icons"></i
              ><span class="links_name">Supply Chain</span></a
            >
          </li>
          <li>
            <a href="index.html"
              ><i class="bx bx-log-out-circle" id="icons"></i
              ><span class="links_name">Logout</span></a
            >
          </li>
        </ul>
      </div>

      <div class="main-content">
        <header class="dashboard-header">
          <div class="date-time">
            <p>May 10, 2024</p>
            <p>8:00 AM</p>
          </div>
          <button class="download-btn">Download Report</button>
        </header>

        <section class="inventory-header">
          <div class="inventory-title">
            <h2>Inventory</h2>
            <p>List of medicines supplies.</p>
          </div>
          <div class="inventory-stats">
            <h3>Total Quantity of Medicines</h3>
            <p class="total-medicines">5,403</p>
            <div class="inventory-graph"></div>
          </div>
          <div class="inventory-controls">
            <input type="search" placeholder="Search the ID of Medicines..." />
            <button class="quick-edit-btn">Quick Edit</button>
            <button class="add-item-btn">Add New Item</button>
            <button class="check-items-btn">Import Items</button>
          </div>
        </section>

        <!-- Inventory Table -->
        <section class="inventory-table">
          <table>
            <thead>
              <tr>
                <th>Medicine Name</th>
                <th>Medicine ID</th>
                <!-- <th>Brand Name</th> -->
                <th>Stock in Qty</th>
                <th>Unit of Measurement</th>
                <th>Cost per Unit</th>
              </tr>
            </thead>
            <tbody>
            <p id="no-data-message" style="display:none;">No inventory items available.</p>
            </tbody>
          </table>
        </section>
      </div>
    </div>

    <script src="js/InventoryController.js"></script>
  </body>
</html>
