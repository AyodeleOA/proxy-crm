<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f7f9fc;
    }
    .sidebar {
      background: #fff;
      height: 100vh;
      border-right: 1px solid #ddd;
    }
    .sidebar a {
      display: block;
      padding: 10px 20px;
      text-decoration: none;
      color: #333;
    }
    .sidebar a:hover, .sidebar .active {
      background: #e8f0fe;
      font-weight: bold;
    }
    .dashboard-container {
      padding: 20px;
    }
    .widget {
      background: #fff;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    .widget h5 {
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .scrollable {
      max-height: 150px;
      overflow-y: auto;
    }
    .add-widget {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 24px;
      height: 100%;
      cursor: pointer;
      background: #f0f0f0;
      border-radius: 8px;
      min-height: 150px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 sidebar">
        <div class="p-3">
          <h5>Proxynet</h5>
          <input class="form-control mb-3" type="search" placeholder="Search...">
          <a href="#" class="active">Dashboard</a>
          <a href="#">Inventory</a>
          <a href="#">Sales</a>
          <a href="#">Marketing</a>
          <a href="#">Support</a>
          <a href="#">Project</a>
          <a href="#">Tools</a>
          <hr />
          <h6>More resources</h6>
          <a href="#">Mail Manager</a>
          <a href="#">Documents</a>
          <a href="#">Extension Store</a>
          <a href="#">Settings</a>
        </div>
      </div>
      <div class="col-md-10 dashboard-container">
		<div class="row">
          <div class="col-md-12">
			<div class="widget" style="background:url(images/banner.png)">
				<h3 class="text-white">Hello Ayodele</h3>
			</div>
		  </div>
		</div>
        <div class="row">
          <div class="col-md-4">
            <div class="widget">
              <h5>Campaigns</h5>
              <ul>
                <li>Campaign 1 - Webinar (Pending)</li>
                <li>Campaign 2 - Marketing (Completed)</li>
                <li>Campaign 3 - Advertising (In Progress)</li>
                <li>Campaign 4 - Recruitment (Cancelled)</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget scrollable">
              <h5>Upcoming Activities</h5>
              <ul>
                <li>Roboparty1 - Sales (21-05-2025)</li>
                <li>Tech Experience - Customer Engagement (21-05-2025)</li>
                <li>Huawei - Sales (21-06-2025)</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget scrollable">
              <h5>Leads - All</h5>
              <ul>
                <li>Lead 1 - Philip (DM)</li>
                <li>Lead 2 - Chinaza (SR)</li>
                <li>Lead 3 - Mike (BDM)</li>
                <li>Issue 4 - Mike (BDM)</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget">
              <h5>Opportunities by Stage</h5>
              <p>No opportunities matched this criteria.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget">
              <h5>Leads by Source</h5>
              <p>No scheduled activities.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget scrollable">
              <h5>Tickets - Open Tickets</h5>
              <ul>
                <li>Issue 1 - Critical (Bayo)</li>
                <li>Issue 2 - Important (Techforce)</li>
                <li>Issue 3 - Critical (Mike)</li>
                <li>Issue 4 - Routine (Williams)</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget">
              <h5>Tickets by Status</h5>
              <ul>
                <li>18 - Opened</li>
                <li>12 - In Progress</li>
                <li>10 - Closed</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget">
              <h5>Revenue by Sales Person</h5>
              <p>No opportunities matched this criteria.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="add-widget">
              <span>+ Add Widget</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
