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
    form {
      padding: 20px;
      background-color: #cde7fe;
      border-radius: 2px;
      box-shadow: 0 0 10px #ccc;
      margin: auto;
      width: 1200px;
      /* align-items: center; */
    }
  
    label {
      display: block;
      margin-bottom: 10px;
      font-size: 18px;
      margin: auto;
      padding: 0 150 ;
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
  </style>

<div class="header">
  <h1>Suggestions for betterment </h1>
  <h1>& Improvement for the Institute</h1>
</div>
  
  <form action="process_form.php" method="post">
    <label>1. Name: <input type="text" name="name"></label><br>
    <label>2. Present Position & Organization (in case you are retired, Please provide previous Position held and Organization): <input type="text" name="position"></label><br>
    <label>3. Email: <input type="email" name="email"></label><br>
    <label>4. Current place of residence (mention the zip code & country also): <input type="text" name="city"></label><br>
    <label>5. You are connected with : <input type="text" name="connected"></label><br>
    <label>6. Contact Number (preferably WhatsApp Number, with Country Code)
      : <input type="number" name="contact"></label><br>
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
    <label>17(a) Please help Office of Alumni Affairs IIT Kharagpur  with suggestions of enthusiastic Alumni who may be connected with the OAA@IITKGP, as per your thinking, for getting associated with the institute for different engagement options made available now. 
      IIT KGP Alumni <br>
      (a) Full Name-<br>
      (b) Contact No-<br>
      (c) Email ID-<br>
      (d) Designation / Previous Designation-<br>
      (e)Location -<br>
      (f) Area of interest / fascination / hobby -<br>
      (g)Probable linkage(s) with the institute for (a) Institute development, (b) Department development, (c) Campus development, (d) Hall development, (e) Gymkhana / Sports Development, (f) New Medical Infrastructure Development, (g) Building the Brand Image of IITKGP -<br>
      (h)Mention of any earlier engagements with IITKGP -: <input type="text" name="kgp_suggestion"></label><br>
    <label>17(b) Please help Office of Alumni Affairs IIT Kharagpur with suggestions of enthusiastic Alumni who may be connected with the OAA@IITKGP, as per your thinking, for getting associated with the institute for different engagement options made available now. 
      IIT Alumni (other than KGP) <br>
      (a) Full Name-<br>
      (b) Contact No-<br>
      (c) Email ID-<br>
      (d) Designation / Previous Designation-<br>
      (e)Location -<br>
      (f) Area of interest / fascination / hobby -<br>
      (g)Probable linkage(s) with the institute for (a) Institute development, (b) Department development, (c) Campus development, (d) Hall development, (e) Gymkhana / Sports Development, (f) New Medical Infrastructure Development, (g) Building the Brand Image of IITKGP -
      <br>(h)Mention of any earlier engagements with IITKGP -
      : <input type="text" name="nonkgp_suggestion"></label><br>
      <label>17(c) Please help Office of Alumni Affairs IIT Kharagpur  with suggestions of enthusiastic Alumni who may be connected with the OAA@IITKGP, as per your thinking, for getting associated with the institute for different engagement options made available now. <br>
        Other Philanthropic individuals <br>
        (a) Full Name-<br>
        (b) Contact No-<br>
        (c) Email ID-<br>
        (d) Designation / Previous Designation-<br>
        (e)Location -<br>
        (f) Area of interest / fascination / hobby -<br>
        (g)Probable linkage(s) with the institute for (a) Institute development, (b) Department development, (c) Campus development, (d) Hall development, (e) Gymkhana / Sports Development, (f) New Medical Infrastructure Development, (g) Building the Brand Image of IITKGP -<br>
        (h)Mention of any earlier engagements with IITKGP -<br>
        : <input type="text" name="Philanthropic"></label><br>
      


        
                   
    <input type="submit" value="Submit">

  </form>
  
</html>