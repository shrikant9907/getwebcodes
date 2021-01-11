<?php
/* 
* Store date in localstorage in PHP | Site - allprograms.tech
*/

// Suppose we need to store a referral code in localstore
$referralCode = 'XYZ123';
?>
<script type="text/javascript">
	localstorage.setItem('referralCode', '<?php echo $referralCode; ?>');	
</script>
<?php