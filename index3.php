<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    .sidebar {
      min-height: 100vh;
      background-color: #ffffff;
      border-right: 1px solid #ddd;
    }
    .sidebar .nav-link {
      color: #333;
    }
    .sidebar .nav-link.active {
      background-color: #007bff;
      color: white;
    }
    .dashboard-header {
      background: url('https://images.unsplash.com/photo-1503264116251-35a269479413') no-repeat center center/cover;
      color: white;
      padding: 2rem;
      font-size: 1.5rem;
    }
    .card {
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block sidebar p-3">
      <div class="text-center mb-4">
        <img src="https://via.placeholder.com/100x50?text=Proxynet" class="img-fluid" alt="Logo">
      </div>
      <input type="text" class="form-control mb-3" placeholder="Search...">
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Inventory</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Sales</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Marketing</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Project</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Tools</a></li>
      </ul>
      <hr>
      <div>
        <strong>More Resources</strong>
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link" href="#">Mail manager</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Documents</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Extension store</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
        </ul>
      </div>
    </nav>
    <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
      <div class="dashboard-header">Hello Ayodele</div>
      <div class="input-group my-3">
        <input type="text" class="form-control" placeholder="Type to search">
        <button class="btn btn-outline-secondary">Search</button>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
          <div class="card p-3">
            <h5>Campaigns</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Campaign 1 - <span class="badge bg-warning">Pending</span></li>
              <li class="list-group-item">Campaign 2 - <span class="badge bg-success">Completed</span></li>
              <li class="list-group-item">Campaign 3 - <span class="badge bg-info text-dark">In progress</span></li>
              <li class="list-group-item">Campaign 4 - <span class="badge bg-danger">Cancelled</span></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5>Upcoming Activities</h5>
            <select class="form-select mb-2">
              <option>All</option>
              <option>Sales</option>
              <option>Engagement</option>
            </select>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Roboparty1 - Sales - 21-05-2025</li>
              <li class="list-group-item">Tech Experience - Customer Engagement - 21-05-2025</li>
              <li class="list-group-item">Huawei - Sales - 21-05-2025</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5>Leads - All</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Lead 1 - Philip (DM)</li>
              <li class="list-group-item">Lead 2 - Chinaza (SR)</li>
              <li class="list-group-item">Lead 3 - Mike (BDM)</li>
              <li class="list-group-item">Issue 4 - Mike (BDM)</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5>Opportunities by Stage</h5>
            <p>No Opportunities matched this criteria</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5>Leads by Source</h5>
            <select class="form-select mb-2">
              <option>All</option>
            </select>
            <p>No scheduled activities</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5>Tickets - Open Tickets</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Issue 1 - <span class="text-danger">Critical</span> - Bayo (IT)</li>
              <li class="list-group-item">Issue 2 - <span class="text-warning">Important</span> - Techforce</li>
              <li class="list-group-item">Issue 3 - <span class="text-danger">Critical</span> - Mike (BDM)</li>
              <li class="list-group-item">Issue 4 - <span class="text-success">Routine</span> - Williams (CM)</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5>Tickets by Status</h5>
            <ul class="list-group">
              <li class="list-group-item">Opened: 18</li>
              <li class="list-group-item">In Progress: 12</li>
              <li class="list-group-item">Closed: 10</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5>Revenue by Sales person</h5>
            <p>No opportunities matched this criteria</p>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center">
          <button class="btn btn-primary">+ Add Widget</button>
        </div>
      </div>
    </main>
  </div>
</div>
</body>
</html>
