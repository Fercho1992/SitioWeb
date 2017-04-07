// get the textarea element 
            var elem = document.getElementById("fileOutput");
            // connect to the server
            var connection = sharejs.open('test', 'text', function(error, doc) {
                // this function is called once the connection is opened
                if (error) {
                	console.log("ERROR:", error);
                } else {
                    // attach the ShareJS document to the textarea
                    doc.attach_textarea(elem);
                }
            });