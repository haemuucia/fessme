<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
     <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
      </script>
</head>
<body>
 <!-- Button trigger modal -->
<button type="button" class="" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form >
            <label for="email"> Name : </label>
            <input type="text" id="email" name="email" class="input" placeholder="name">
            <p id="BA">Please write your name same as your Payment Account</p>
            <br>
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
   <script>
        // jQuery code to trigger an alert when "Save changes" button is clicked
        $(document).ready(function() {
            $('.btn-primary').click(function() {
                alert('We will direct you to payment session! (Feature Currently Not Ready)');
                window.location.href = 'test.html';
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
</body>
</html>