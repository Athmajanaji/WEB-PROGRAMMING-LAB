import pymongo
c = pymongo.MongoClient("mongodb://localhost:27017")
mydb = c['exam']

mycol = mydb["students"]

for s in mycol.find({"Name":{"$regex":"^A"}}):
	print(s["Name"],"\n",s["_id"],s["Department"])
