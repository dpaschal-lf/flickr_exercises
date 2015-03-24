			//make a function that displays the photos, it accepts an argument of the variable photos.  photos will be an array of photos given to us by flickr 
				//check to make sure the photos array has at least 1 thing in it
					//if the photo array had any elements, clear html in the #photo-list html element
				//else (the photo array had 0 elements in it)
					//put some text into the #photo-list element's html.  It should indicate that there were no photos returned
				//end of if photos array is empty
				//loop through all of the photos, use the variable index to serve as the index
					//define a variable, photoObj, that will hold this specific photo we are looking at (as opposed to the entire photo array)
					//define a variable, photo_url, that will hold the URL of the target photo's image.  Refer to https://www.flickr.com/services/api/misc.urls.html for more information on how to form your photo url.  You will need to pull pieces out of the photoObj, so it would be wise to console.log the variable to see which pieces you need
					//use jquery to make a new image, in variable img.  Also give it a 'src' attribute equal to the url variable above.  Additionally, give the img a "width" of 250. This can be done by calling .width(250)
					//append the new img variable onto our #photo-list element
				//end the for loop
			//end the function call