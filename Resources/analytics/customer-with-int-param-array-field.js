[
    {
        "$match": {
            "groups": {"$in": /* param:groupId */ tester /* endparam */ }
        }
    },
    {
        "$project": {
            "_id": 1,
            "name": 1
        }
    }
]
