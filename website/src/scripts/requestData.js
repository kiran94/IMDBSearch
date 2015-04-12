$(document).ready(function()
{

	$("#input_but").click(function()
	{
		//Get the value of the input. 
		var title = $("#input_val").val();
		var img = "";

		//Run AJAX commands.
		$.ajax({
			type: "GET", 
			url: "http://www.omdbapi.com/?t=" + title + "&plot=full",
			success: function(data)
			{
				//If successful response. 
				if(data.Response == "True")
				{
					//Set json title to html. 
					$("#title_results").html(data["Title"]); 

					//Cols to attain from json. 
					var keys = ["Released", "Runtime", "Genre", "Actors", "Director", "Writer"];
					//Variable to hold content.  
					var contents = ""; 

					//For each col
					for(var i=0; i<keys.length; i++)
					{
						//Addd column to content. 
						contents = contents + keys[i] + ": " + data[keys[i]] + "<br>";
					} 

					//Get the plot and enter it into html. 
					var plot = "<br/><span id='plot'>" + data["Plot"] + "</span><br/>"; 
					//Add plot to contents. 
					contents = contents + plot; 

					//Get link and enter into html. 
					var link = "<a href='http://www.imdb.com/title/" + data["imdbID"]  + "'>More Information</a><br/>"; 
					//Add link to contents. 
					contents = contents + link; 

					//Add all contents to id 
					$("#contents").html(contents); 

					//Get poster link. 
					img = data["Poster"];
					//Set attribute src to image link.  
					$("#poster").attr("src", img);



				    $('html, body').animate(
				    {
				    	scrollTop: $("#result").offset().top 
				    }, 500);
				}
				else
				{
					$("#result").html(data.Error);
				}
			}, 
			error: function()
			{
				$("#title_results").html("Error getting data"); 
			}

		}); //end ajax.

	}); //end button click

}); //end jqeury