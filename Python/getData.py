import urllib 
import json

class getData:

	def __init__(self):
		pass

	def getJSON(self, path):
		#Create url open with path. 
		htmlfile = urllib.urlopen(path)
		#Request data from file. 
		htmljson = htmlfile.read()
		#Return Data. 
		return htmljson

	def toJSON(self, toConvert):
		#Convert to JSON Object. 
		data = json.loads(toConvert)
		#Return JSON object. 
		return data

