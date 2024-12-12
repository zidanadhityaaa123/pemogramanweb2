
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* Sidebar Styles */
      #sidebar {
        height: 100vh;
        width: 250px;
        position: fixed;
        top: 0;
        left: -250px;
        background-color: #343a40;
        color: white;
        transition: left 0.3s ease;
      }
      #sidebar.active {
        left: 0;
      }
      #sidebar a {
        color: white;
        padding: 15px;
        text-decoration: none;
        display: block;
      }
      #sidebar a:hover {
        background-color: #575d63;
      }

      /* Center only the navbar title */
      .navbar-center {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-grow: 1; /* Allow it to grow to take up available space */
      }

      /* Main content styles */
      main {
        margin-left: 250px; /* Make space for sidebar */
        padding: 20px;
      }

      .section {
        margin-bottom: 30px;
      }

      .card {
        border: none;
      }
    </style>
  </head>
  <body>
    <!-- Navbar with Menu Icon -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <!-- Left aligned menu and icon -->
        <a class="navbar-brand" href="#">MENU 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
          </svg>
        </a>
        
        <!-- Centered "TOKO BUKU ONLINE" title -->
        <div class="navbar-center">
          <a class="navbar-brand" href="#">TOKO BUKU ONLINE</a>
        </div>

        <!-- Navbar toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- Sidebar -->
    <div id="sidebar">
      <a href="#">Dashboard</a>
      <a href="#">Data Buku</a>
      <a href="#">Transaksi</a>
      <a href="#">Pelanggan</a>
    </div>

    <!-- Main Content -->
    <main>
      <div class="container-fluid">
        
        <!-- Title Section -->
        <div class="section">
          <h1 class="mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
            <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z"/>
            <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z"/>
          </svg>
          Selamat Datang Di Toko Buku Online</h1>
        </div>

         <!-- Total Transaction Section -->
         <div class="section">
          <div class="card bg-light">
            <div class="card-body">
              <h5 class="card-title">TOTAL TRANSAKSI</h5>
              <p class="card-text">150 Transaksi</p>
              <td>
                 <button class="btn btn-sm btn-primary">Update</button>
              </td>
              <td>
                 <button class="btn btn-sm btn-danger">Hapus</button>
              </td>
            </div>
          </div>
        </div>

        <!-- Revenue Section -->
        <div class="section">
          <div class="card bg-light">
            <div class="card-body">
              <h5 class="card-title">JUMLAH PENDAPATAN</h5>
              <p class="card-text">Rp. 12.000.000</p>
              <td>
                 <button class="btn btn-sm btn-primary">Update</button>
              </td>
              <td>
                 <button class="btn btn-sm btn-danger">Hapus</button>
              </td>
            </div>
          </div>
        </div>
    </main>

    <script>
      // Get sidebar element
      const sidebar = document.getElementById('sidebar');
      const navbarBrand = document.querySelector('.navbar-brand');

      // Event listener for menu icon to open sidebar
      navbarBrand.addEventListener('click', function(event) {
        // Prevent the click from propagating to the document
        event.stopPropagation();

        // Toggle sidebar visibility
        sidebar.classList.toggle('active');
      });

      // Event listener to close the sidebar when clicking outside of it
      document.addEventListener('click', function(event) {
        if (!sidebar.contains(event.target) && !navbarBrand.contains(event.target)) {
          // Close the sidebar if the click is outside the sidebar and menu icon
          sidebar.classList.remove('active');
        }
      });

      // Prevent click from closing sidebar if clicked inside the sidebar
      sidebar.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent the event from propagating to document
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0p7X7mJ6Sx5d4fV4n6ca5FZ6YniE4+b7hI5g9uIuyHfF4/s5" crossorigin="anonymous"></script>
  </body>
</html>
