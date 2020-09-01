[
    {
        "$group": {
            "_id": "app-count",
            "count": {
                "$sum": 1
            }
        }
    }
]
