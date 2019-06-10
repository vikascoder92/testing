<button type="button" class="btn">Click me!</button>
<span class="text">Replace me!!</span>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajx";

$conn = new mysqli($servername, $username, $password, $dbname);
?>


<script type="text/javascript">
	$('.btn').click(function() {alert();
  	$('.text').text('loading . . .');
  
  $.ajax({
    type:"POST",
    url:"hello.php",
    data:{a:1},
    dataType:'html',
    success: function(data) {
      $('.text').html(data);
    }
    
  });
  
});
</script>

<script type="text/javascript">
	$('.delete').click(function() {alert();
  alert('hello');
 
  
});
</script>


<form id="formoid"  title="" >
    <div>
        <label class="title">First Name</label>
        <input type="text" id="name" name="name" >
    </div>
    <div>
        <label class="title">Name</label>
        <input type="text" id="name1" name="name1" >
    </div>
    <div>
        <input type="submit" id="submitButton"  name="submitButton" value="Submit">
    </div>
</form>

<ul>
<?php
	 $sql ="SELECT * FROM nameList";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $dataNmane = $row['name'];
      $dataId = $row['id'];
      $dataNmane2 = $row['name1'];
      ?>

	<p class='bye'><?php echo $dataNmane ?></p>
			<p id="hi" class='bye'><?php echo $dataNmane2 ?> <button class="delete" id="<?php echo $dataId; ?>">Detele</button></p>
		<?php } ?> 
	</ul>

<script type="text/javascript">
	$('#submitButton').click(function() {
  
 event.preventDefault();
  $.ajax({
    type:"POST",
    url:"form.php",
    data: $("#formoid").serialize(),
    dataType:'html',
    success: function(data) {
      $('ul').append('p').html(data);
     // $('p:last-child').after($('p:last-child').html(data));
    }
    
  });
  
});
</script>