[
    {
        "$match": {
            "order": {
                "$gte": 2
            }
        }
    },
    {
        "$group": {
            "_id": "app-count-2",
            "count": {
                "$sum": 1
            }
        }
    }
]
