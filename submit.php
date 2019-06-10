<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<form id="formoid" action="studentFormInsert.php" title="" method="post">
    <div>
        <label class="title">First Name</label>
        <input type="text" id="name" name="name" >
    </div>
    <div>
        <label class="title">Name</label>
        <input type="text" id="name2" name="name2" >
    </div>
    <div>
        <input type="submit" id="submitButton"  name="submitButton" value="Submit">
    </div>
</form>


<script type='text/javascript'>
    $("#formoid").submit(function(event) {
      event.preventDefault();
      var $form = $( this ),
          url = $form.attr( 'action' );

      var posting = $.post( url, { name: $('#name').val(), name2: $('#name2').val() } );

      /* Alerts the results */
      posting.done(function( data ) {
        alert('success');
      });
    });
</script>