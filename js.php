
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<input type="radio" name="gender" value="male" /> male 
<input type="radio" name="gender" value="female" /> female
<input type="radio" name="gender" value="female" /> Dog



<script>
	var gender = document.getElementsByName('gender');
		alert( gender.length ); 

		alert( gender[0].value ); 


	</script>

	<html>

<title>Variables!!!</title>
<script type="text/javascript">
var one = 22;
var two = 3;
var add = one + two;
var minus = one - two;
var multiply = one * two;
var divide = one/two;
	document.write("First No: = " + one + "<br />Second No: = " + two + " <br />");
	document.write(add);
	

	alert(add)
</script>

<script type="text/javascript">
		var students = new Array("John", "Ann", "Aaron", "Edwin", "Elizabeth");
		Array.prototype.displayItems=function(){
			for (i=0;i<this.length;i++){
				document.write(this[i] + "<br />");
			}
		}	
		document.write("students array<br />");
		students.displayItems();
		document.write("<br />The number of items in students array is " + students.length + "<br />");
		document.write("<br />The SORTED students array<br />");
		students.sort();
		students.displayItems();
		document.write("<br />The REVERSED students array<br />");
		students.reverse();
		students.displayItems();
		document.write("<br />THE students array after REMOVING the LAST item<br />");
		students.pop();
		students.displayItems();
        document.write("<br />THE students array after PUSH<br />");
        students.push("New Stuff");
		students.displayItems();
	</script>
