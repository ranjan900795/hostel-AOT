<html>
    <head>
        <title>Hostel Registration</title>
        <link rel="stylesheet" href="/static/css/bootstrap.css"/>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row my-3">
                <div class="col-12 col-md-10 col-lg-8 rounded bg-white m-auto">
                    <p class="text-center mt-2 text-warning">Please fill this form to become a part of hostel family....</p>
                    <form method="POST"  id="register_form">
                        <div class="form-group">
                            <label for="exampleInputName">Full Name</label>
                            <input type="name" class="form-control" id="exampleInputName" name="name" aria-describedby="nameHelp" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
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
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Year</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="year">
                                <option>1st year</option>
                                <option>2nd year</option>
                                <option>3rd year</option>
                                <option>4th year</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="pass"placeholder="Password">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="confpass" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhonenumber1">Contact Number</label>
                            <input type="text" class="form-control" id="exampleInputPhonenumber1" name="number" placeholder="Please enter your contact number" >
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <small  class="form-text text-muted mb-2">
                                By clicking submit you are ensuring the provided information is correct at your best knowledge.
                            </small>
                        <button type="submit" id="submit" class="btn btn-block rounded btn-danger"><span class=" font-weight-bold ">Submit</span></button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/static/js/bootstrap.js"></script>
        <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="/static/js/register.js"></script>
    </body>
</html>