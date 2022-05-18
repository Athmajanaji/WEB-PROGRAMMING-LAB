import pymongo
c = pymongo.MongoClient("mongodb://localhost:27017")
mydb = c['exam']

mycol = mydb["students"]


for s in mycol.find({"Department":"MCA"}).sort("Lab_mark.External",-1).limit(2):
	print(s["Name"]+"\n"+str(s["Phone"]))

