<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="/static/css/bootstrap.css"/>
        <link rel="stylesheet" href="/static/css/style_Myprofile.css"/>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12 col-md-10 col-lg-8 rounded-top bg-white m-auto">
                    <div class="row">
                        <div class="col-sm-4 col-md-3 col-12 p-0 pt-3">
                            <div class="col-sm-12 col-6 m-auto h-25">
                                <img src="/static/img/user.jpeg" class="w-100 h-100 logo"/>
                            </div>
                            <div class="col-sm-12 col-8 m-auto pt-3">
                                <button class="btn btn-success btn-block">Change Photo</button>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-9 col-12 mt-3">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputName">Full Name</label>
                                    <input type="name" class="form-control" id="exampleInputName" name="name" aria-describedby="nameHelp" placeholder="Enter Full Name">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Department</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="dept">
                                            <option>CSE</option>
                                            <option>ECE</option>
                                            <option>EE</option>
                                            <option>ME</option>
                                            <option>IT</option>
                                            <option>AEIE</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Year</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="year">
                                            <option>1st year</option>
                                            <option>2nd year</option>
                                            <option>3rd year</option>
                                            <option>4th year</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhonenumber1">Contact Number</label>
                                    <input type="text" class="form-control" id="exampleInputPhonenumber1" name="number" placeholder="Please enter your contact number" >
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="room_no">Room Number</label>
                                        <input type="text" class="form-control" id="room_no">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="hostel">Hostel</label>
                                        <select id="hostel" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>Boys's Hostel</option>
                                            <option>Girl's Hostel</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="blood_grp">Blood Group</label>
                                        <select id="blood_grp" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                            <option>B-</option>
                                            <option>B+</option>
                                            <option>A-</option>
                                            <option>A+</option>
                                            <option>O-</option>
                                            <option>O+</option>                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhonenumber1">Resident Number</label>
                                    <input type="text" class="form-control" id="exampleInputPhonenumber1" name="resident_number" placeholder="Please enter your contact number" >
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>