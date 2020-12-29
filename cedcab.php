<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    
</head>
<body style="margin-right:0px;overflow-x: hidden">

    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href="#" style="color: #159cad;font-size: 55px;">CedCab</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><b>Features</b><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>Reviews</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>Contact Us</b></a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-info" type="submit">Book Now</button>
                    </li>
                </ul> 
            </div>
        </nav>
    </div>

    <div>
    <section class="bgimg">
        <div class="text-center">
            <b style="font-size:40px;padding-top:10px;">Book a Ced Cab to your destination in town</b>
        </div>
        <div class="text-center" style="color:white;font-size:30px;padding-top:10px;">Choose from a range of categories and prices</div>
        <div class="row" style="width:100%;">
            <div class="col-md-6 col-sm-6 " style="margin-left:45px;margin-bottom:30px;padding-top:20px;width:85%;background-color:#0000004a;">
                <div class="text-center" ><a href="#" class="btn btn-info ">Ced Cab</a></div>
                <div class="text-center" ><b style="font-size:30px;">Your everyday travel partner AC Cabs for point to point travel</b></div>
                <div >
                    <form method="post">
                        <label>Pick UP</label>
                        <select class="form-control" id="pickup" >
                           
                            <option>Charbagh </option>
                            <option>Indira Nagar</option>
                            <option>BBD</option>
                            <option>Barabanki</option>
                            <option>Faizabad </option>
                            <option>Basti</option>
                            <option>Gorakhpur</option>
                        </select>
                        <label>Drop</label>
                        <select class="form-control" id="drop">
                           
                            <option>Charbagh </option>
                            <option>Indira Nagar</option>
                            <option>BBD</option>
                            <option>Barabanki</option>
                            <option>Faizabad </option>
                            <option>Basti</option>
                            <option>Gorakhpur</option>
                        </select>

                        <label>Cab Type:</label>
                        <select class="form-control" id="cabtype" onchange="luggage()">
                            
                            <option>CedMini</option>
                            <option>CedMicro</option>
                            <option>CedRoyal</option>
                            <option>CedSUV</option>
                        </select>

                        <div class="form-group">
                            <label for="usr">Luggage</label>
                            <input type="text" class="form-control" placeholder="weight in kg" id="weight" >
                        </div>
                        <input type="button" value="Calculate Fare" class="btn btn-info" name="submit" id="send" style="width:100%;text-align:center;margin:2% 0 8% 0">
                       
                        <div class="alert alert-info">
                            <strong>Info!</strong><a href="#" class="alert-link" id="result">Click on button</a>.
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer ">
        <div class="row text-center">
            <div class="col-md-4 col-sm-4 text-center" style="font-size: 45px;color: white;" >
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
            <div class="col-md-4 col-sm-4 text-center" >
                <div style="font-size: 33px;color:  #00BCD4;">Ced Cab</div>
                <div style="color: #00BCD4;" >
                    <i class="fa fa-taxi" aria-hidden="true" style="font-size:20px;">Book your cab here..</i></div>
            </div>
            <div class="col-md-4 col-sm-4 text-center" style="margin-top: 20px;color: #00BCD4;">
                <h5>Copyright © 2018 | Ced Cab | All Rights Reserved</h5>
            </div>
        </div>
    </footer>  
    <div>
    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    function luggage(){
        if (document.getElementById("cabtype").value=="CedMicro"){
            document.getElementById("weight").disabled=true;
        }
        else{
            document.getElementById("weight").disabled=false; 
        }
    }

    
    
    $(document).ready(function(){
    $("#send").click(function(){
        var pickup=$('#pickup').val();
        var drop=$('#drop').val();
        var cabtype=$('#cabtype').val();
        var weight=$('#weight').val();
        if((pickup && drop)=="Charbagh"){
            alert("You can't select same current and destination location");
        }
        
        else{
        $.ajax({
        type:"POST",
        url:"post.php",
        data:{pickup:pickup,drop:drop,cabtype:cabtype,weight:weight},
        success:function(data){
            $('#result').text(data);
            // console.log(data);
        }
        });
        }
    });
    });
    
    </script>
    
</body>
</html> 