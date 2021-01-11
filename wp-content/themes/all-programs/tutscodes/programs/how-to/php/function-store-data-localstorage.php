<?php
/*
* Function to save in localstorage in PHP | Site - allprograms.tech
*/
function saveToLocalStorage($key, $value) {
	?>
	<script type="text/javascript">
		localstorage.setItem('<?php echo $key; ?>', '<?php echo $value; ?>');	
	</script>
	<?php
}

// Calling the function
saveToLocalStorage('referralCode', 'XYZ123');