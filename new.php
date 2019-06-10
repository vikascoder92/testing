<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<?php
		$bool = false;
		$num = 3 + 4;
		$str = "A string here";
?>

<script type="text/javascript">
var bool = "<?php echo $bool ?>"; 
var num = <?php echo $num ?>; 
var str_num = "<?php echo $num ?>"; 

var str = "<?php echo $str ?>"; 

alert(bool);
alert(num);
alert(str_num);
alert(str);
</script>

