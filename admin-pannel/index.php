<?php
session_start();
if(!isset($_SESSION['loggedin'])){
    header('Location:login.php');
    exit;
}

include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bakery Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
     
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Bootstrap CSS & Css -->
  
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>

<!-- Dashboard Content -->
<div class="container-fluid">
  <div class="home">
  <h4 class="fw-bold">Overview</h4>
  <div class="row g-4 my-3">
    <div class="col-md-3">
      <div class="card-summary">
        <p class="card-title">Total Sales</p>
        <p class="card-value">₹12,628 <span class="text-success fs-6">↑ 20%</span></p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-summary">
        <p class="card-title">Expenses</p>
        <p class="card-value">₹2,250 <span class="text-danger fs-6">↓ 5%</span></p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-summary">
        <p class="card-title">Projects</p>
        <p class="card-value">23 <span class="text-muted fs-6">Open</span></p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-summary">
        <p class="card-title">Invoices</p>
        <p class="card-value">6 <span class="text-muted fs-6">New</span></p>
      </div>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-md-6">
      <div class="chart-card">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h6 class="fw-bold">Line Chart Example</h6>
          <select class="form-select form-select-sm w-auto">
            <option>This week</option>
            <option>This month</option>
          </select>
        </div>
        <canvas id="lineChart"></canvas>
      </div>
    </div>
    <div class="col-md-6">
      <div class="chart-card">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h6 class="fw-bold">Bar Chart Example</h6>
          <select class="form-select form-select-sm w-auto">
            <option>This week</option>
            <option>This month</option>
          </select>
        </div>
        <canvas id="barChart"></canvas>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- Bootstrap & Chart.js Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const lineCtx = document.getElementById('lineChart');
  new Chart(lineCtx, {
    type: 'line',
    data: {
      labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7'],
      datasets: [
        {
          label: 'Sales',
          data: [4000, 500, 3000, 7000, 2000, 1000, 4000],
          borderColor: '#f08632',
          tension: 0.4,
          fill: false
        },
        {
          label: 'Expenses',
          data: [1000, 9000, 8500, 9000, 100, 100, 9500],
          borderColor: '#999',
          borderDash: [5,5],
          fill: false,
          tension: 0.4
        }
      ]
    }
  });

  const barCtx = document.getElementById('barChart');
  new Chart(barCtx, {
    type: 'bar',
    data: {
      labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
      datasets: [{
        label: 'Orders',
        data: [10, 40, 70, 70, 60, 25, 85],
        backgroundColor: '#f08632'
      }]
    }
  });
</script>

</body>
</html>
