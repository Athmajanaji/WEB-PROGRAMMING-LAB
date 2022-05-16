import pymongo
c = pymongo.MongoClient("mongodb://localhost:27017")
mydb = c['exam']

mycol = mydb["students"]


for data in mycol.find({"Vaccination_status" : "not vaccinated",}):
    print(data["Name"])
    print(data["Phone"])
