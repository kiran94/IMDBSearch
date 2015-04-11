from getData import getData

title = raw_input("Enter a movie title ")

title = title.replace(' ', '%20')

request = getData()
rawData = request.getJSON("http://www.omdbapi.com/?t=" + title)
data = request.toJSON(rawData)

keys = ["Released", "Runtime", "Genre", "Actors", "Director", "Writer", "Plot"];

for key in keys:
	print data[key];  

raw_input("Completed..")