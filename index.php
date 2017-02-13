<!DOCTYPE html>

<?php 	
		include("Conf.php");
		include("core/Common.php");
		include("core/DB.php");
		include("includes/head.php");
		include("includes/header.php");
		//include("content.php");
		//include("includes/footer.php");
?>
<div class="container">
	<form action="validate.php?from=<?php echo urlencode($_SERVER["REQUEST_URI"])?>" method="POST">
		<div class="row">
			<div class="col-xs-4 sidebar">
				<div class="panel panel-primary">
					<div class="panel-heading"> 
						Prvi format pitanja
					</div>
					<div class="panel-body">
							<div class="form-group">
								<label for="pitanje" class=""> Pitanje 1 </label>
								<textarea rows="3" type="text" name="pitanje" id="pitanje" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label> Točan odgovor </label>
								<input type="text" class="form-control" name="odgovori[]">
							</div>

							<div class="form-group">
								<button type="button" class="btn btn-primary btn-md add-btn">
         							<span class="glyphicon glyphicon-plus"></span> Dodaj 
        						</button>
							</div>
							<div class="submit-btn">
								<button type="submit" class="btn btn-primary"> Spremi </button>
							</div>
					</div>

				</div>

			</div>
			<div class="col-xs-8">
				<div class="mainArea">
					
				</div>
				
			</div>
		</div>
	</form>
</div>
	
<script type="text/javascript">

$(".add-btn").on("click",function() {
	var odgovor = $("#template").html();
	$(".panel-body div:nth-last-child(3)").after(odgovor);
	$(".odg-template").fadeIn(400);
});
</script>

 <script type="text/html" id="template">
 	<div class="form-group odg-template">
		<label> Krivi odgovor </label>
		<input type="text" class="form-control" name="odgovori[]">
	</div>
 </script>
</html>