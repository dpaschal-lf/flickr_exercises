        //create a variable, photo_info_url, that contains the method key/value pair to do a flickr photo getinfo search: flickr.photos.getInfo.  Concatanate this onto the end of our base_flickr_url from before   
        //make a function called getPhotoInfo, it takes an argument of the photos array from our flickr search
                //check the length of the photos, if it is 0
                    //return out of our function
                //end of if
                //loop through our photos array.  use index "index"
                    //make a variable,get_info_url, and concatanate the photo_info_url variable with our flickr.photos.getInfo specific key/value arguments.  we'll need the photo_id key, with a value taken from our photo array for each photo
                    //console.log("get info url = "+get_info_url);
                        //start an ajax call
                            //url key with value of our get_info_url
                            //our ajax call should expect json back as its datatype
                            //allow crossdomain requests
                            //define a success function, with the variable 'response' holding our returned data
                                    //build a url, photo_url, for the photo based on this photo's information.
                                    //make a new image, and add the photo_url to its source.  make its width 100px
                                //end of our success function call
                            //define an error function
                                //report the error to our user
                            //end of error function call

                        //end of our ajax call
                //end of for loop