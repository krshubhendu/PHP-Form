
<!Doctype html>
<html>
    <head>
        <title ></title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     
        <?php include 'css/style.php'; ?>
        <?php include 'links/links.php'; ?>
    </head>
<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="img/01.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Please fill all the details carefully, This form can change your life.</p>
                        <!-- <input type="submit" name="" value="Check Form"/><br/> -->
                    </div>
                    <div class="col-md-9 register-right">
                        <!-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul> -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Employee</h3>
                                <form action="upload.php" method="POST" enctype="multipart/form-data">

                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="firstname" class="form-control" placeholder="First Name *" value=""name="firstname"     />
                                        </div>
                                        <div class="form-group">
                                            <input type="lastname" class="form-control" placeholder="Last Name *" value="" name="lastname"    />
                                        </div>

                                        <div class="form-group">
                                            <input type="birth" class="form-control" placeholder="Date of Birth / mm-dd-yyyy *" value="" name="birth"    />
                                        </div>

                                        <div class="form-group">
                                            <input type="address" class="form-control" placeholder="Address *" value="" name="address"    />
                                        </div>

                                        

                                        <div class="form-group">
                                            <input type="state" class="form-control" placeholder="State *" value="" name="state"    />
                                        </div>




                                        <div class="form-group">
                                            <label><b>Upload Resume</b></label>
                                            <input type="file" name="resume" class="form-control"    >
                                        </div>  
                                        
                                        
                                        <div class="form-group">
                                            <label><b>Upload Aadhar Card</b></label>
                                            <input type="file" name="aadhar" class="form-control"    >
                                        </div>
                                


                                        
                                       
                                        <!-- <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email"     />
                                        </div>

                                        <div class="form-group">
                                            <input type="phone" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value=""    />
                                        </div>

                                        <div class="form-group">
                                            <select name="jobpost"  class="form-control"    >

                                                <option class="hidden"  selected disabled>Post you are applying for? *</option>
                                                <option>Data Entry</option>
                                                <option>Stenographer</option>
                                                <option>Office Assistant</option>
                                                <option>MTS</option>
                                                <option>Sweeper</option>
                                                <option>No</option>
                                                <option>SCG</option>
                                                <option>Helper</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="city" class="form-control" placeholder="City *" value="" name="city"    />
                                        </div>

                                        <div class="form-group">
                                            <input type="postal" class="form-control" placeholder="Postal/Zip Code *" value="" name="postal"    />
                                        </div>

                                        <div class="form-group">
                                            <label><b>Upload Pan Card</b></label>
                                            <input type="file" name="pan" class="form-control"     >
                                        </div>

                                        
                                        <div class="from-group">
                                        <input type="submit" class="btnRegister" name="submit"  value="Register"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </body>
    </html>