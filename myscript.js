 
       

$("document").ready(function(){
        var x,y,z,zillowData;
        x=document.getElementById("street");
        y=document.getElementById("city");
        z=document.getElementById("state");
    
            
     $('form').validate({
        rules: {
            street : {
                required: true
            },
            city: {
                required: true
            },
            state:{
                required: true
            }
        },
        
       
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
    
    
  $('form').submit(function(){
    var data = {
      "action": "test"
    };
    data = $('form').serialize();
     if(x.value!="" && y.value!="" && z.value!=""){

      $.ajax({
      type: "POST",
      dataType: "json",
      url: "try.php", //Relative or absolute path to response.php file
      data: data,
      success: function(data) {
          
          zillowData=data;
          
          if(data.result.code=="0"){
              var header=data.result.street+", "+data.result.city+", "+data.result.state+"-"+data.result.zipcode;
          var finalwrite="<div class='table-responsive'><table class='table table-striped' style='background-color:white'><tr><td colspan='2'>See more details for <a href="+data.result.homedetails+"class='result' target=_blank>"+header+"</a> on Zillow</td><td colspan='3'><a href='javascript:share()'><img style='float:right; height: 30px;' src='Share-on-Facebook.png'/></a></td></tr><tr><td>Property Type:</td><td style='text-align:right;'>";
        
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
        if(data.result.estimateAmount==""){
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

            finalwrite+="30 Days Overall Change:</td><td style='text-align:right;'>$"+data.result.estimateValueChange+"</td></tr>";

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
          finalwrite+="30 Days Rent Change:</td><td style='text-align:right;'>$"+data.result.restimateValueChange+"</td></tr>";
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
        else{

            finalwrite+="$"+data.result.restimateValuationRangeLow+" - $"+data.result.restimateValuationRangeHigh+"</td></tr></table>";

        }
              finalwrite+="</div>";
        
          var htmlwrite="<ul class='nav nav-tabs' role='tablist'><li role='presentation' class='active'><a href='#basic' role='tab' data-toggle='tab'>Basic Info</a></li><li role='presentation'><a href='#hiszes' role='tab' data-toggle='tab'>Historical Zestimates</a></li></ul><div class='tab-content'><div role='tabpanel' class='tab-pane active' id='basic' style='border-style: solid;     border-width: 2px;     border-color: white;box-shadow: 0px 0px 10px orange;  background-color:white; padding-left:10px; padding-right:10px; padding-top:10px; padding-bottom:5px;'>"+finalwrite+"</div>";
              htmlwrite+="<div role='tabpanel' class='tab-pane' id='hiszes' style='border-style: solid;     border-width: 2px;     border-color: white;box-shadow: 0px 0px 10px orange; background-color:white;'>";
                
          htmlwrite+="<div id='carousel-example-generic' class='carousel slide' data-ride='carousel' style='margin-right:auto;margin-left:auto;background-color: white;'><ol class='carousel-indicators'><li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li><li data-target='#carousel-example-generic' data-slide-to='1'></li><li data-target='#carousel-example-generic' data-slide-to='2'></li></ol>";

htmlwrite+="<div class='carousel-inner' role='listbox'><div class='item active'><center><img src='"+data.chart['1year'].url+"' alt='First Slide'></center><div class='carousel-caption' style='background:rgba(0,0,0,0.5);width:100%;  left: 0px; bottom:0px; text-align:left; padding-left: 15px; padding-top: 0px;'><p><h4>Historical Zestimates for the past 1 year</h4></p>"+header+"</div></div><div class='item'><center><img src='"+data.chart['5years'].url+"' alt='Second Slide'></center><div class='carousel-caption' style='background:rgba(0,0,0,0.5); width:100%;left: 0px; bottom:0px;text-align:left;  padding-left: 15px; padding-top: 0px;'><p><h4>Historical Zestimates for the past 5 years</h4></p>"+header+"</div></div><div class='item'><center><img src='"+data.chart['10years'].url+"' alt='Third slide'></center><div class='carousel-caption' style='background:rgba(0,0,0,0.5);width:100%;left: 0px; bottom:0px;text-align:left; padding-top: 0px; padding-left: 15px;'><p><h4>Historical Zestimates for the past 10 years</h4></p>"+header+"</div></div></div>";

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



