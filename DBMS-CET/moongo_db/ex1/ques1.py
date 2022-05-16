import pymongo
c = pymongo.MongoClient("mongodb://localhost:27017")
mydb = c['exam']

mycol = mydb["students"]


for data in mycol.find({},{"id":2}):
    print(data)
