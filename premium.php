
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="premium.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
     <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
      </script>
<?php include 'nav.php'; ?>
<section class="body">
  <div class="wrap">
    <div class="box">
      <div class="box-top">
        <img class="box-image" src="MONTHLY.png" alt="Monthly Purchase">
        <div class="title-flex">
          <h3 class="box-title">Monthly Purchase</h3>
          <p class="price">IDR. 15.000,00</p>
        </div>
        <p class="description">Unlock premium features with a monthly subscription, including the ability to post and comment at your convenience, anytime.</p>
      </div>
      <button type="button" class="button monthly" data-toggle="modal" data-target="#exampleModalCenter"> BUY NOW!  </button>
        </div>
    <div class="box">
      <div class="box-top">
        <img class="box-image" src="once.png" alt="One Time Purchase">
        <div class="title-flex">
          <h3 class="box-title">One Time Purchase!</h3>
          <p class="price">Rp. 250.000,00</p>
        </div>
        <p class="description">Purchase once and enjoy unlimited premium access. including the ability to post and comment at your convenience, anytime.</p>
      </div>
      <button type="button" class="button once" data-toggle="modal" data-target="#exampleModalCenter"> BUY NOW!  </button>
    </div> 

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Premium!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="PURCHASE">
          <label for="email"> Name : </label>
          <input type="text" id="email" name="email" class="input" placeholder=" name ">
          <p id="BA">Please write your name same as your Payment Account</p>
          
          <label for="payment">Please choose a Payment : </label>
          <select name="payment" id="payment">
              <option value="BCA">BCA</option>
              <option value="GOPAY">GOPAY</option>
              <option value="OVO">OVO</option>
              <option value="ShopeePay">ShopeePay</option>
              <option value="mandiri">Mandiri</option>
            </select>
          <br>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</section>
   <!-- Your jQuery Code Goes Here -->
   <script>
     $(document).ready(function(){
         // Handle click on BUY NOW! buttons
         $('.button.monthly').click(function(){
             alert("You've selected the Monthly Purchase option. Get ready to unlock premium features!");
         });
 
         $('.button.once').click(function(){
             alert("You've selected One Time Purchasing! Enjoy unlimited premium access!");
         });
     });

        // jQuery code to trigger an alert when "Save changes" button is clicked
        $(document).ready(function() {
            $('.btn-primary').click(function() {
                alert('We will direct you to payment session! (Feature Currently Not Ready)');
                window.location.href = 'premium.php';
            });
        });
        // Event listener for payment selection
        $('#payment').change(function() {
                var selectedPayment = $(this).val();
                if (selectedPayment === 'BCA') {
                    alert('BCA payment method selected!');
                }
                if (selectedPayment === 'GOPAY') {
                    alert('GOPAY payment method selected!');
                }
                if (selectedPayment === 'OVO') {
                    alert('OVO payment method selected!');
                }
                if (selectedPayment === 'ShopeePay') {
                    alert('Shopeepay payment method selected!');
                }
                if (selectedPayment === 'mandiri') {
                    alert('Mandiri payment method selected!');
                }
            });
</script>