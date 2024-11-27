<?php include 'header.php'; ?>
<link href="assets/css/style.css" rel="stylesheet">
<style>
        /* Dashboard container styling */
        .dashboard-container {
            text-align: center;
            margin: 0 auto;
            padding: 50px 20px;
            max-width: 800px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Dashboard heading */
        .dashboard-container h1 {
            color: #5a67d8;
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Dashboard subtitle */
        .dashboard-container p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 30px;
        }

        /* Dashboard links section */
        .dashboard-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        /* Buttons in the dashboard */
        .dashboard-links .btn {
            background-color: #5a67d8;
            color: white;
            font-size: 1em;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
        }

        /* Hover effect for buttons */
        .dashboard-links .btn:hover {
            background-color: #434190;
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        /* Logout button styling */
        .dashboard-links .logout-btn {
            background-color: #e53e3e;
        }

        .dashboard-links .logout-btn:hover {
            background-color: #c53030;
        }
    </style>
<div class="container mt-5">
    <h2 class="mb-4">Dashboard</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Role</h5>
                    <p class="card-text">You are logged in as <strong><?php echo $_SESSION['role']; ?></strong>.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Permissions</h5>
                    <p class="card-text">
                        <?php 
                        if ($_SESSION['role'] == 'Admin') {
                            echo "You have full access to the system.";
                        } elseif ($_SESSION['role'] == 'Moderator') {
                            echo "You can moderate content.";
                        } else {
                            echo "You have limited access.";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
