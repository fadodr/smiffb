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
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Oluwafemi Seun Paul</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Oni Temidayo</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Agboola Fuhad</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Oluwafemi Seun Paul</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Agboola Fuhad</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Oluwafemi Seun Paul</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Oni Temidayo</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Agboola Fuhad</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Oluwafemi Seun Paul</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Agboola Fuhad</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Oluwafemi Seun Paul</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Oni Temidayo</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Agboola Fuhad</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
          <tr>
            <td>Atanda Damilare</td>
            <td>Oluwafemi Seun Paul</td>
            <td>4</td>
            <td>Oct 1, 2022</td>
            <td><button>View</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Dashboard End -->
</body>

</html>