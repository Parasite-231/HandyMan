<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS SCRIPTS/admin_panel/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-building-house'></i>
            <span class="logo_name">HANDYMAN</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Admin Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="orderlist.php" target="_blank">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Order list</span>
                </a>
            </li>
            <li>
                <a href="customerlist.php" target="_blank">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Customer List</span>
                </a>
            </li>
            <li>
                <a href="workerlist.php" target="_blank">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Worker List</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Admin Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">Muktadir Mazumder</span>
            </div>
        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Complete Services</div>
                        <div class="number">12,876</div>

                    </div>
                    <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Service Ongoing</div>
                        <div class="number">722</div>
                    </div>
                    <i class='bx bxs-cart-add cart two'></i>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Revenue</div>
                        <div class="number">৳ 8,221,235</div>
                    </div>
                    <i class='bx bxs-cart-download cart four'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Profit</div>
                        <div class="number">৳ 453,876</div>
                    </div>
                    <i class='bx bx-cart cart three'></i>
                </div>
            </div>

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Recent Services</div>
                    <div class="sales-details">
                        <ul class="details">
                            <li class="topic">Date</li>
                            <li><a href="#">08 Aug 2021</a></li>
                            <li><a href="#">08 Aug 2021</a></li>
                            <li><a href="#">08 Aug 2021</a></li>
                            <li><a href="#">08 Aug 2021</a></li>
                            <li><a href="#">08 Aug 2021</a></li>
                            <li><a href="#">08 Aug 2021</a></li>
                            <li><a href="#">08 Aug 2021</a></li>
                            <li><a href="#">08 Aug 2021</a></li>
                            <li><a href="#">08 Aug 2021</a></li>
                        </ul>

                        <ul class="details">
                            <li class="topic">Customer</li>
                            <li><a href="#">Fayeez Abrar Taha</a></li>
                            <li><a href="#">Abrar Chowdhury</a></li>
                            <li><a href="#">MD Maheen Hoque</a></li>
                            <li><a href="#">MD Mehessum Rahman</a></li>
                            <li><a href="#">Serjatul Yeaken Pragon</a></li>
                            <li><a href="#">MD Nihan Anam</a></li>
                            <li><a href="#">Asif Mosaddek Khan</a></li>
                            <li><a href="#">MD Sadman Sakib</a></li>
                            <li><a href="#">Samin Yeasir Islam</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Worker</li>
                            <li><a href="#">Muntasir Mahmud</a></li>
                            <li><a href="#">Sadat Tonmoy</a></li>
                            <li><a href="#">Junayed Zoha</a></li>
                            <li><a href="#">Thamidur Toha</a></li>
                            <li><a href="#">Rohan Hossain</a></li>
                            <li><a href="#">Akash Chowdhury</a></li>
                            <li><a href="#">Arif Akanto</a></li>
                            <li><a href="#">Hasib Dhrubo</a></li>
                            <li><a href="#">Maruf Hossain</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Status</li>
                            <li><a href="#">Ongoing</a></li>
                            <li><a href="#">Pending</a></li>
                            <li><a href="#">Completed</a></li>
                            <li><a href="#">Completed</a></li>
                            <li><a href="#">Pending</a></li>
                            <li><a href="#">Ongoing</a></li>
                            <li><a href="#">Completed</a></li>
                            <li><a href="#">Pending</a></li>
                            <li><a href="#">Completed</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Payment</li>
                            <li><a href="#"> ৳720.00</a></li>
                            <li><a href="#"> ৳2000.00</a></li>
                            <li><a href="#"> ৳2255.00</a></li>
                            <li><a href="#"> ৳1700.00</a></li>
                            <li><a href="#"> ৳560.00</a></li>
                            <li><a href="#"> ৳250.95</a></li>
                            <li><a href="#"> ৳673.33</a></li>
                            <li><a href="#"> ৳230.53</a></li>
                            <li><a href="#"> ৳460.52</a></li>
                        </ul>
                    </div>
                    <div class="button">
                        <a href="#">See All</a>
                    </div>
                </div>


                <div class="top-sales box">
                    <div class="title">Top Rated Workers</div>
                    <ul class="top-sales-details">
                        <li>
                            <a href="#">
                                <span class="product">Farhan Ishraq</span>
                            </a>
                            <span class="price">4.93</span>
                        </li>
                        <li>
                            <a href="#">

                                <span class="product">Meherab Muhurta</span>
                            </a>
                            <span class="price">4.91</span>
                        </li>
                        <li>
                            <a href="#">

                                <span class="product">Anan Shahriar</span>
                            </a>
                            <span class="price">4.90</span>
                        </li>
                        <li>
                            <a href="#">

                                <span class="product">Almas Adnan</span>
                            </a>
                            <span class="price">4.88</span>
                        </li>
                        <li>
                            <a href="#">

                                <span class="product">Shoumik Hossain</span>
                            </a>
                            <span class="price">4.88</span>
                        </li>
                        <li>
                            <a href="#">

                                <span class="product">Rezaul Noyon</span>
                            </a>
                            <span class="price">4.87</span>
                        <li>
                            <a href="#">

                                <span class="product">Zoha Hossain</span>
                            </a>
                            <span class="price">4.83</span>
                        </li>
                        <li>
                            <a href="#">
                                <span class="product">Golam Rabbani</span>
                            </a>
                            <span class="price">4.81</span>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
    </section>



</body>

</html>