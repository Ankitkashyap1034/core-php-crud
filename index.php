<?php
require 'includes/conn.php';
$sql = "SELECT * FROM users";
$queryExc = mysqli_query($conn, $sql);
// while ($userData = mysqli_fetch_assoc($queryExc)) {
//       echo "<pre>";
//       print_r($userData);
//       echo "</pre>";
// }
?>
<!DOCTYPE html>
<html>

<head>
      <title>Admin</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
            html {
                  scroll-behavior: smooth;
            }

            aside {
                  width: 30%;
                  padding-left: 15px;
                  margin-left: 15px;
                  float: right;
                  font-style: italic;
                  background-color: lightgray;
            }

            .bg-black {
                  background: linear-gradient(109.6deg, rgb(36, 45, 57) 11.2%, rgb(16, 37, 60) 51.2%, rgb(0, 0, 0) 98.6%);

            }

            .text-white {
                  color: white;
            }

            .text-black {
                  color: black;
            }

            .bg-primary-orange {
                  background-color: #fec503;
            }

            .primary-orange {
                  color: #fec503;
            }

            .org-btn {
                  border: 1px solid #fec503;
                  color: #fec503;
            }

            .org-btn:hover {
                  background-color: #fec503;
                  color: white;
            }

            .light-grey {
                  color: #6c757d;
            }

            .bg-light-grey {
                  background-color: #6c757d:
            }

            .social-buttons-circle-dark-grey {
                  background: #1a1d20;
            }

            /* img css */

            /* .testimonals-container img{
  width:300px;
  
} */

            /* hero */
            .center {
                  text-align: center;
            }

            /*  Card hover */
            .move-up:hover {
                  background-color: #fec503;
                  color: white;
                  transition: all .5s;
                  transform: translateY(-10px);
            }

            .ng-mrg-t {
                  margin-top: -50px;
            }


            /* Footer code */
            .foot {
                  /*   position: relative; */
                  left: 0;
                  bottom: 0;
                  width: 100%;
                  background-color: #1a1d20;
                  color: white;
                  text-align: center;
                  top: 75px;
            }

            a {
                  color: #6c757d;
            }

            a:hover {
                  color: #fec503;
                  text-decoration: none;
            }

            ::selection {
                  background: #fec503;
                  text-shadow: none;
            }

            .footer-column {
                  text-align: center;
            }

            .nav-link {
                  padding: 0.1rem 0;
            }

            span.nav-link {
                  color: #6c757d;
            }

            span.nav-link:hover {
                  color: #fec503;
            }

            span.footer-title {
                  font-size: 14px;
                  font-weight: 700;
                  color: #fff;
                  text-transform: uppercase;
            }

            .fas {
                  margin-right: 0.5rem;
            }

            footer {
                  padding: 2rem 0;
                  background-color: #212529;

            }


            ul.social-buttons {
                  margin-bottom: 0;
            }

            ul.social-buttons li a:active,
            ul.social-buttons li a:focus,
            ul.social-buttons li a:hover {
                  background-color: #fec503;
            }

            ul.social-buttons li a {
                  font-size: 20px;
                  line-height: 40px;
                  display: block;
                  width: 40px;
                  height: 40px;
                  -webkit-transition: all 0.3s;
                  -moz-transition: all 0.3s;
                  transition: all 0.3s;
                  color: #fff;
                  border-radius: 100%;
                  outline: 0;
                  background-color: #1a1d20;
            }

            footer .quick-links {
                  font-size: 90%;
                  line-height: 40px;
                  margin-bottom: 0;
                  text-transform: none;
                  font-family: Montserrat, "Helvetica Neue", Helvetica, Arial, sans-serif;
            }


            .copyright {
                  color: white;
            }

            .fa-ellipsis-h {
                  color: white;
                  padding: 2rem 0;
            }
      </style>
</head>

