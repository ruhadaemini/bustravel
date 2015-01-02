<script type="text/javascript">
function validate(){
	if (document.forma.a_emri.value == '') {
		document.getElementById('message').innerHTML=" *Shkruaj emrin e agjensionit!"; 
		return false;
	}
}
</script>

<?php include 'header.php' ?>
<?php 
include 'dbconnect.php'; 
	if(isset($_POST['a_id']) && isset($_POST['a_emri']) && isset($_POST['a_pershkrimi']) ){
		$a_id=$_POST['a_id'];
		$a_emri=$_POST['a_emri'];
		$a_pershkrimi=$_POST['a_pershkrimi'];
		$query=mysql_query("UPDATE agjensionet set a_emri='$a_emri', a_pershkrimi='$a_pershkrimi' where a_id='$a_id'");
		if($query){
			header('location:readagjensionet.php');
		}
	}
	else{
		$a_id=$_GET['a_id'];
		$query3=mysql_fetch_array(mysql_query("SELECT * from agjensionet where a_id='$a_id'"));
?>
	<form id="forma" name="forma" action="editagjensionet.php" method="POST" id="forma" onSubmit="return validate();">
		<label> Emri i Agjensionit : </label>
		<input type="hidden" name="a_id" value="<?php echo $query3['a_id']; ?>" />
		<input type="text" id="demo" name="a_emri" value="<?php echo $query3['a_emri']; ?>" onblur="validate()" /> <span id="message" style="color:red"></span>
		<br />
		<label> Pershkrimi i Agjensionit : </label>
		<input type="text" id="demo" name="a_pershkrimi" value="<?php echo $query3['a_pershkrimi']; ?>" onblur="validate()" /> <span id="message" style="color:red"></span>
		<br />
		<input type="submit" name="submit" value="Edito" id="submit" />
	</form>
<?php
	}
?>	
