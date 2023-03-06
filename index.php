<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Students' Alumni Cell | Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--FONT AWESOME--><link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="form.css">
</head>
<style>

    html, body {margin: 0; height: 100%; overflow-x: hidden;}
    form {
      padding: 20px;
      background-color: #cde7fe;
      border-radius: 2px;
      box-shadow: 0 0 10px #ccc;
      margin: auto;
      width: 1200px;
      /* align-items: center; */
      didisplay: flex;
    }
  
    label {
      display: flexbox;
      margin-bottom: 10px;
      font-size: 18px;
      margin: auto;
      padding: 0 5px ;
    }
  
    input[type="text"],
    input[type="email"] {
      padding: 10px;
      font-size: 18px;
      width: 100%;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
  
    input[type="submit"] {
      padding: 10px 20px;
      font-size: 18px;
      background-color: #4CAF50;
      color: white;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      margin-left:5%;
    }

  .header {
  padding: 20px;
  text-align: center;
  background: #1a9fcb;
  color: white;
  font-size: 15px;
  margin-bottom: 10px;
}

@media screen and (min-width: 500px) and (max-width:950px) {
  form {
    flex-direction: row;
    justify-content: space-between;
  }

  label, input, textarea {
    width: 45%;
    
  }

  textarea {
    height: 120px;
  }
}

@media screen and (min-width: 300px) and (max-width:500px) {
  form {
    flex-direction: row;
    justify-content: space-between;
  }

  label, input, textarea {
    width: 25%;
    
  }

  textarea {
    height: 120px;
  }
}

/* @media screen and (min-width: 600px) and (max-width:950px) {

    form{
        margin-right: 2rem;
    }
} */
  </style>

<div class="header">
  <h1>Suggestions for betterment </h1>
  <h1>& Improvement for the Institute</h1>
</div>
  
  <form action="process_form.php" method="post">
    <label>1. Name: <input type="text" name="name"  required></label><br>
    <label>2. Present Position & Organization (in case you are retired, Please provide previous Position held and Organization): <input type="text" name="position" rows="4" cols="50" required></label><br>
    <label>3. Email: <input type="email" name="email" rows="4" cols="50" required ></label><br>
    <label>4. Current place of residence (mention the zip code & country also): <input type="text" name="city" required></label><br>
    <label>5. You are connected with (Choose below): <br>
        a. Local Chapter at your location <br>
        b. IIT Kharagpur Alumni Foundation USA <br>
        c. IIT Kharagpur Foundation India <br>
        d. PAN IIT Alumni India <br>
        e. PAN IIT USA <br>
        f. Office of Alumni Affairs @IITKGP <br>
        <input type="text" name="connected"></label><br>
    <label>6. Contact Number (preferably WhatsApp Number, with Country Code)
      : <input type="number" name="contact"></label><br><br>
    <label>7. Your suggestion(s) for attracting top class students towards IIT-KGP in case of Indian students : <input type="text" name="suggestionStudent"></label><br>
    <label>8. Your suggestion(s) for attracting top class faculty members at IIT-KGP in case of  Indian faculty members: <input type="text" name="suggestionFaculty"></label><br>
    <label>9. Please suggest ways to celebrate the Platinum Jubilee 
      : <input type="text" name="jubilee"></label><br>
    <label>10. Your comments on Giving Back to your Alma Mater for helping to renovate  Departmental facilities: <input type="text" name="almaDep"></label><br>
    <label>11. Your comments on Giving Back to your Alma Mater for helping to renovate Institute facilities : <input type="text" name="almaIns"></label><br>
    <label>12. Your comments on Giving Back to your Alma Mater for helping to renovate Hall facilities : <input type="text" name="almaHall"></label><br>
    <label>13. Your comments on Giving Back to your Alma Mater for helping to renovate Gymkhana facilities  
      : <input type="text" name="alma_gymkhana"></label><br>
    <label>14. Your comments on Giving Back to your Alma Mater for helping to renovate  in Entrepreneurship drive: <input type="text" name="almaEntrepreneurship"></label><br>
    <label>15. Suggestion for improvement of women education and corresponding infrastructure at IIT-KGP: <input type="text" name="suggestionWomenEdu"></label><br>
    <label>16. Your Suggestion regarding improvement of Institute Ranking: <input type="text" name="InstituteRankingImprovement"></label><br>
      
        <label>
        17 Please help Office of Alumni Affairs IIT Kharagpur  with suggestions of enthusiastic Alumni who may be connected with the OAA@IITKGP, as per your thinking, for getting associated with the institute for different engagement options made available now. 
      IIT KGP Alumni <br>
      (a) Full Name-<br>
      (b) Contact No-<br>
      (c) Email ID-<br>
      (d) Designation / Previous Designation-<br>
      (e)Location -<br>
      (f) Area of interest / fascination / hobby -<br>
      (g)Probable linkage(s) with the institute for (a) Institute development, (b) Department development, (c) Campus development, (d) Hall development, (e) Gymkhana / Sports Development, (f) New Medical Infrastructure Development, (g) Building the Brand Image of IITKGP -<br>
      (h)Mention of any earlier engagements with IITKGP -:
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-4">
                    <div class="card-header">
                        <h4> Enter Alumni Details
                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">ADD MORE</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <!-- <form action="code.php" method="POST"> -->
                        
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Name</label>
                                            <input type="text" name="name1[]" class="form-control"  placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group mb-2">
                                            <label for="">Phone Number</label>
                                            <input type="text" name="phone1[]" class="form-control"  placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Email</label>
                                            <input type="text" name="email1[]" class="form-control"  placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group mb-2">
                                            <label for="">Designation</label>
                                            <input type="text" name="designation1[]" class="form-control"  placeholder="Enter Designation">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for=""><nobr>Location</nobr></label>
                                            <input type="text" name="location1[]" class="form-control"  placeholder="Enter Location">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group mb-2">
                                            <label for="">Area of interest</label>
                                            <input type="text" name="interest1[]" class="form-control"  placeholder="Enter Area of Interest">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <text>Probable linkage(s) with the institute for (a) Institute development, (b) Department development, (c) Campus development, (d) Hall development, (e) Gymkhana / Sports Development, (f) New Medical Infrastructure Development, (g) Building the Brand Image of IITKGP -
(h)Mention of any earlier engagements with IITKGP</text> 
                                            <label for="" ></label>
                                            <input type="text" style="height:20%" name="linkage1[]" class="form-control"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>

                            <div class="paste-new-forms"></div>

                            <!-- <button type="submit" name="save_multiple_data" class="btn btn-primary">Save Multiple Data</button> -->
                        <!-- </form> -->

                    </div>
                </div>
            </div>
        </div>
</label> <br><br>
    <label>
        18. Please help Office of Alumni Affairs IIT Kharagpur  with suggestions of enthusiastic Alumni who may be connected with the OAA@IITKGP, as per your thinking, for getting associated with the institute for different engagement options made available now. 
      IIT Alumni(Other Than Kgp) & (Other Philanthropic Individuals) <br>
      (a) Full Name<br>
      (b) Contact No<br>
      (c) Email ID<br>
      (d) Designation / Previous Designation<br>
      (e)Location <br>
      (f) Area of interest / fascination / hobby <br>
      (g)Probable linkage(s) with the institute for (a) Institute development, (b) Department development, (c) Campus development, (d) Hall development, (e) Gymkhana / Sports Development, (f) New Medical Infrastructure Development, (g) Building the Brand Image of IITKGP -<br>
      (h)Mention of any earlier engagements with IITKGP -:
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-4">
                    <div class="card-header">
                        <h4> Enter Alumni Details
                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">ADD MORE</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <!-- <form action="code.php" method="POST"> -->
                        
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Name</label>
                                            <input type="text" name="name1[]" class="form-control"  placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group mb-2">
                                            <label for="">Phone Number</label>
                                            <input type="text" name="phone1[]" class="form-control"  placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Email</label>
                                            <input type="text" name="email1[]" class="form-control"  placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group mb-2">
                                            <label for="">Designation</label>
                                            <input type="text" name="designation1[]" class="form-control"  placeholder="Enter Designation">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for=""><nobr>Location</nobr></label>
                                            <input type="text" name="location1[]" class="form-control"  placeholder="Enter Location">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group mb-2">
                                            <label for="">Area of interest</label>
                                            <input type="text" name="interest1[]" class="form-control"  placeholder="Enter Area of Interest">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <text>Probable linkage(s) with the institute for (a) Institute development, (b) Department development, (c) Campus development, (d) Hall development, (e) Gymkhana / Sports Development, (f) New Medical Infrastructure Development, (g) Building the Brand Image of IITKGP -
(h)Mention of any earlier engagements with IITKGP</text> 
                                            <label for="" ></label>
                                            <input type="text" style="height:20%" name="linkage1[]" class="form-control"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>

                            <div class="paste-new-forms"></div>

                            <!-- <button type="submit" name="save_multiple_data" class="btn btn-primary">Save Multiple Data</button> -->
                        <!-- </form> -->

                    </div>
                </div>
            </div>
        </div>
    </label>

    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Name</label>\
                                            <input type="text" name="name1[]" class="form-control" required placeholder="Enter Name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-8">\
                                        <div class="form-group mb-2">\
                                            <label for="">Phone Number</label>\
                                            <input type="text" name="phone1[]" class="form-control" required placeholder="Enter Phone Number">\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Email</label>\
                                            <input type="text" name="email1[]" class="form-control"  placeholder="Enter Email">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-8">\
                                        <div class="form-group mb-2">\
                                            <label for="">Designation</label>\
                                            <input type="text" name="designation1[]" class="form-control"  placeholder="Enter Designation">\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for=""><nobr>Location</nobr></label>\
                                            <input type="text" name="location1[]" class="form-control"  placeholder="Enter Location">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-8">\
                                        <div class="form-group mb-2">\
                                            <label for="">Area of interest</label>\
                                            <input type="text" name="interest1[]" class="form-control"  placeholder="Enter Area of Interest">\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="row">\
                                    <div class="col-md-12">\
                                        <div class="form-group mb-2">\
                                            <text>Probable linkage(s) with the institute for (a) Institute development, (b) Department development, (c) Campus development, (d) Hall development, (e) Gymkhana / Sports Development, (f) New Medical Infrastructure Development, (g) Building the Brand Image of IITKGP -(h)Mention of any earlier engagements with IITKGP</text>\
                                            <label for="" ></label>\
                                            <input type="text" style="height:20%" name="linkage1[]" class="form-control"  placeholder="">\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                             </div>');
            });

        });
    </script>

      


        
                   
    <input type="submit" value="Submit" style="
    width: fit-content;
    display: block;
    margin: 1rem;"
>

  </form>
  
</html>
