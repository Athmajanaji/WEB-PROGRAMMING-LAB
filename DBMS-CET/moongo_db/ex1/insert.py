import pymongo
c = pymongo.MongoClient("mongodb://localhost:27017")
mydb = c['exam']

mycol = mydb["students"]


#data = { "_id" : 1,
#	"Name" : "Anjali",
#	"Place" : "Kollam",
#	"Phone" : 8582639562,
#	"Vaccination_status" : "Both vaccinated",
#	"RTPCR" : "negative",
#	"Lab_mark" :{ "Internal":30,"External":45},
#	"Department" : "MCA" }
#insert many

datas =[ { "_id":2,
	"Name" : "Anuradha",
	"Place" : "Varkala",
	"Phone" : 9992639562,
	"Vaccination_status" : "Both vaccinated",
	"RTPCR" : "negative",
	"Lab_mark" : {"Internal" :40,"External ":48},
	"Department" : "Civil" },
	{ "_id" : 3,
	 "Name" : "Bismiya",
	"Place" : "Kollam",
	"Phone" : 9446639562,
	"Vaccination_status" : "not vaccinated",
	"RTPCR" : "positive",
	"Lab_mark" :{"Internal":50,"External":39},
	"Department" : "MCA"},
	{"_id" : 4,
	"Name" : "Vimal",
	"Place" : "Ernakulam",
	"Phone" : 8582639568,
	"Vaccination_status" : "First dose only",
	"RTPCR" :"positive",
	"Lab_mark" :{ "Internal" :40, "External":42},
	"Department": "Civil" },
	{"_id"  : 5,
	"Name"  : "Vivek",
	"Place" : "Kollam",
	"Phone" : 8582639777,
	"Vaccination_status" : "Both vaccinated",
	"RTPCR" :"negative",
	"Lab_mark":{"Internal":50,"External":50},
	"Department" : "MCA"}
 	]
mycol.insert_many(datas)
