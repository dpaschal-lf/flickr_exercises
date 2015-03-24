<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Flickr Search</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<style>
		#search-form {
			width: 300px;
		}
	</style>
	<script>

        //make variables to hold our key, base url that represents our flickr query WITHOUT function specific information (like flickr.photos.search)
        



		//jquery invoke code when our document is ready

			//define a click handler for our search button
                //define a url / variables for your flickr.photos.search url call.  It should include the method and the text paremeters, with appropriate values from our form to fulfill the necessary data
				//define an array, photos, to hold our photo information

				//indicate on our web page that we are in the process of loading the data.  This can be text in our search results

				//initiate an ajax call
                    //set appropriate values for our ajax call, including the url, dataType, and crossDomain
					//define our success handler.  
						//set our photos variable to the appropriate information from the json.  If you need to, console.log it out to see which variable contains the necessary information

					//define our error handler.  
						//console log out the response variable, and indicate we had an error
	</script>

</head>

<body>
	<div id="search-form">
		<div class="panel panel-default panel-primary">
			<div class="panel-heading">Search Flickr</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="input-group input-group-lg">
						<span class="input-group-addon glyphicon glyphicon-search"></span>
						<input id="search" type="text" class="form-control" placeholder="Search" name="search" />
					</div>
				</div>
				<button id="search-btn" class="btn btn-lrg btn-default pull-right">Search</button>
			</div>
		</div>
	</div>
	<div id="photo-list">
	</div>
</body>

</html>