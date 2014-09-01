from getData import getData


title = raw_input("Enter a movie title ")

title = title.replace(' ', '%20')

request = getData()
rawData = request.getJSON("http://www.omdbapi.com/?t=" + title)
data = request.toJSON(rawData)

print data["Title"]
print data["Released"]
raw_input()