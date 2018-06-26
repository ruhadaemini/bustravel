<script type="text/javascript">
function validate(){
	if (document.forma.q_emri.value == '') {
		document.getElementById('message').innerHTML=" *Shkruaj emrin e qytetit!"; 
		return false;
	}
}
</script>

<?php include 'header.php' ?>
<?php 
include 'dbconnect.php'; 
	if(isset($_POST['q_id']) && isset($_POST['q_emri'])){
		$q_id=$_POST['q_id'];
		$q_emri=$_POST['q_emri'];
		$query=mysql_query("UPDATE qytetet set q_emri='$q_emri' where q_id='$q_id'");
		if($query){
			header('location:readqytetet.php');
		}
	}
	else{
	
		$q_id=$_GET['q_id'];
		$query3=mysql_fetch_array(mysql_query("SELECT * from qytetet where q_id='$q_id'"));
?>
	<form id="forma" name="forma" action="editqyteti.php" method="POST" id="forma" onSubmit="return validate();">
		<label> Qyteti  : </label>
		<input type="hidden" name="q_id" value="<?php echo $query3['q_id']; ?>" />
		<input type="text" id="demo" name="q_emri" value="<?php echo $query3['q_emri']; ?>" onblur="validate()" /> <span id="message" style="color:red"></span>
		<br />
		<br />
		<input type="submit" name="submit" value="Update" id="submit" />
	</form>
<?php
	}
?>	
