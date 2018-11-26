[
    /* ifparam:dateFrom */
    {
        "$match": {
            "createDate": {"$gt": /* param:dateFrom */ new Date() /* endparam */ }
        }
    },
    /* endifparam */
    {
        "$addFields": {
            "age": {
                "$subtract": [
                    {
                        "$year": new Date()
                    },
                    {
                        "$year": "$createDate"
                    }
                ]
            }
        }
    },
    {
        "$project": {
            "age": 1,
            "createDate": 1,
            "sub.createDate": "$createDate"
        }
    },
    {
        "$sort": {
            "_id": 1
        }
    }
]
