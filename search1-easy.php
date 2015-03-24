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
        //make a variable, key, that holds your flickr key
		//make a variable, base_url, that represents your base flickr query, absent any method specific information.  It should include keys that:
        //prevent a json callback
        //supply the api key
        



		//jquery invoke code when our document is ready

			//define a click handler for our search button, #search-btn
				//define a variable, search_val, that gets the value from the search field
                //make a variable, search_method_parameter, that stores which method we are going to use for searching.  The key should be 'method', and the value should be the 'flickr.photos.search'.  Make sure to put a & before the key
				//make a variable, search_text_parameter, that defines what text we are going to use in our search.  The key will be text, and the value will be the search_val variable we defined above.  Make sure to put a & before the key
                //define a variable, search_url, that concatanates the base_flickr_url variable, the search_method_parameter variable, and the search_text_parameter variable
                //
				//define an array, photos, to hold our photo information

				//change our HTML element, ID photo-list, to have the word "Searching" in it

				//initiate an ajax call
					//set the url key to your search_url variable
					//We expect json back from the ajax call, tell ajax to expect it
					//allow crossDomain requests.  key crossDomain, value true
					//define our success handler.  the function should put the received data into the "response" variable.  Don't need to define it with var, since it is in a function parameter
						//set our photos variable to the appropriate information from the json.  If you need to, console.log it out to see which variable contains the necessary information
						//displayPhotos(photos);

					//end our success handler
					//define our error handler.  Put the received data into the "response" variable.  
						//console log out the response variable, and indicate we had an error
					//end our error handler
				//end our ajax call


			//end our click handler definition
		//end our document ready call
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