<!DOCTYPE html>
<html>
  <head>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
     
    <link rel="stylesheet" href="mystyle.css">
          <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1">

   </head>

  <body>
        <div id="fb-root"></div>
    <div class="container" >
      <h2>Search Your Property Here</h2>
      <br>
      <br>
      <form class="form-inline" id="form" name="form" role="form" method="get" action="" novalidate="novalidate">
        <div class="form-group m">
          <label for="SA">Street Address*:</label>
          <input type="text" class="form-control" id="SA" name="SA" placeholder="Address">
          </div>&nbsp;&nbsp;
        <div class="form-group m">
          <label for="city">City*:</label>
          <input type="text" class="form-control" name="City" id="City" placeholder="City">       
          </div>&nbsp;&nbsp;
        <div class="form-group m">
        <label>State*: </label>
            <select name="state" id="state" class="form-control">
            
            <option selected value=""></option>
            <option value="AL" <?php if(isset($_POST['submit']) && $_POST['state'] == 'AL') echo ' selected="selected"'; ?>>AL</option>
            <option value="AR" <?php if(isset($_POST['submit']) && $_POST['state'] == 'AR') echo ' selected="selected"'; ?>>AR</option>
            <option value="AZ" <?php if(isset($_POST['submit']) && $_POST['state'] == 'AZ') echo ' selected="selected"'; ?>>AZ</option>
            <option value="CA" <?php if(isset($_POST['submit']) && $_POST['state'] == 'CA') echo ' selected="selected"'; ?>>CA</option>
            <option value="CO" <?php if(isset($_POST['submit']) && $_POST['state'] == 'CO') echo ' selected="selected"'; ?>>CO</option>
            <option value="CT" <?php if(isset($_POST['submit']) && $_POST['state'] == 'CT') echo ' selected="selected"'; ?>>CT</option>
            <option value="DC" <?php if(isset($_POST['submit']) && $_POST['state'] == 'DC') echo ' selected="selected"'; ?>>DC</option>
            <option value="DE" <?php if(isset($_POST['submit']) && $_POST['state'] == 'DE') echo ' selected="selected"'; ?>>DE</option>
            <option value="FL" <?php if(isset($_POST['submit']) && $_POST['state'] == 'FL') echo ' selected="selected"'; ?>>FL</option>
            <option value="GA" <?php if(isset($_POST['submit']) && $_POST['state'] == 'GA') echo ' selected="selected"'; ?>>GA</option>
            <option value="HI" <?php if(isset($_POST['submit']) && $_POST['state'] == 'HI') echo ' selected="selected"'; ?>>HI</option>
            <option value="IA" <?php if(isset($_POST['submit']) && $_POST['state'] == 'IA') echo ' selected="selected"'; ?>>IA</option>
            <option value="ID" <?php if(isset($_POST['submit']) && $_POST['state'] == 'ID') echo ' selected="selected"'; ?>>ID</option>
            <option value="IL" <?php if(isset($_POST['submit']) && $_POST['state'] == 'IL') echo ' selected="selected"'; ?>>IL</option>
            <option value="IN" <?php if(isset($_POST['submit']) && $_POST['state'] == 'IN') echo ' selected="selected"'; ?>>IN</option>
            <option value="KS" <?php if(isset($_POST['submit']) && $_POST['state'] == 'KS') echo ' selected="selected"'; ?>>KS</option>
            <option value="KY" <?php if(isset($_POST['submit']) && $_POST['state'] == 'KY') echo ' selected="selected"'; ?>>KY</option>
            <option value="LA" <?php if(isset($_POST['submit']) && $_POST['state'] == 'LA') echo ' selected="selected"'; ?>>LA</option>
            <option value="MA" <?php if(isset($_POST['submit']) && $_POST['state'] == 'MA') echo ' selected="selected"'; ?>>MA</option>
            <option value="MD" <?php if(isset($_POST['submit']) && $_POST['state'] == 'MD') echo ' selected="selected"'; ?>>MD</option>
            <option value="ME" <?php if(isset($_POST['submit']) && $_POST['state'] == 'ME') echo ' selected="selected"'; ?>>ME</option>
            <option value="MI" <?php if(isset($_POST['submit']) && $_POST['state'] == 'MI') echo ' selected="selected"'; ?>>MI</option>
            <option value="MN" <?php if(isset($_POST['submit']) && $_POST['state'] == 'MN') echo ' selected="selected"'; ?>>MN</option>
            <option value="MO" <?php if(isset($_POST['submit']) && $_POST['state'] == 'MO') echo ' selected="selected"'; ?>>MO</option>
            <option value="MS" <?php if(isset($_POST['submit']) && $_POST['state'] == 'MS') echo ' selected="selected"'; ?>>MS</option>
            <option value="MT" <?php if(isset($_POST['submit']) && $_POST['state'] == 'MT') echo ' selected="selected"'; ?>>MT</option>
            <option value="NC" <?php if(isset($_POST['submit']) && $_POST['state'] == 'NC') echo ' selected="selected"'; ?>>NC</option>
            <option value="ND" <?php if(isset($_POST['submit']) && $_POST['state'] == 'ND') echo ' selected="selected"'; ?>>ND</option>
            <option value="NE" <?php if(isset($_POST['submit']) && $_POST['state'] == 'NE') echo ' selected="selected"'; ?>>NE</option>
            <option value="NH" <?php if(isset($_POST['submit']) && $_POST['state'] == 'NH') echo ' selected="selected"'; ?>>NH</option>
            <option value="NJ" <?php if(isset($_POST['submit']) && $_POST['state'] == 'NJ') echo ' selected="selected"'; ?>>NJ</option>
            <option value="NM" <?php if(isset($_POST['submit']) && $_POST['state'] == 'NM') echo ' selected="selected"'; ?>>NM</option>
            <option value="NV" <?php if(isset($_POST['submit']) && $_POST['state'] == 'NV') echo ' selected="selected"'; ?>>NV</option>
            <option value="NY" <?php if(isset($_POST['submit']) && $_POST['state'] == 'NY') echo ' selected="selected"'; ?>>NY</option>
            <option value="OH" <?php if(isset($_POST['submit']) && $_POST['state'] == 'OH') echo ' selected="selected"'; ?>>OH</option>
            <option value="OK" <?php if(isset($_POST['submit']) && $_POST['state'] == 'OK') echo ' selected="selected"'; ?>>OK</option>
            <option value="OR" <?php if(isset($_POST['submit']) && $_POST['state'] == 'OR') echo ' selected="selected"'; ?>>OR</option>
            <option value="PA" <?php if(isset($_POST['submit']) && $_POST['state'] == 'PA') echo ' selected="selected"'; ?>>PA</option>
            <option value="RI" <?php if(isset($_POST['submit']) && $_POST['state'] == 'RI') echo ' selected="selected"'; ?>>RI</option>
            <option value="SC" <?php if(isset($_POST['submit']) && $_POST['state'] == 'SC') echo ' selected="selected"'; ?>>SC</option>
            <option value="SD" <?php if(isset($_POST['submit']) && $_POST['state'] == 'SD') echo ' selected="selected"'; ?>>SD</option>
            <option value="TN" <?php if(isset($_POST['submit']) && $_POST['state'] == 'TN') echo ' selected="selected"'; ?>>TN</option>
            <option value="TX" <?php if(isset($_POST['submit']) && $_POST['state'] == 'TX') echo ' selected="selected"'; ?>>TX</option>
            <option value="UT" <?php if(isset($_POST['submit']) && $_POST['state'] == 'UT') echo ' selected="selected"'; ?>>UT</option>
            <option value="VA" <?php if(isset($_POST['submit']) && $_POST['state'] == 'VA') echo ' selected="selected"'; ?>>VA</option>
            <option value="VT" <?php if(isset($_POST['submit']) && $_POST['state'] == 'VT') echo ' selected="selected"'; ?>>VT</option>
            <option value="WA" <?php if(isset($_POST['submit']) && $_POST['state'] == 'WA') echo ' selected="selected"'; ?>>WA</option>
            <option value="WI" <?php if(isset($_POST['submit']) && $_POST['state'] == 'WI') echo ' selected="selected"'; ?>>WI</option>
            <option value="WV" <?php if(isset($_POST['submit']) && $_POST['state'] == 'WV') echo ' selected="selected"'; ?>>WV</option>
            <option value="WY" <?php if(isset($_POST['submit']) && $_POST['state'] == 'WY') echo ' selected="selected"'; ?>>WY</option>
            </select>
      </div>
        <input type="submit" name="submit" value="Submit" id="b1" class="btn btn-default"/>
       <a href="http://www.zillow.com">
          <img src="http://www.zillow.com/widgets/GetVersionedResource.htm?path=/static/logos/Zillowlogo_150x40_rounded.gif" align="right" width="120" height="40" alt="Zillow Real Estate Search" align="right"/>
        </a>
        <br>
        <br>
        <hr style="weight:300%; color:white;">
      </form>
      </div>
    <div class="the-return" >
  
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="http://momentjs.com/downloads/moment.js"></script>
    <script>
     $('form').validate({
        rules: {
            SA: "required",
            City: "required",
            state:"required"
        },
       
      
       highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
            },
        
       unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
      errorElement: 'span',
      errorClass: 'help-block',
       errorLabelContainer: '.errors', 
      errorPlacement: function(error, element) {
      if(element.parent('.input-group').length) {
          error.insertAfter(element.parent());
            } 
      else {
          error.insertAfter(element);
            }
        }
    });
    
 $("document").ready(function(){
      var x=document.getElementById('SA');
     var y=document.getElementById('City');
     var z=document.getElementById('state');

  $('form').submit(function(){
    var data = {
      "action": "test"
            };
    data = $('form').serialize();
     if(x.value!="" && y.value!="" && z.value!=""){

      $.ajax({
      type: "GET",
      dataType: "json",
      url: "http://anushiladeyhw8-env.elasticbeanstalk.com/", //Relative or absolute path to response.php file
      data: data,
      success: function(data) {
          
          zillowData=data;
          
          if(data.result.code=="0"){
              var header=data.result.street+", "+data.result.city+", "+data.result.state+"-"+data.result.zipcode;
          var finalwrite="<div class='table-responsive' style='width:95% ; background-color:white; margin-left: auto; margin-right:auto; border-style: solid;     border-width: 2px;     border-color: white;box-shadow: 0px 0px 10px orange;  background-color:white; padding-left:10px; padding-right:10px; padding-top:10px; padding-bottom:5px;'><table class='table table-striped' style='background-color:white'><tr><td colspan='2'>See more details for <a href='"+data.result.homedetails+"'target=_blank>"+header+"</a> on Zillow</td><td colspan='3'><a href='javascript:share()'><img style='float:right; height: 30px;' src='Share-on-Facebook.png'/></a></td></tr><tr><td>Property Type:</td><td style='text-align:right;'>";
        
        if(data.result.useCode==""){
            finalwrite+="N/A</td><td>Last Sold Price:</td><td style='text-align:right;'>";
        }
        else{
            finalwrite+=data.result.useCode+"</td><td>Last Sold Price:</td><td style='text-align:right;'>";
        }
        if(data.result.lastSoldPrice=="" || data.result.lastSoldPrice=="0.00"){
            finalwrite+="N/A</td></tr>";
        }
        else{
            finalwrite+="$"+data.result.lastSoldPrice+"</td></tr>";
        }
        finalwrite+="<tr><td>Year Built:</td><td style='text-align:right;'>";
        if(data.result.yearBuilt==""){
            finalwrite+="N/A</td><td>Last Sold Date:</td><td style='text-align:right;'>";
        }
        else{
            finalwrite+=data.result.yearBuilt+"</td><td>Last Sold Date:</td><td style='text-align:right;'>";

        }
        if(data.result.lastSoldDate=="" || data.result.lastSoldDate=="01-Jan-1970"){
            finalwrite+="N/A</td></tr>";
        }
        else{
            finalwrite+=data.result.lastSoldDate+"</td></tr>";
        }

        finalwrite+= "<tr><td>Lot Size:</td><td style='text-align:right;'>";
        if(data.result.lotSizeSqFt==0){
            finalwrite+="N/A</td><td>Zestimate <sup>&reg</sup> Property Estimate as of "+data.result.estimateLastUpdate+":</td><td style='text-align:right;'>";
       }
        else{
        
            finalwrite+=data.result.lotSizeSqFt+" sq. ft.</td><td>Zestimate <sup>&reg</sup> Property Estimate as of "+data.result.estimateLastUpdate+":</td><td style='text-align:right;'>";
        }
        if(data.result.estimateAmount=="0.00"){
            finalwrite+="N/A</td></tr>";
        }
        else{
            finalwrite+="$"+data.result.estimateAmount+"</td></tr>";
        }

        finalwrite+="<tr><td>Finished Area:</td><td style='text-align:right;'>";
        if(data.result.finishedSqFt==0){
             
             finalwrite+= "N/A</td><td>";
        }
        else{
            finalwrite+=data.result.finishedSqFt+" sq. ft.</td><td>";
        }
        if(data.result.estimateValueChange==""){
            finalwrite+="30 Days Overall Change:</td><td style='text-align:right;'>N/A</td></tr>";

        }
        else if(data.result.estimateValueChange=="0.00"){

            finalwrite+="30 Days Overall Change:</td><td style='text-align:right;'>N/A</td></tr>";

        }
        else if(data.result.estimateValueChangeSign=="-"){
            finalwrite+="30 Days Overall Change:</td><td style='text-align:right;'><img src='"+data.result.imgn+"'> $"+data.result.estimateValueChange+"</td></tr>";
        }
        else
        {
            finalwrite+="30 Days Overall Change:</td><td style='text-align:right;'><img src='"+data.result.imgp+"'> $"+data.result.estimateValueChange+"</td></tr>";
        }
        finalwrite+="<tr><td>Bathrooms:</td><td style='text-align:right;'>";
        if(data.result.bathrooms==""){
            finalwrite+="N/A</td><td>All Time Property Range:</td><td style='text-align:right;'>";
        }  
        else{
            
            finalwrite+=data.result.bathrooms+"</td><td>All Time Property Range:</td><td style='text-align:right;'>";

        }
        if(data.result.estimateValuationRangeLow=="" && data.result.estimateValuationRangeHigh==""){
            finalwrite+="N/A</td></tr>";
        }
        else if(data.result.estimateValuationRangeLow=="0.00" && data.result.estimateValuationRangeHigh=="0.00"){
            finalwrite+="N/A</td></tr>";
        }
        else{
            finalwrite+="$"+data.result.estimateValuationRangeLow+" - $"+data.result.estimateValuationRangeHigh+"</td></tr>";
        }
        finalwrite+="<tr><td>Bedrooms:</td><td style='text-align:right;'>";
        if(data.result.bedrooms==""){
            finalwrite+="N/A</td><td>Rent Zestimate <sup>&reg</sup> Rent Valuation as of "+data.result.restimateLastUpdate+":</td><td style='text-align:right;'>";
            
        }
        else{
            finalwrite+=data.result.bedrooms+"</td><td>Rent Zestimate <sup>&reg</sup> Rent Valuation as of "+data.result.restimateLastUpdate+":</td><td style='text-align:right;'>";

          }
        if(data.result.restimateAmount==""){
            finalwrite+="N/A</td></tr>";
        }
         else if(data.result.restimateAmount=="0.00"){
            finalwrite+="N/A</td></tr>";
        }
        else{
            finalwrite+="$"+data.result.restimateAmount+"</td></tr>";
        }
        finalwrite+="<tr><td>Tax Assessment Year:</td><td style='text-align:right;'>";
        if(data.result.taxAssessmentYear==""){
            finalwrite+="N/A</td><td>";
        } 
        else{
           finalwrite+=data.result.taxAssessmentYear+"</td><td>";

        }
        if(data.result.restimateValueChange==""){
            finalwrite+="30 Days Rent Change:</td><td style='text-align:right;'>N/A</td></tr>";
        }
        else if(data.result.restimateValueChange=="0.00"){
          finalwrite+="30 Days Rent Change:</td><td style='text-align:right;'>N/A</td></tr>";
        }
        else if(data.result.restimateValueChangeSign=="-"){
          finalwrite+="30 Days Rent Change:</td><td style='text-align:right;'><img src='"+data.result.imgn+"'> $"+data.result.restimateValueChange+"</td></tr>";
        }
        else{
          finalwrite+="30 Days Rent Change:</td><td style='text-align:right;'><img src='"+data.result.imgp+"'> $"+data.result.restimateValueChange+"</td></tr>";

        }
        finalwrite+="<tr><td>Tax Assessment:</td><td style='text-align:right;'>";
        if(data.result.taxAssessment==0){
            finalwrite+="N/A</td><td>";
        }
        else{
            finalwrite+="$"+data.result.taxAssessment+"</td><td>";
        }
        finalwrite+="All Time Rent Change:</td><td style='text-align:right;'>";
        if(data.result.restimateValuationRangeLow=="" && data.result.restimateValuationRangeHigh=="")
        {
            finalwrite+="N/A</td></tr></table>";

        }
        else if(data.result.restimateValuationRangeLow=="0.00" && data.result.restimateValuationRangeHigh=="0.00")
        {
            finalwrite+="N/A</td></tr></table>";

        }
        else{

            finalwrite+="$"+data.result.restimateValuationRangeLow+" - $"+data.result.restimateValuationRangeHigh+"</td></tr></table>";

        }
              finalwrite+="</div>";
        
          var htmlwrite="<ul class='nav nav-tabs' role='tablist'style='width:95%;margin-left: auto; margin-right: auto;'><li role='presentation' class='active'><a href='#basic' role='tab' data-toggle='tab'>Basic Info</a></li><li role='presentation'><a href='#hiszes' role='tab' data-toggle='tab'>Historical Zestimates</a></li></ul><div class='tab-content'><div role='tabpanel' class='tab-pane active' id='basic' style='margin-left:auto; margin-right:auto '>"+finalwrite+"</div>";
              htmlwrite+="<div role='tabpanel' class='tab-pane' id='hiszes'>";
                
          htmlwrite+="<div id='carousel-example-generic' class='carousel slide' data-ride='carousel' style='width:95%; margin-left:auto; margin-right: auto; background-color: white; border: 1px solid white; box-shadow: 0px 0px 10px orange;'><ol class='carousel-indicators'><li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li><li data-target='#carousel-example-generic' data-slide-to='1'></li><li data-target='#carousel-example-generic' data-slide-to='2'></li></ol>";

htmlwrite+="<div class='carousel-inner' role='listbox'><div class='item active'><img src='"+data.chart['1year'].url+"' alt='First Slide' class='carousel-img'><div class='carousel-caption' style='background:rgba(0,0,0,0.5);width:100%;  left: 0px; bottom:0px; text-align:left; padding-left: 15px; padding-top: 0px;'><p><h4>Historical Zestimates for the past 1 year</h4></p>"+header+"</div></div><div class='item'><img class='carousel-img' src='"+data.chart['5years'].url+"' alt='Second Slide'><div class='carousel-caption' style='background:rgba(0,0,0,0.5); width:100%;left: 0px; bottom:0px;text-align:left;  padding-left: 15px; padding-top: 0px;'><p><h4>Historical Zestimates for the past 5 years</h4></p>"+header+"</div></div><div class='item'><img src='"+data.chart['10years'].url+"' alt='Third slide' class='carousel-img'><div class='carousel-caption' style='background:rgba(0,0,0,0.5);width:100%;left: 0px; bottom:0px;text-align:left; padding-top: 0px; padding-left: 15px;'><p><h4>Historical Zestimates for the past 10 years</h4></p>"+header+"</div></div></div>";

htmlwrite+="<a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span><span class='sr-only'>Previous</span></a><a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span><span class='sr-only'>Next</span></a></div>";
      
              htmlwrite+="</div></div>" ;
              htmlwrite+="<br><div id='nomatch'><b>&copy Zillow, Inc., 2006-2014. Use is subject to <a href='http://www.zillow.com/corp/Terms.htm'>Terms of Use</a><br><a href='http://www.zillow.com/zestimate/'>What's a Zestimate?</a></b></div>";

              
              $(".the-return").html(
             htmlwrite
        );
           
        }
          else{
   var errormsg="<p class='notfound'>No exact match found-- Verify that the given address is correct.</p><br><div id='nomatch'><b>&copy Zillow, Inc., 2006-2014. Use is subject to <a href='http://www.zillow.com/corp/Terms.htm'>Terms of Use</a><br><a href='http://www.zillow.com/zestimate/'>What's a Zestimate?</a></b></div>";
                     
               $(".the-return").html(
             errormsg
        );
          }
    

             
           
        
      },
          

      
        
    
    error: function(a,b,c) {
        
     var errormsg="<p class='notfound'>No exact match found-- Verify that the given address is correct.</p><br><div id='nomatch'><b>&copy Zillow, Inc., 2006-2014. Use is subject to <a href='http://www.zillow.com/corp/Terms.htm'>Terms of Use</a><br><a href='http://www.zillow.com/zestimate/'>What's a Zestimate?</a></b></div>";
              
               $(".the-return").html(
             errormsg
        );
  
}
    });
    
     }
    return false;
  });
});
        
         
         window.fbAsyncInit = function() {
             FB.init({appId: "1493041847643162", status: true, cookie: true});
         }   
        
      
        function share(){
            if(zillowData.result.estimateValueChange < 0)
                zillowValueChange = "-$"+zillowData.result.estimateValueChange;
            else zillowValueChange = "$"+zillowData.result.estimateValueChange;
            var obj = {
                method: 'feed',
                link: zillowData.result.homedetails,
                picture: zillowData.chart['1year'].url,
                name: zillowData.result.street+", "+zillowData.result.city+", "+zillowData.result.state+"-"+zillowData.result.zipcode,
                caption: 'Property Information from Zillow.com',
                description: 'Last Sold Price:$'+zillowData.result.lastSoldPrice+', 30 Days Overall Change:'+zillowValueChange
            };
           FB.ui(obj, function(response){
                if(response && !response.error_code) 
                    alert("Posted Successfully")
                else 
                    alert("Post Unsuccessful");
            });
        }
        
           
   // Load the SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = '1506380096277826';
    js.src = "//connect.facebook.net/en_US/all.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



    </script>
  </body>
</html>
