<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Ola Cab</title>
    <style>
      .img1{
        background-image: url('1.jpg');
        height: 100vh;
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
      }
      .text1{
        font-size: 48px;
        font-weight: 700;
        color: white;
        letter-spacing: 2px;
      }
      .div2{
        margin-left: 5rem;
        border-radius: 8px;
        background-color: white;
        /*text-align: center;*/
        padding: 10px;
        font-size: 15px;
        /*float: left;*/
        /*font-style: italic;*/
        /*border:1px solid green;*/
        box-shadow: 10px 10px 10px 0px;
      }
      .btn1{
        background-color: #cddc39;
        width: 100%;
      }
       select {
    -moz-appearance:none; /* Firefox */
    -webkit-appearance:none; /* Safari and Chrome */
    appearance:none;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
      @media only screen and (max-width: 766px) {
  .img1 {
    background:inherit;

  }
  .head{
    display: none;

  }
  .div2{
    margin-left: 0;
    padding: 10px;
  }
}
    </style>
  </head>
  <body>
    <div class="img1">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fa  fa-taxi" aria-hidden="true" style="font-size: 55px;color: #cddc39;"></i><span style="font-size: 30px;">CedCab</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto p-2" style="font-size: 22px;">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">About us</a>
      <a class="nav-item nav-link" href="#">Contact us</a>
      <a class="nav-item nav-link disabled" href="#">Ongoing</a>
    </div>
  </div>
</nav>
      <div class="row container mx-auto head">
        <div class="col-md-12 mx-5 text-center pt-2">
          <h2 class="text1 fw-bold">Book a City Taxi to your destination </h2>
          <h5 style="color: white;font-size: 25px;letter-spacing: 1px;">Choose from a range of categories and prices</h5>
        </div>
      </div>
      <div class="row mx-auto">
        <div class="col-md-4 mt-2 div2">
          <div class="row">
            <div class="col-md-4">
              
            </div>
             <div class="col-md-4">
               <button type="submit"  class="btn  btn1" >CedCab</button>
             </div>
              <div class="col-md-4"></div>
          </div>
          
          <div class="text-center" style="font-size: 15px;">
            <h4 style="font-weight: 500;">Your everyday travel partner</h4>
            <h5>AC Cabs for point to point travel</h5>
          </div>
          <div style="font-size: 17px;padding: 15px;padding-top: 20px;">
            <form id="formm">
  <div class="form-group row">
    <div class="col-md-4"> <label for="exampleFormControlSelect1" >Current Location</label></div>
    <div class="col-md-8"><select class="form-control " id="ex3" name="currentlocation" required>
      <option selected disabled>---Choose---</option>
      <option value="Charbag">Charbag</option>
      <option value="Indira Nagar">Indira Nagar</option>
      <option value="BBD">BBD</option>
      <option value="Barabanki">Barabanki</option>
       <option value="Faizabad">Faizabad</option>
      <option value="Basti">Basti</option>
      <option value="Goarkhpur">Goarkhpur</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
   <div class="col-md-4"><label for="exampleFormControlSelect1">DROP</label></div>
   <div class="col-md-8"> <select class="form-control" id="ex4" name="drop">
      <option selected disabled>---Choose---</option>
      <option value="Charbag">Charbag</option>
      <option value="Indira Nagar">Indira Nagar</option>
      <option value="BBD">BBD</option>
      <option value="Barabanki">Barabanki</option>
       <option value="Faizabad">Faizabad</option>
      <option value="Basti">Basti</option>
      <option value="Goarkhpur">Goarkhpur</option>
    </select>
  </div>
  </div>
  <div class="form-group row">
    <div class="col-md-4"><label for="exampleFormControlSelect1">Cap Type</label></div>
    <div class="col-md-8"><select class="form-control" id="ex2" name="cabtype">
      <option selected disabled>---Choose----</option>
      <option>CedMicro</option>
      <option>CedMini</option>
      <option>CedRoyal</option>
      <option>CedSUV</option>
      
    </select>
  </div>
  </div>
  <div class="form-group row">
    <div class="col-md-4"><label for="exampleFormControlInput1">Luggage</label></div>
    <div class="col-md-8"><input type="number" pattern="[0-9]*" class="form-control" id="ex1" placeholder="Enter Weigth in KG" name="weight">
  </div></div>
  <button type="submit" data-toggle="modal" data-target="#exampleModal" class="btn btn1" id="bt">Calculate Fare</button>
</form>
          </div>
        </div>
        <div class="col-md-5">
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Journey Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="display">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Book Now</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script>
      $(document).ready(function(){
        $('select').on('change',function(m){

          var pvalue = $(this).data('previous');
          $('select').not(this).find('option[value = "'+pvalue+'"]').show();

          var value = $(this).val();
          $(this).data('previous',value);
          $('select').not(this).find('option[value="'+value+'"]').hide();
        })



        $('#ex1').prop('disabled',false);
        $('#ex2').change(function(){
          if ($('#ex2').val() == 'CedMicro') {
            $('#ex1').prop('readonly',true);
            $('#ex1').val('');
            $('#ex1').prop('placeholder','It is not applicable');
          }else{
           $('#ex1').prop('readonly',false);
            $('#ex1').prop('placeholder','Enter Weigth in KG');
          }
        });
        $('#bt').click(function(e){
            e.preventDefault();
            var a=$('#ex3').val();
            var b=$('#ex1').val();
            var c=$('#ex2').val();
            var d=$('#ex4').val();
            console.log(b);
            if (a == null  || c == null || d == null  || b<0) {
              // console.log('ghfgfj');
              $('#display').html('Please Fill and Correct the Information');
            }else{
            $.ajax({
                  url:'cab2.php',
                  type: "POST",
                  data:$('#formm').serialize(),
                  success: function(msg){
                      $('#display').html(msg);
                  }
                  
              });
           }
          });
        document.querySelector("input").addEventListener("keypress", function (evt) {
    if ((evt.which < 48 || evt.which > 57) && evt.which != 46)
    {
        evt.preventDefault();
    }
});
      });
        

    </script>
  </body>
</html>