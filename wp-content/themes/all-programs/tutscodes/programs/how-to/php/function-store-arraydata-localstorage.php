<?php
/*
* Function to save the array values in localstorage in PHP | Site - allprograms.tech
*/
function saveArrayToLocalStorage($items) {
	if ($items && is_array($items)) {
		foreach($items as $item) {
			$key = $item['key'];
			$value = $item['value'];
			?>
			<script type="text/javascript">
				localstorage.setItem('<?php echo $key; ?>', '<?php echo $value; ?>');	
			</script>
			<?php
		}
	}
}


// Array of items
$params = array(
	'referralCode' => 'XYZ123'
);

//Calling the function
saveArrayToLocalStorage($params);
