[
    /* ifparam:search */
    {
        "$match": {
            "name.en": /* param:search */ "tester" /* endparam */
        }
    },
    /* endifparam */
    {
        "$project": {
            "_id": 1,
            "name": "$name.en",
            "sorter": {"$strLenBytes": "$name.en"},
            "dater": "#newDate#",
            "fixedDate": "#mongoDate(2018-04-19T00:00:00+0000)#"
        }
    }
]
