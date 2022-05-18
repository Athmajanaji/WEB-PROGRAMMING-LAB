import pymongo
c = pymongo.MongoClient("mongodb://localhost:27017")
mydb = c['exam']

mycol = mydb["students"]

for s in mycol.find().sort("Lab_mark.External",-1):
	print(s["Name"])
