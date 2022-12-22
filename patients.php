<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <title>Patients</title>
</head>

<body>
  <!-- Dashboard Navigation Start-->
  <div class="dashboard-navigation">
    <div class="dashboard-navigation-background"></div>
    <div class="dashboard-navigation-card">
      <div class="logo-section">
        <img src="images/logo.png" alt="logo" />
      </div>
      <div class="navigation-section">
        <ul>
          <li>
            <a href="admin-dashboard.html">
              <img src="images/dashboard-logo.png" />
              <img src="images/dashboard-red-logo.png" />
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="recipient-history.html">
              <img src="images/recipient-history-logo.png" />
              <img src="images/recipient-history-red-logo.png" />
              <span>Recipient History</span>
            </a>
          </li>
          <li>
            <a href="blood-bank.html">
              <img src="images/blood-bank-logo.png" />
              <img src="images/blood-bank-red-logo.png" />
              <span>Blood Bank</span>
            </a>
          </li>
          <li class="active-nav-item">
            <a href="patients.html">
              <img src="images/patients-logo.png" />
              <img src="images/patients-red-logo.png" />
              <span>Patients</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Dashboard Navigation End -->

  <!-- Dashboard Start -->
  <div class="dashboard">
    <div class="dashboard-section-1">
      <div class="dashboard-section-1-left">
        <h3>Patients</h3>
      </div>
    </div>
    <div class="dashboard-section-4">
      <table>
        <thead>
          <tr>
            <th>Patient Name</th>
            <th>Patient ID</th>
            <th>Phone Number</th>
            <th>Blood type</th>
            <th>Genotype</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            require_once("./database/connectDb.php");

            $sql = "SELECT * FROM patients";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                      <td>".$row['fullname']."</td>
                      <td>".$row['uuid']."</td>
                      <td>".$row['phone']."</td>
                      <td>".$row['blood_type']."</td>
                      <td>".$row['genotype']. "</td>
                      <td><button>View</button></td>
                    </tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Dashboard End -->

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="js/admin-dashboard.js"></script>
</body>

</html>