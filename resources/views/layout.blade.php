<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

    <title>EAMS</title>
    <style>
    /* Sidebar styles */
    .sidebar {
        margin-top: 25px;
        padding: 0;
        width: 200px;
        -moz-box-shadow: -3px 0 5px 0 #555;
        -webkit-box-shadow: -3px 0 5px 0 #555;
        box-shadow: -3px 0 10px 0 #555;
        position: fixed;
        height: 100%;
        overflow: auto;
        left: 0;
        /* Ensures sidebar sticks to the left */
    }

    /* Sidebar links */
    .sidebar a {
        display: block;
        color: #1F2937;
        padding: 20px;
        text-decoration: none;
        font-size: 12px;
    }

    /* Active/current link */
    .sidebar a.active {
        background-color: #1D4ED8;
        color: white;
    }

    /* Links on mouse-over */
    .sidebar a:hover:not(.active) {
        background-color: #737d86;
        color: white;
    }

    /* Content styles */
    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
    }

    /* Title styling */
    h2 {
        font-size: 15px;
        /* Smaller font size for the title */
        font-weight: normal;
    }

    /* On screens that are less than 700px wide, make the sidebar into a topbar */
    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }

        .sidebar a {
            float: left;
        }

        div.content {
            margin-left: 0;
        }
    }

    /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }
    </style>
</head>

<body>
    <!-- Static header -->
    <div style="
        width: 100%;
        padding: 10px 20px;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
    ">
        <h3 style="color: blue; font-size: 15px; font-weight: bold;">Raddacon Call Center</h3>

        <div style="display: flex; align-items: center;">
            <!-- Notifications Icon -->
            <div style="position: relative; margin-right: 30px; cursor: pointer;">
                <i class="fa fa-bell" style="font-size: 24px; color: #000;"></i>
                <span style="
                    position: absolute;
                    top: -5px;
                    right: -5px;
                    background-color: red;
                    color: white;
                    font-size: 12px;
                    border-radius: 50%;
                    width: 20px;
                    height: 20px;
                    text-align: center;
                    line-height: 20px;
                ">
                    5
                </span>
            </div>

            <!-- Settings Icon -->
            <div style="margin-right: 20px; cursor: pointer;">
                <i class="fa fa-cogs" style="font-size: 20px; color: #000;"></i>
            </div>

            <!-- Profile Icon -->
            <div style="display: flex; align-items: center;">
                <img src="https://via.placeholder.com/32" alt="Profile" style="
                        width: 32px;
                        height: 32px;
                        border-radius: 50%;
                        cursor: pointer;
                    " />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <!-- Image and text -->
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- The new sidebar -->
                <div class="sidebar">
                    <!-- Dashboard Link -->
                    <a class="active" href="{{ url('/') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>

                    <!-- Employees Link -->
                    <a href="{{ url('/employee') }}">
                        <i class="fas fa-users"></i> Employees
                    </a>

                    <!-- Manage Teams Link -->
                    <a href="{{ url('/teams') }}">
                        <i class="fas fa-users-cog"></i> Manage Teams
                    </a>

                    <!-- Leave Management Link -->
                    <a href="{{ url('/leaves') }}">
                        <i class="fas fa-calendar-day"></i> Leave Management
                    </a>

                    <!-- Shift Schedule Link -->
                    <a href="{{ url('/shifts') }}">
                        <i class="fas fa-clock"></i> Shift Schedule
                    </a>

                    <!-- Reports Link -->
                    <a href="{{ url('/reports') }}">
                        <i class="fas fa-chart-line"></i> Reports
                    </a>
                </div>
            </div>

            <!-- Content Section -->
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>