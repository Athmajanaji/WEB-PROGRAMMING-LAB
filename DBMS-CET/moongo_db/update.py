import pymongo
c = pymongo.MongoClient("mongodb://localhost:27017")
db = c['sample']
coll = db['student']

myquery = ({'mark':80})
_update = ({"$set":{"mark":"90"}})

coll.update_many(myquery,_update)
