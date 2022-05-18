import pymongo
c = pymongo.MongoClient("mongodb://localhost:27017")
mydb = c['exam']

mycol = mydb["students"]
myq={"_id":4}
upd={"$set":{"Vaccination_status":"Both vaccinated"}}
mycol.update_one(myq,upd)
