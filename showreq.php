<?php 

include 'config.php';

error_reporting(0);

session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Dashboard</title>
</head>

<body>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Do<span>nor</span></h2>
        </div>
        <div class="search--notification--profile">
            <div class="search">
                <input type="text" placeholder="Search Request">
                <button><i class="ri-search-2-line"></i></button>
            </div>
            <div class="notification--profile">
                <div class="picon lock">
                    <i class="ri-lock-line"></i>
                </div>
                <div class="picon bell">
                    <i class="ri-notification-2-line"></i>
                </div>
                <div class="picon chat">
                    <i class="ri-wechat-2-line"></i>
                </div>
                <div class="picon profile">
                    <img src="profile.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="#" id="active--link">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="foodDetail.php">
                        <span class="icon icon-2"><i class="ri-calendar-2-line"></i></span>
                        <span class="sidebar--item">List your food details</span>
                    </a>
                </li>
                <li>
                    <a href="foodDetail.php">
                        <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Request</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-4"><i class="ri-search-line"></i></span>
                        <span class="sidebar--item">Search</span>
                    </a>
                </li>
                
            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-settings-3-line"></i></span>
                        <span class="sidebar--item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                    <h2 class="section--title">Dashboard</h2>
                    
                </div>
                <div class="cards">
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Request</h5>
                                <h1>15</h1>
                            </div>
                            <i class="ri-file-2-line card--icon--lg"></i>
                        </div>
                    </div>
                    <div class="card card-2">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Completed</h5>
                                <h1>11</h1>
                            </div>
                            <i class="ri-file-line card--icon--lg"></i>
                        </div>
                        
                    </div>
                    <div class="card card-3">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Pending Request</h5>
                                <h1>2</h1>
                            </div>
                            <i class="ri-file-2-line card--icon--lg"></i>
                        </div>
                        
                    </div>
                    <div class="card card-4">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Rejected Request</h5>
                                <h1>2</h1>
                            </div>
                            <i class="ri-delete-bin-line card--icon--lg "></i>
                        </div>
                        
                    </div>
                </div>
                <div class="title">
                    <h2 class="section--title">Recent Donation</h2>                    
                </div>
            </div>
            
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>DonorId</th>
                                <th>DonorName</th>
                                <th>FoodItem</th>
                                <th>FoodQty</th>
                                <th>PickupDate</th>
                                <th>MobileNO</th>
                                <th>State</th>
                                <th>PickupAddress</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php 
                             $sql = "SELECT * FROM `fooddetail`";
                             $result = mysqli_query($conn,$sql);

                             while($row = mysqli_fetch_assoc($result))
                            {
                                 echo " <tr>
                                 <th scope='row'>". $row['Did']."</th>
                                 <td>". $row['DName']."</td>
                                 <td>". $row['FItem']."</td>
                                 <td>". $row['FoodQty']."</td>
                                 <td>". $row['PDate']."</td>
                                 <td>". $row['MNo']."</td>
                                 <td>". $row['State']."</td>
                                <td>". $row['PAddress']."</td>
                                </tr>";
                            }
                            ?>
                         </tbody>

                    </table>
                </div>
                <div class="title">
                    <h2 class="section--title">Request</h2>                    
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>ReceiverId</th>
                                <th>ReceiverName</th>
                                <th>FoodQty</th>
                                <th>Description</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php 
                             $sql = "SELECT * FROM `receiver`";
                             $result = mysqli_query($conn,$sql);

                             while($row = mysqli_fetch_assoc($result))
                            {
                                 echo " <tr>
                                 <th scope='row'>". $row['RId']."</th>
                                 <td>". $row['RName']."</td>
                                 <td>". $row['FQty']."</td>
                                 <td>". $row['Description']."</td>
                                 
                                </tr>";
                            }
                            ?>
                         </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="main.js"></script>
</body>

</html>