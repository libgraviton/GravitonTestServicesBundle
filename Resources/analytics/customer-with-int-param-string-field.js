[
    /* ifparam:groupId */
    {
        "$match": {
            "groups": /* param:groupId */ tester /* endparam */
        }
    },
    /* endifparam */
    {
        "$project": {
            "_id": 1,
            "name": 1
        }
    }
]
