<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        #sidebarCollapse {
            width: 40px;
            height: 40px;
            background: #f5f5f5;
        }

        #sidebarCollapse span {
            width: 80%;
            height: 2px;
            margin: 0 auto;
            display: block;
            background: #555;
            transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
        }

        #sidebarCollapse span:first-of-type {
            /* rotate first one */
            transform: rotate(45deg) translate(2px, 2px);
        }

        #sidebarCollapse span:nth-of-type(2) {
            /* second one is not visible */
            opacity: 0;
        }

        #sidebarCollapse span:last-of-type {
            /* rotate third one */
            transform: rotate(-45deg) translate(1px, -1px);
        }

        #sidebarCollapse.active span {
            /* no rotation */
            transform: none;
            /* all bars are visible */
            opacity: 1;
            margin: 5px auto;
        }

        .wrapper {
            display: flex;
            align-items: stretch;
            perspective: 1500px;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #7386D5;
            color: #fff;
            transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
            transform-origin: center left;
            /* Set the transformed position of sidebar to center left side. */
        }

        #sidebar.active {
            margin-left: -250px;
            transform: rotateY(100deg);
            /* Rotate sidebar vertically by 100 degrees. */
        }

         #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }

        @media (max-width: 768px) {

        /* Reversing the behavior of the sidebar: 
        it'll be rotated vertically and off canvas by default, 
        collapsing in on toggle button click with removal of 
        the vertical rotation.   */
        #sidebar {
            margin-left: -250px;
            transform: rotateY(100deg);
        }

        #sidebar.active {
            margin-left: 0;
            transform: none;
        }

        /* Reversing the behavior of the bars: 
        Removing the rotation from the first,
        last bars and reappear the second bar on default state, 
        and giving them a vertical margin */
        #sidebarCollapse span:first-of-type,
        #sidebarCollapse span:nth-of-type(2),
        #sidebarCollapse span:last-of-type {
            transform: none;
            opacity: 1;
            margin: 5px auto;
        }

        /* Removing the vertical margin and make the first and last bars rotate again when the sidebar is open, hiding the second bar */
        #sidebarCollapse.active span {
            margin: 0 auto;
        }

        #sidebarCollapse.active span:first-of-type {
            transform: rotate(45deg) translate(2px, 2px);
        }

        #sidebarCollapse.active span:nth-of-type(2) {
            opacity: 0;
        }

        #sidebarCollapse.active span:last-of-type {
            transform: rotate(-45deg) translate(1px, -1px);
        }
    }
    </style>
</head>

<body>
    <div class="wrapper">

        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <h3>Collapsible Sidebar
            </div>
            <!-- Sidebar Links -->
            <ul class="list-unstyled components">
                    <p>Welcome</p>
                    <li class="active">
                        <a href="<?= base_url('admin/users/index')?>">Home</a>
                    </li>   
                    <li>
                        <a href="<?= base_url('admin/users/user')?>">List User</a>
                    </li>
            </ul>
        </nav>

        <div id="content">
            <button type="button" id="sidebarCollapse" class="navbar-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div>
                <div class="container mt-5">
                    <h2>Home </h2>
                    <h2>Tugas Tampilan Admin Aviana</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <div class="line"></div>

                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <div class="line"></div>

                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <div class="line"></div>

                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
            </div>
        </div>
    </div>



        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('#listtable').DataTable();
            });
        </script>
        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>
</body>

</html>