[
    /* ifparam:search */
    {
        "$match": {
            "name": /* param:search */ "tester" /* endparam */
        }
    },
    /* endifparam */
    {
        "$project": {
            "_id": 1,
            "name": "$name",
            "sorter": {"$strLenBytes": "$name"}
        }
    }
]
