<?php

    $apiKey = "rzp_test_3NcjhbmR6hdknE";
    $amount="10000";
?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" 
    data-amount= "<?php echo $amount;?>"
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="BOOND FUNDS"
    data-description="HELPING THE FUTURE"
    data-image="https://traidev.com/img/web-desgin-development.png"
    data-prefill.name="AKShat"
    data-prefill.email="akshat@gmail.com"
    data-prefill.contact="9406602302"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

