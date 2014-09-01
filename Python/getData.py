import urllib 
import json

class getData:

	def __init__(self):
		pass

	def getJSON(self, path):
		htmlfile = urllib.urlopen(path)
		#need to account for spacing in t
		htmljson = htmlfile.read()
		
		return htmljson

	def toJSON(self, toConvert):
		#unloaded = json.dumps(toConvert)
		data = json.loads(toConvert)
		return data






raw_input()