<body>

      <div class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="#hero-sec">Home</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#testi">Testimonials</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                          </a>
                                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li>
                                                      <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                          </ul>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#featured">Featured</a>
                                    </li>
                              </ul>

                        </div>
                  </div>
            </nav>
      </div>

      <div class="hero-container" id="hero-sec">
            <div class="container-fluid ">
                  <div class="row d-flex">
                        <div class="col align-middle">
                              <div class="px-2 py-2">
                                    <img src="https://img.freepik.com/free-vector/happy-freelancer-with-computer-home-young-man-sitting-armchair-using-laptop-chatting-online-smiling-vector-illustration-distance-work-online-learning-freelance_74855-8401.jpg?w=900&t=st=1667037491~exp=1667038091~hmac=7c71ea8afc8f3cc8065c5ccc05d105e3c8a7b76f0133016cb210a7882dc19611" class="img-fluid" alt="...">
                              </div>
                        </div>
                        <div class="col">
                              <div class="px-5 py-5 mt-5">
                                    <div class="px-2 py-2 align-middle">
                                          <h4>Get all your needs Here</h4>
                                          <p> An online learning and teaching marketplace with over 204000 courses and 54 million students. Learn programming, marketing, data science and more.</p>
                                    </div>
                                    <div class="px-2 py-2">
                                          <button type="button" class="btn btn-outline-primary">Checkout Our Courses</button>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- main container -->
            <div class="main-container">
                  <div class="container-fluid">
                        ...
                  </div>
            </div>

            <!--  Card container  -->
            <div class="card-container bg-black" id="team">
                  <div class="container-fluid px-3 py-3">
                        <div class="row center mx-4 my-4 text-white">
                              <h2>Meet Our Expert</h2>
                              <p>Highly professional team</p>
                        </div>
                        <div class="row mb-5">
                              <?php while ($userData = mysqli_fetch_assoc($queryExc)) { ?>
                                    <div class="col">
                                          <div class="card">
                                                <img src="https://img.freepik.com/free-vector/work-time-concept-illustration_114360-1474.jpg?w=740&t=st=1667038053~exp=1667038653~hmac=7f51a4d7c9f7dc9e0e3a6d53d45f381fc455e5424bcc36a0bedca65db24487e7" class="card-img-top" style="height:300px" alt="...">
                                                <div class="card-body">
                                                      <h5 class="card-title"><?php echo $userData['name']; ?></h5>
                                                      <p class="card-text"><?php echo $userData['email']; ?></p>
                                                      <a href="includes/controllers/HomeController.php?id=<?php echo $userData['id'] ?>" class="btn org-btn"><i class="fa fa-trash-o" style="font-size:48px;color:red"></i></a>
                                                </div>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                  </div>
            </div>


            <!-- <div class="aside-container">
  <div class="container-fluid">
 <aside>
<p>The Epcot center is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
</aside>
</div>
</div> -->


            <!--  testimonals container  -->

            <!-- footer -->
            <div class="footer-container foot">
                  <div class="container-fluid">
                        <footer>
                              <div class="">
                                    <div class="row">
                                          <div class="col-md-4 footer-column">
                                                <ul class="nav flex-column">
                                                      <li class="nav-item">
                                                            <span class="footer-title">Product</span>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#">Product 1</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#">Product 2</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#">Plans & Prices</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#">Frequently asked questions</a>
                                                      </li>
                                                </ul>
                                          </div>
                                          <div class="col-md-4 footer-column">
                                                <ul class="nav flex-column">
                                                      <li class="nav-item">
                                                            <span class="footer-title">Company</span>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#">About us</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#">Job postings</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#">News and articles</a>
                                                      </li>
                                                </ul>
                                          </div>
                                          <div class="col-md-4 footer-column">
                                                <ul class="nav flex-column">
                                                      <li class="nav-item">
                                                            <span class="footer-title">Contact & Support</span>
                                                      </li>
                                                      <li class="nav-item">
                                                            <span class="nav-link"><i class="fas fa-phone"></i>+47 45 80 80 80</span>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#"><i class="fas fa-comments"></i>Live chat</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#"><i class="fas fa-envelope"></i>Contact us</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#"><i class="fas fa-star"></i>Give feedback</a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>

                                    <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>

                                    <div class="row text-center">
                                          <div class="col-md-4 box">
                                                <span class="copyright quick-links">Copyright &copy; Your Website <script>
                                                            document.write(new Date().getFullYear())
                                                      </script>
                                                </span>
                                          </div>
                                          <div class="col-md-4 box">
                                                <ul class="list-inline social-buttons">
                                                      <li class="list-inline-item">
                                                            <a href="#">
                                                                  <i class="fab fa-twitter"></i>
                                                            </a>
                                                      </li>
                                                      <li class="list-inline-item">
                                                            <a href="#">
                                                                  <i class="fab fa-facebook-f"></i>
                                                            </a>
                                                      </li>
                                                      <li class="list-inline-item">
                                                            <a href="#">
                                                                  <i class="fab fa-linkedin-in"></i>
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                          <div class="col-md-4 box">
                                                <ul class="list-inline quick-links">
                                                      <li class="list-inline-item">
                                                            <a href="#">Privacy Policy</a>
                                                      </li>
                                                      <li class="list-inline-item">
                                                            <a href="#">Terms of Use</a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                              </div>
                  </div>
                  </footer>
            </div>
      </div>
</body>

</html>