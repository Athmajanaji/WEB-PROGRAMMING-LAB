import pymongo
c = pymongo.MongoClient("mongodb://localhost:27017")
db = c['sample']
coll = db['student']



coll.delete_one({"_id" : 2})
