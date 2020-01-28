
    {
        "_id": "5e1ddf2b460e8045d044162e",
        "name": "The Diplomate",
        "character": "The Diplomate",
        "description": "Nos ennemis nous réclame un tribut. Acceptons nous leur demande ?",
        "answer_yes": "Oui",
        "answer_no": "Non",
        "effect_generale": {
            "religion": 0,
            "army": 0,
            "population": 0,
            "argent": 0
        },
        "effect_yes": {
            "religion": 0,
            "army": 0,
            "population": 0,
            "argent": 10
        },
        "effect_no": {
            "religion": 0,
            "army": 0,
            "population": 0,
            "argent": 0
        },
        "condition": {
            "religion": 10,
            "army": 0,
            "population": 0,
            "argent": 0
        },
        "nextCard": {
            "yes": "",
            "no": ""
        }
    },
    {
        "_id": "5e1ddf2b460e8045d0441631",
        "name": "The Princess",
        "character": "The Princess",
        "description": "Ma famille se moque de la taille de notre chateau, nous devons en construire un plus grand !",
        "answer_yes": "Oui",
        "answer_no": "Notre chateau est bien comme ça",
        "effect_yes": {
            "religion": 0,
            "army": 0,
            "population": 5,
            "argent": -20
        },
        "effect_generale": {
            "religion": 0,
            "army": 0,
            "population": 0,
            "argent": 0
        },
        "effect_no": {
            "religion": 0,
            "army": 0,
            "population": 10,
            "argent": 0
        },
        "condition": {
            "religion": 10,
            "army": 0,
            "population": 0,
            "argent": 0
        },
        "nextCard": {
            "yes": "",
            "no": ""
        }
    },
    {
        "_id": "5e1ddf2b460e8045d0441634",
        "name": "The Skeleton",
        "character": "The Skeleton",
        "description": "Un squelette vous barre la route",
        "answer_yes": "Engager le combat !",
        "answer_no": "Fuir ...",
        "effect_generale": {
            "religion": -1,
            "army": -1,
            "population": -1,
            "argent": -1
        },
        "effect_yes": {
            "religion": 0,
            "army": 0,
            "population": 5,
            "argent": -20
        },
        "effect_no": {
            "religion": 0,
            "army": 0,
            "population": 10,
            "argent": 0
        },
        "condition": {
            "religion": 10,
            "army": 0,
            "population": 0,
            "argent": 0
        },
        "nextCard": {
            "yes": "",
            "no": ""
        }
    },
    {
        "_id": "5e1ddf2b460e8045d0441637",
        "name": "The Dog",
        "character": "The Dog",
        "description": "Wouaf wouaf ! On dirait que le chien veut que vous le suiviez",
        "answer_yes": "Le suivre ... ",
        "answer_no": "Assis !",
        "effect_generale": {
            "religion": 0,
            "army": 0,
            "population": 0,
            "argent": 0
        },
        "effect_yes": {
            "religion": 0,
            "army": -20,
            "population": 0,
            "argent": -10
        },
        "effect_no": {
            "religion": 0,
            "army": -20,
            "population": -10 ,
            "argent": 0
        },
        "condition": {
            "religion": 0,
            "army": 0,
            "population": 0,
            "argent": 0
        },
        "nextCard": {
            "yes": "The Dog suivi",
            "no": ""
        }
    },
    {
        "_id": "5e1ddf2b460e8045d044163a",
        "name": "The Dog suivi",
        "character": "The Dog",
        "description": "Wouaf ! wouaf !! Wouaf !!! Le chien vous indique d'aller dans la foret noire",
        "answer_yes": "Aller dans la foret noire",
        "answer_no": "ne pas y aller",
        "effect_generale": {
            "religion": 0,
            "army": 0,
            "population": 0,
            "argent": 0
        },
        "effect_yes": {
            "religion": -20,
            "army": 0,
            "population": 0,
            "argent": -10
        },
        "effect_no": {
            "religion": 0,
            "army": -20,
            "population": -10,
            "argent": 0
        },
        "condition": {
            "religion": 0,
            "army": 0,
            "population": 0,
            "argent": 0
        },
        "nextCard": {
            "yes": "The Dog : la foret noire",
            "no": "The Dog : second choice"
        }
    }
