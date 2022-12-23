<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <title>Recipient History</title>
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
          <li class="active-nav-item">
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
          <li>
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
        <h3>Recipient History</h3>
      </div>
    </div>
    <div class="dashboard-section-4">
      <table>
        <thead>
          <tr>
            <th>Donor</th>
            <th>Recipient</th>
            <th>Volume (In pants)</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require_once('./databasse/connectDb.php');

          $sql = "SELECT * FROM recipient_history JOIN blood_bank on recipient_history.";
          $result = mysqli_query($conn, $sql);
          $records = mysqli_num_rows($result);
          while ($row = mysqli_fetch_assoc($result)) {
              echo $row;
            }
          ?>
          ?>
            <tr>
              <td>Atanda Damilare</td>
              <td>Agboola Fuhad</td>
              <td>4</td>
              <td>Oct 1, 2022</td>
              <td><button onclick="toggleModal()">View</button></td>
            </tr>
            <tr>
              <td>Atanda Damilare</td>
              <td>Oluwafemi Seun Paul</td>
              <td>4</td>
              <td>Oct 1, 2022</td>
              <td><button onclick="toggleModal()">View</button></td>
            </tr>
            <tr>
              <td>Atanda Damilare</td>
              <td>Oni Temidayo</td>
              <td>4</td>
              <td>Oct 1, 2022</td>
              <td><button onclick="toggleModal()">View</button></td>
            </tr>
            <tr>
              <td>Atanda Damilare</td>
              <td>Agboola Fuhad</td>
              <td>4</td>
              <td>Oct 1, 2022</td>
              <td><button onclick="toggleModal()">View</button></td>
            </tr>
            <tr>
              <td>Atanda Damilare</td>
              <td>Oluwafemi Seun Paul</td>
              <td>4</td>
              <td>Oct 1, 2022</td>
              <td><button onclick="toggleModal()">View</button></td>
            </tr>
            <tr>
              <td>Atanda Damilare</td>
              <td>Oni Temidayo</td>
              <td>4</td>
              <td>Oct 1, 2022</td>
              <td><button onclick="toggleModal()">View</button></td>
            </tr>
            <tr>
              <td>Atanda Damilare</td>
              <td>Agboola Fuhad</td>
              <td>4</td>
              <td>Oct 1, 2022</td>
              <td><button onclick="toggleModal()">View</button></td>
            </tr>
            <tr>
              <td>Atanda Damilare</td>
              <td>Oluwafemi Seun Paul</td>
              <td>4</td>
              <td>Oct 1, 2022</td>
              <td><button onclick="toggleModal()">View</button></td>
            </tr>
            <tr>
              <td>Atanda Damilare</td>
              <td>Oni Temidayo</td>
              <td>4</td>
              <td>Oct 1, 2022</td>
              <td><button onclick="toggleModal()">View</button></td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Dashboard End -->

   <!-- Entry details -->
  <div id="detailsModal" class="details-modal">
    <div class="details-header">
      <h3>Blood Donation</h3>
      <img src="images/close.png" onclick="toggleModal()" />
    </div>
    <div class="details-body">
      <p>Donor Info:</p>
      <div class="details-content">
        <div class="details-row">
          <div class="content-item">
            <p class="detail">Date</p>
            <p class="value">11 November 2022, 14:28:21</p>
          </div>
        </div>
        <div class="details-row">
          <div class="content-item">
            <p class="detail">Donor</p>
            <p class="value">Atanda Damilare</p>
          </div>
          <div class="content-item">
            <p class="detail">Blood Type</p>
            <p class="value blood">O+</p>
          </div>
        </div>
        <div class="details-row">
          <div class="content-item">
            <p class="detail">Donor Email</p>
            <p class="value">atandadray@gmail.com</p>
          </div>
          <div class="content-item">
            <p class="detail">Donor Phone Number</p>
            <p class="value">08123456789</p>
          </div>
        </div>
        <div class="details-row">
          <div class="content-item">
            <p class="detail">Status</p>
            <p class="value verified">• Verified</p>
          </div>
          <div class="content-item">
            <p class="detail">Status</p>
            <p class="value pending">• Pending</p>
          </div>
        </div>
      </div>
    </div>
    <div class="details-body">
      <p>Patient Info:</p>
      <div class="details-content">
        <div class="details-row">
          <div class="content-item">
            <p class="detail">Patient Name</p>
            <p class="value">Agboola Fuhad</p>
          </div>
        </div>
        <div class="details-row">
          <div class="content-item">
            <p class="detail">Reason</p>
            <p class="value">
              He was thinking about Bisola while driving. He later had an
              accident and needed a lot of blood
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Entry details end -->
  
  <script src="js/script.js"></script>
</body>

</html>