<html>
    <head>
        <title>Academy of Technology-Hostel</title>
        <link rel="stylesheet" href="/static/css/bootstrap.css"/>
        <link rel="stylesheet" href="/static/css/style_home.css"/>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-md-10 col-lg-8 col-12 m-auto rounded p-0">
                    <img src="/static/img/boyshostel.jpg" class="w-100 img"/>
                </div>
                <div class="col-md-10 col-lg-8 col-12 m-auto p-0">
                    <p class="color_p mt-4 ml-1">
                    Hostel
                    <br>There are separate In-campus hostels for boys and girls with round-the-clock wireless internet connectivity.All the hostels have attached canteens serving good quality Indian and Continental foods.Each hostel has facility for indoor and outdoor games.All resident students are required to become members of the hostel mess.

                    
               <br> • Hygienic Kitchen & Dining Hall
               <br> • Round the clock Internet Facility
               <br> • Boys hostel can accomodate 250 students and Girls hostel can accomodate 130 students.
               <br> • Facility for all types of indoor and outdoor games
               <br> • Flooring with marble tiles
               <br> • Good quality food
                    <ul class="color_p">
                        <li>Boys's Hostel</li>
                        <li>Girls's Hostel</li>
                    </ul>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 col-md-10 col-lg-8 m-auto">
                    <div class="row">
                        <div class="col-12 col-md-6 bg-white border">
                            <p class="text-uppercase font-weight-normal m-0 mt-2 color_login">Latest Blog</p>
                            <div class="border"></div>
                            <div class="border my-3">
                                <img src="/static/img/cs1.6event.jpg" class="w-100" />
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <?php
                            //session_start();
                            if (isset($_SESSION['id'])) {
                                ?>
                            <div class="col-md-6 col-sm-3 col-4 p-0 m-auto h-25">
                                <img src="/static/img/user.jpeg" class="w-100 h-100 logo"/>
                            </div>
                            <div class="col-8 m-auto">
                                <p class="font-weight-bold h5 m-0 mt-3">Welcome, <?php echo $_SESSION['id'];
                                ?>
                                </p>
                                <button class="btn btn-block btn-success mt-3 font-weight-bold rounded">View My Profile</button>
                                <p class="color_p ml-2">Last visited on: dd/mm/yy</p>
                            </div>
                            <?php
                            }else{
                            ?>
                            <p class="text-center text-uppercase mt-2 color_login font-weight-bold">Login Here!!!</p>
                            <form method="POST" action="../registration/signin_submit">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn-block btn-success rounded">Submit</button>
                            </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/static/js/bootstrap.js"></script>
        <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="/static/js/home.js"></script>
    </body>
</html>
