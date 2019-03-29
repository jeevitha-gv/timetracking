<?php
require_once "header.php";
require_once "dbconnect.php";
require_once "functions.php"
?>
<!DOCTYPE html>
<html lang="en"> 
<head> 
<meta charset="utf-8">
    <title>Employee</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<meta name="description" content="Twitter Bootstrap Basic Tab Based Navigation Example">
<link href="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap2.2.css" rel="stylesheet"> 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   label {
    display: block;
    font: 1.3rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .40rem 0;
}

.note {
    font-size: .80em;
}

body {
    margin: 5px;
    background:#ECF0F1;
}

/* Tab Navigation */
.nav-tabs {
    margin: 0;
    padding: 0;
    border: 0;

}
.tab-pane {
    background: #ffff;
    box-shadow: 0 0 4px rgba(0,0,0,.4);
    border-radius: 0;
    text-align:left;
    padding: 10px;
    height:5% ;
     width:65%;
     
}
.modal-content
{
    width:130%;
}

</style>
</head>
<body>
    <?php
  if($_POST)
  {
    employee();
  }
  ?>  
      
    <form action="" method="POST">
    <div class="col-md-12">
    <div>
<div class="container-fluid">
  <h4 style="color:#a3a19b;"><a href="dashboard.php">Dashboard</a> : Employees</h4>
  
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5>Employees</h5></div>
   <div style="float: right;margin-top: -50px;">
    <button type="button" class="btn btn-success" data-toggle="modal" style="background-color:#00C084" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Add Employee</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Employee</h4>
        </div>

        <div class="modal-body">
       <div class="form-group" style="width: 85%">
      <label for="email">Email Address</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
        <div class="container">
  <ul style="width: 50%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
    <li><a data-toggle="tab" href="#details">Details</a></li>
       <!-- <li><a data-toggle="tab" href="#billing">Billing</a></li> -->
        <li><a data-toggle="tab" href="#advanced">Advanced</a></li>
         <!-- <li><a data-toggle="tab" href="#others">Others</a></li> -->
  </ul>
  <div class="tab-content">
    <div id="basic" class="tab-pane fade in active">
        <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Employeecode</h6></label>
        <input class="form-control" id="ex1" type="text" name="employeecode" disabled>
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>Firstname</h6></label>
        <input class="form-control" id="ex2" type="text" name="firstname">
      </div>
      <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Middlename</h6></label>
        <input class="form-control" id="ex3" type="text" name="middlename">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Lastname</h6></label>
        <input class="form-control" id="lname" type="text" name="lastname">
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>Password</h6></label>
        <input class="form-control" id="pwd" type="password" name="password">
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>VerifyPassword</h6></label>
        <input class="form-control" id="vpwd" type="password" name="vpassword">
      </div>
  </div>

 <div class="form-group row">
        <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Role</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="role">
        <option value="Employees">Employees</option>
        <option vallue="Project Manager">Project Manager</option>
        <option vallue="Client Manager">Client Manager</option>
        <option vallue="Super Admin">Super Admin</option>
      </select>
    </div>
    <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Department</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="department">
        <option>Default Department</option>
        <option value="Engineer">Engineer</option>
        <option value="Sales">Sales</option>
        <option value="Front-end">Front-End Developer</option>
        <option value="Back-end">Back-End Developer</option>
        <option value="Full-Stack">Full-Stack Developer</option>
        <option value="Admin">Admin</option>
        
      </select>
    </div>
    <div class="col-xs-2">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Location</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="location">
        <option>Default Location</option>
        <option value="Delhi">Delhi</option>
        <option value="Chennai">Chennai</option>
        <option value="Banglore">Banglore</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Manali">Manali</option>
        <option value="Assam">Assam</option>
        <option value="Jammu">Jammu</option>
        
      </select>
    </div>
   
</div>
  </div>

<div id="details" class="tab-pane fade">
        <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Address1</h6></label>
        <input class="form-control" id="ex1" type="text" name="address1">
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>Address2</h6></label>
        <input class="form-control" id="ex2" type="text" name="address2">
      </div>

      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>City</h6></label>
        <input class="form-control" id="ex2" type="text" name="city">
      </div>
  </div>
   <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>State</h6></label>
        <input class="form-control" id="ex1" type="text" name="state">
      </div>
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Country</h6></label>
  <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="counrty">
    <option value="AF">Afghanistan</option>
    <option value="AX">Åland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia, Plurinational State of</option>
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, the Democratic Republic of the</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Côte d'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curaçao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and McDonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Réunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthélemy</option>
    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin (French part)</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten (Dutch part)</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela, Bolivarian Republic of</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.S.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
      </select>
    </div>
      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>Zip code</h6></label>
        <input class="form-control" id="ex2" type="text" name="zipcode">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Phone No.1</h6></label>
        <input class="form-control" id="ex1" type="text" name="phone1">
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>Phone No.2</h6></label>
        <input class="form-control" id="ex2" type="text" name="phone2">
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>Fax</h6></label>
        <input class="form-control" id="ex2" type="text" name="fax">
      </div>
  </div>
  <div class="form-group row">
      
  </div>
</div>

  <div id="advanced" class="tab-pane fade">
      <div class="form-group row">
 

    <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Employee Manager</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="manager">
          <option></option>
           <?php
    $sql = "SELECT * from employee";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{ ?>
          <option value="<?php echo $row['firstname'];?>"><?php echo $row['firstname'];?></option>
<?php } } else { echo "0 results"; } ?>
      </select>
        
    </div>
  
  
  </div>
  </div>
</div>
</div>

      <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Employee</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>


<div class="container-fluid">
  <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" id="myTable">
    <thead>
      <tr>
        <th>Employee Code</th>
        <th>Name</th>
        <th>Email</th>
        <th>Location</th>
        <th>Department</th>
        <th>Action</th>
        
        
      </tr>
    </thead>
<?php
    $sql = "SELECT eno,firstname,email,location,department from employee";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>  
   <tbody>
      <tr>
        <td><?php echo $row['eno'];?></td>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['location'];?></td>
        <td><?php echo $row['department'];?></td>
        

        <td>   
    <?php echo "<a class='btn btn-danger' onclick=\"return confirm('Delete this record?')\" href=\"employee.php?eno=".$row['eno']."\"><span class='glyphicon glyphicon-trash'></span></a>" ?>
     </td>

    </tr>  
<?php } } else { echo "0 results"; } ?>
       </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>

<?php
     $eno=$_GET['eno'];
     $sql = "DELETE FROM employee WHERE eno=".$eno;   
    if (mysqli_query($con, $sql)) {
       header("Location: employee.php");
    } else {
       // echo "Error deleting record: " . mysqli_error($con);
    } 
  
?>
<script>
    $('a.delete').on('click', function() {
    var choice = confirm('Do you really want to delete this record?');
    if(choice === true) {
        return true;
    }
    return false;
});
</script>