[
    {
        "$project": {
            "id": 1,
            "name": 1,
            "customerNumber": 1,
            "created_year": {
                "$cond": [
                    {
                        "$ifNull": [
                            "$createDate",
                            0
                        ]
                    },
                    {
                        "$year": "$createDate"
                    },
                    -1
                ]
            },
            "created_month": {
                "$cond": [
                    {
                        "$ifNull": [
                            "$createDate",
                            0
                        ]
                    },
                    {
                        "$month": "$createDate"
                    },
                    -1
                ]
            }
        }
    },
    {
        "$match": {
            "created_year": {
                "$gte": /* param:yearFrom */ "tester" /* endparam */,
                "$lte": /* param:yearTo */ "tester" /* endparam */
            }
        }
    }
]
