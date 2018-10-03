<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" media="screen" href="responsive.css" />
	<script type="text/javascript" src="validate.js">	
	</script>
	<style type="text/css">
		label{
                     display: block;
                    text-align: left;
                    margin: 10px 0px;
                  }
	</style>
</head>
<body>
	<div class="row">
		
		<div class="col-12" align="center">
			<h1>ABC Resturant</h1>
		</div>
		
		
	</div>
	<style type="text/css">
		
	</style>
	
<div class="row">
	
        
        <div class="field">
		<form method="post" id="form">
				<div class="form-group">
  					<label for="item_type">Select list:</label>
  					<select class="form-control list" id="item_type">
    					<option></option>
    					<option>Tea</option>
    					<option>Coffee</option>
    					<option>Samosa</option>
              				<option>Cake</option>
  					</select>
				</div>
				<div class="form-group">
					<label for="quantityId">
						Quantity:	
					</label>
					<input type="text" name="quantity" class="form-control quantity" id="quantityId">
				</div>
				<div class="form-group">
					<label for="totalId">TotalAmount:</label>
					<textarea class="form-control" type="text" name="amount" id="amount"></textarea>
				</div>
				<button type="button" id="button" class="btn btn-default">Submit</button>
				
		</form>
		<div class="col-4" id="error">
		
		 </div>
	</div>
        
	

	
</div>

</body>
</html>