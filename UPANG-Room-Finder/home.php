<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        /* Table Styling */
        table {
            margin: 50px auto;
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: rgb(104, 195, 141);
            color: black;
        }
        
        .editbtn {
            color: white;
            background-color: rgb(12, 199, 12);
            padding: 5px 10px;
            size: 50px;
            border-radius: 10px;
            align-items: center;
            cursor: pointer;
        }

        .deletebtn {
            color: white;
            background-color: rgb(223, 13, 13);
            border-radius: 50px;
            font-size: 14px;
            padding: 5px 10px;
            align-items: center;
            cursor: pointer;
        }

        @media screen {
            
        }
        
    </style>
    <title>Home</title>
</head>
<body>
    <div class="navbar">
        <!-- Navbar items (Home, Settings, Room Request) aligned to the left -->
        <ul>
            <li><a href="home.html" style="text-decoration: underline;">
                <i class="fa fa-home" style="text-decoration: underline;"></i> Home </a></li>

            <!-- Settings list item with icon above text, and icon is clickable -->
            <li>
                <a href="settings.html">
                    <i class="fa fa-cog"></i> Settings </a>
            </li>

            <li><a href="roomrequest.html">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Room Request </a>
            </li>
        </ul>

        <!-- Logo and Home text container on the right -->
        <div class="logo-container">
            <span class="mainpage-text"> Home </span> <!-- Text next to the logo -->
            <img src="phinmalogo.png" alt="University of Pangasinan Logo" class="logo">
        </div>
    </div>

    <!-- Centered Table -->
    <table>
        <tr>
            <th>Room</th>
            <th>Status</th>
            <th>Schedule</th>
            <th>Room Equipments</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>PTC 302</td>
            <td>Available</td>
            <td>10:30 AM - 12:00 PM</td>
            <td>Projector, Whiteboard</td>
            <td><a href="#"><button class="editbtn"> Edit </button> <button class="deletebtn"> X </button> </a></td>
        </tr>
        <tr>
            <td>ITS 201</td>
            <td>Occupied</td>
            <td>10:30 AM - 12:00 PM</td>
            <td>Monitor, TV, Whiteboard</td>
            <td><a href="#"><button class="editbtn"> Edit </button> <button class="deletebtn"> X </button> </a></td>
            
        </tr>
    </table>
</body>
</html>