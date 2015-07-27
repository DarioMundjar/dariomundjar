// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var quizJSON = {
    "info": {
        "name":    "Test your knowledge about House!!",
        "main":    "<p></p>",
        "results": "",
        "level1":  "Excellent",
        "level2":  "Good",
        "level3":  "Amateur",
        "level4":  "Newb",
        "level5":  "Research page" // no comma here

    },
    "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "House told: 'If it works, we're right. If he dies, it was something else.', in which episode",
            "a": [
                {"option": "S02E1", "correct": false},
                {"option": "S03E05", "correct": false},
                {"option": "S01E22",  "correct": true},
                {"option": "S01E02",  "correct": false}
 // no comma here
            ],
            "correct": "<p>That's correct!</p>",
            "incorrect": "<p>Incorrect.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
                        "q": "In video Same mistake you saw name of psychiatric facilitie. Name is: ",
            "a": [
                {"option": "Mid-Hudson", "correct": false},
                {"option": "Mayfield",   "correct": true},
                {"option": "Northern Michigan Asylum", "correct": false},
                {"option": "Greystone Park", "correct": false} 
 // no comma here
            ],
            
           "correct": "<p>That's correct!</p>",
            "incorrect": "<p>Incorrect.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "House MD is played by: ",
            "a": [
                {"option": "Hugh Laurie",           "correct": true},
                {"option": "Robert Sean Leonard",                  "correct": false},
                {"option": "Jesse Spencer",  "correct": false},
                {"option": "Peter Jacobson",          "correct": false} // no comma here
            ],
           "correct": "<p>That's correct!</p>",
            "incorrect": "<p>Incorrect.</p>" // no comma here
        },
        { // Question 4
            "q": "Gregory House is addicted to which pills?",
            "a": [
                {"option": "Ibuprofen",    "correct": false},
                {"option": "Vicodine",     "correct": true},
                {"option": "Demerol",      "correct": false},
                {"option": "Diazepam",   "correct": false} // no comma here
            ],
           "correct": "<p>That's correct!</p>",
            "incorrect": "<p>Incorrect.</p>" // no comma here
        },
        { // Question 5
            "q": "Is Thirteen Dean of Medicine?",
            "a": [
                {"option": "Yes",    "correct": false},
                {"option": "No",     "correct": true} // no comma here
            ],
           "correct": "<p>That's correct!</p>",
            "incorrect": "<p>Incorrect.</p>" // no comma herere
        } // no comma here
    ]
};
