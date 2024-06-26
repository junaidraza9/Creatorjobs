<?php include_once("header.php");
include_once("function.php");
?>
<style>body {
	margin: 0;
	
  background-color: ;
}

.submit-area {
	padding: 30px;
	margin-top: 50px;
	border-radius: 10px;
	box-shadow: 5px 5px gray;
  color: white;
  background-color: royalblue;
}

#account-area {
	margin-top: 5%;
}

.deposit {
	background-color: slateblue;
}

.withdraw {
	background-color: lightsalmon;
}

.balance {
	background-color: tomato;
}

.status {
	margin: 0 20px;
	color: white;
	padding: 20px;
	border-radius: 10px;
}
</style>
<div id="account-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="deposit status">
                        <h5>Deposit</h5>
                        <h2>$ <span id="current-deposit"><?php echo $blance;?></span></h2>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <div class="withdraw status">
                        <h5>Withdraw</h5>
                        <h2>$ <span id="current-withdraw">00</span></h2>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <div class="balance status">
                        <h5>Balance</h5>
                        <h2>$ <span id="current-balance"><?php echo $blance;?></span></h2>
                    </div>
                 </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="submit-area">
                        <h4>Deposit Amount</h4>
                        <input id="deposit-amount" type="text" class="form-control" placeholder="Enter deposit amount"><br>
                        <button id="deposit-btn" class="btn btn-warning">Deposit</button>
                    </div>
                </div>
                
               <!-- <div class="col-lg-6">
                    <div class="submit-area">
                        <h4>Withdraw Amount</h4>
                        <input id="withdraw-amount" type="text" class="form-control" placeholder="Enter withdraw amount"><br>
                        <button id="withdraw-btn" class="btn btn-success">Withdraw</button>
                    </div>
                </div>-->
            </div>
        </div>
    </div>

    <script>
        
        //deposit button event handler
        const deposit_btn = document.getElementById('deposit-btn');
        deposit_btn.addEventListener('click', function(){

            const depositStringToInt = getInputNumb("deposit-amount");

            location.href="korapay?amount="+depositStringToInt+"";

        })

         //withdraw button event handler
         const withdraw_btn = document.getElementById('withdraw-btn');
         withdraw_btn.addEventListener('click', function(){
            const withdrawNumb = getInputNumb("withdraw-amount");

            updateSpanTest("current-withdraw", withdrawNumb);
            updateSpanTest("current-balance", -1 * withdrawNumb);
            //setting up the input field blank when clicked
            document.getElementById('withdraw-amount').value = "";
        })

        //function to parse string input to int
        function getInputNumb(idName){
            const amount = document.getElementById(idName).value;
            const amountNumber = parseFloat(amount);
            return amountNumber;
        }

        function updateSpanTest(idName, addedNumber){
            //x1.1 updating balance the same way
            const current = document.getElementById(idName).innerText;
            const currentStringToInt = parseFloat(current);

            const total = currentStringToInt + addedNumber;

            //x1.2 setting this value in balance
            document.getElementById(idName).innerText = total;
        }
    </script>

<?php include_once("footer.php");?>