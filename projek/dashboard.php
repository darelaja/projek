<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Dashboard</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');

  * {
    box-sizing: border-box;
  }

  body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    background: #f5f7fa;
    color: #333;
  }

  .container {
    display: flex;
    height: 100vh;
  }

  /* Sidebar */
  .sidebar {
    width: 250px;
    background: #263238;
    color: #cfd8dc;
    display: flex;
    flex-direction: column;
    padding: 20px 0;
  }

  .sidebar h2 {
    color: #fff;
    text-align: center;
    margin-bottom: 1.5rem;
    font-weight: 600;
  }

  .nav-links {
    list-style: none;
    padding: 0;
    margin: 0;
    flex-grow: 1;
  }

  .nav-links li {
    padding: 15px 30px;
    cursor: pointer;
    transition: background 0.3s;
    font-weight: 500;
    font-size: 1rem;
  }

  .nav-links li:hover,
  .nav-links li.active {
    background: #37474f;
    color: #00bcd4;
  }

  /* Main content */
  .main-content {
    flex-grow: 1;
    padding: 20px 40px;
    overflow-y: auto;
  }

  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
  }

  .header h1 {
    font-weight: 600;
    font-size: 2rem;
    margin: 0;
  }

  .profile {
    display: flex;
    align-items: center;
    cursor: pointer;
  }

  .profile img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 12px;
    border: 2px solid #00bcd4;
  }
  
  .profile span {
    font-weight: 600;
    color: #555;
  }

  /* Cards container */
  .cards {
    display: flex;
    gap: 20px;
    margin-bottom: 40px;
    flex-wrap: wrap;
  }

  .card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 10px rgb(0 0 0 / 0.05);
    flex: 1 1 200px;
    min-width: 200px;
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: translateY(-6px);
  }

  .card h3 {
    margin: 0 0 10px 0;
    font-weight: 600;
    color: #00bcd4;
  }

  .card p {
    font-size: 1.8rem;
    margin: 0;
    font-weight: 700;
    color: #263238;
  }

  /* Charts container */
  .charts {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    margin-bottom: 40px;
  }

  .chart-container {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 10px rgb(0 0 0 / 0.05);
    flex: 1 1 400px;
    min-width: 300px;
  }

  .chart-container h3 {
    margin: 0 0 20px 0;
    font-weight: 600;
    color: #00bcd4;
  }

  /* Table styles */
  table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgb(0 0 0 / 0.05);
    overflow: hidden;
  }

  thead {
    background: #00bcd4;
    color: white;
  }

  th, td {
    padding: 12px 18px;
    text-align: left;
  }

  tbody tr:nth-child(even) {
    background: #f9f9f9;
  }

  tbody tr:hover {
    background: #e1f5fe;
  }

  th {
    font-weight: 600;
  }
  
  @media (max-width: 900px) {
    .charts {
      flex-direction: column;
    }
    .cards {
      flex-direction: column;
    }
    .sidebar {
      width: 60px;
      padding: 20px 10px;
    }
    .sidebar h2 {
      font-size: 1rem;
      margin-bottom: 1rem;
    }
    .nav-links li {
      padding: 15px 10px;
      font-size: 0.9rem;
    }
    .main-content {
      padding: 20px 15px;
    }
  }
</style>
</head>
<body>
<div class="container">
  <nav class="sidebar">
    <h2>Ruang admin</h2>
    <ul class="nav-links">
      <li class="active">Dashboard</li>
      <li>laporan</li>
      <li>Analytics</li>
      <li>pengaturan</li>
    </ul>
  </nav>
  <main class="main-content">
    <header class="header">
      <h1>Dashboard</h1>
      <div class="profile" title="User Profile">
        <img src="https://i.pravatar.cc/40" alt="User avatar" />
        <span>Darrell aja</span>
      </div>
    </header>

    <section class="cards">
      <div class="card">
        <h3>Total Sales</h3>
        <p>$42,178</p>
      </div>
      <div class="card">
        <h3>Visitors</h3>
        <p>$18,564</p>
      </div>
      <div class="card">
        <h3>Revenue</h3>
        <p>$89,741</p>
      </div>
      <div class="card">
        <h3>Conversions</h3>
        <p>$3,222</p>
      </div>
    </section>

    <section class="charts">
      <div class="chart-container">
        <h3>Sales Overview</h3>
        <canvas id="salesChart"></canvas>
      </div>
      <div class="chart-container">
        <h3>Visitor Growth</h3>
        <canvas id="visitorChart"></canvas>
      </div>
    </section>

    <section>
      <h3 style="margin-bottom: 16px; color: #00bcd4;">Recent Transactions</h3>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Customer</th>
            <th>Amount</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>TXN001</td>
            <td>2024-06-01</td>
            <td>Ali tohir</td>
            <td>$230.00</td>
            <td>Completed</td>
          </tr>
          <tr>
            <td>TXN002</td>
            <td>2024-06-02</td>
            <td>Bobi saputra</td>
            <td>$540.00</td>
            <td>Pending</td>
          </tr>
          <tr>
            <td>TXN003</td>
            <td>2024-06-03</td>
            <td>joko</td>
            <td>$120.00</td>
            <td>Failed</td>
          </tr>
          <tr>
            <td>TXN004</td>
            <td>2024-06-04</td>
            <td>Diana suka bunga</td>
            <td>$950.00</td>
            <td>Completed</td>
          </tr>
          <tr>
            <td>TXN005</td>
            <td>2024-06-05</td>
            <td>abdul suka ijo</td>
            <td>$380.00</td>
            <td>Completed</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Sales Overview Bar Chart
  const salesCtx = document.getElementById('salesChart').getContext('2d');
  const salesChart = new Chart(salesCtx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
      datasets: [{
        label: 'Sales ($)',
        data: [12000, 19000, 15000, 22000, 26000, 30000, 28000],
        backgroundColor: '#00bcd4',
        borderRadius: 6,
        barPercentage: 0.6,
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
          ticks: { stepSize: 5000 }
        }
      },
      plugins: {
        legend: {
          display: false
        }
      },
      animation: {
        duration: 1000,
        easing: 'easeOutQuart'
      }
    }
  });

  // Visitor Growth Line Chart
  const visitorCtx = document.getElementById('visitorChart').getContext('2d');
  const visitorChart = new Chart(visitorCtx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
      datasets: [{
        label: 'Visitors',
        data: [3000, 4000, 3500, 5000, 4800, 6000, 7000],
        borderColor: '#00bcd4',
        backgroundColor: 'rgba(0, 188, 212, 0.3)',
        tension: 0.3,
        fill: true,
        pointRadius: 5,
        pointHoverRadius: 7,
        borderWidth: 3,
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
          ticks: { stepSize: 1000 }
        }
      },
      plugins: {
        legend: {
          display: false
        }
      },
      animation: {
        duration: 1200,
        easing: 'easeOutQuart'
      }
    }
  });
</script>
</body>
</html>

