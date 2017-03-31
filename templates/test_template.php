<script>


function testclick(){
//alert("test");


var sel = document.getElementById('selection');

var stringVal = document.getElementById('inputValue').value;

	if (stringVal){
		document.location='test_mvc.php?click_object='+sel.value+'&string_value='+stringVal;
	}else{
		alert("Please Input any value");
	}
}
</script>

<h1> Sorting Assignment</h1><br>

<form>
	Input String : <input id="inputValue" type="text">
	<select name="sort-method" id="selection">
		<option value="bubble">Bubble Sort</option>
		<option value="quick">Quick Sort</option>
	</select>
	<button id="buttonSubmit" type="button" onclick="testclick();" >Sort</button>
	<br>
	Sorted String :<b> <?php echo $view_data->link1_text;?> </b>
</form>
