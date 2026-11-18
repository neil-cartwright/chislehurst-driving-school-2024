var questions = [
    {
        imgSrc: "/img/road-signs/unique/stop.png",
        alt: "stop sign",
        question: "What must you do at a stop sign?",
        answers: [
            {
                val: null,
                correct: false,
                answer: "Stop for traffic but keep moving if there isn't any",
            },
            {
                val: null,
                correct: true,
                answer: "Stop the vehicle completely at the stop line",
            },
            {
                val: null,
                correct: false,
                answer: "Give way but keep moving if it is clear",
            },
            {
                val: null,
                correct: false,
                answer: "Go without stopping if someone is letting you out",
            },
        ],
        explanation:
            "Stop signs are there for a reason. Stop completely, even if you think the road is clear. Apply the handbrake. If you need to inch forward to improve your view do so with care but you MUST bring the vehicle to a halt at the line.",
    },
    {
        imgSrc: "/img/road-signs/positive/one-way.png",
        alt: "a one way street sign",
        question:
            "On a one way system how should you position your vehicle if you are turning right?",
        answers: [
            {
                val: null,
                correct: false,
                answer: "Stay to the left",
            },
            { val: null, correct: true, answer: "Stay to the right" },
        ],
        explanation:
            "On a one way street you can position to the right hand side in order to turn right so that traffic may pass on the left.",
    },
    {
        imgSrc: "/img/road-signs/motorways/national-speed-limit.png",
        alt: "a national speed limit sign",
        question:
            "What is the speed limit on a dual carriageway where you see this sign?",
        answers: [
            {
                val: null,
                correct: false,
                answer: "30mph",
            },
            {
                val: null,
                correct: false,
                answer: "40mph",
            },
            {
                val: null,
                correct: false,
                answer: "50mph",
            },
            {
                val: null,
                correct: false,
                answer: "60mph",
            },
            {
                val: null,
                correct: true,
                answer: "70mph",
            },
        ],
        explanation:
            "The national speed limit on a dual carriageway is the same as a motorway, 70mph.",
    },
    {
        imgSrc: "/img/graphics/box-junction.jpg",
        alt: "box-junction image",
        question: "When are you allowed to wait in a box junction?",
        answers: [
            {
                val: null,
                correct: false,
                answer: "You are never allowed to wait in a box junction",
            },
            {
                val: null,
                correct: true,
                answer: "When your exit road is clear and you are prevented from turning right by oncoming traffic",
            },
            { val: null, correct: false, answer: "At weekends" },
            { val: null, correct: false, answer: "When the traffic is quiet" },
        ],
        explanation:
            "Box junctions are painted across junctions to prevent queuing traffic from blocking side roads. As long as your exit road is clear you may wait in one if you are prevented from turning right by oncoming traffic",
    },
    {
        imgSrc: "/img/road-signs/roundabouts/major-roundabout.png",
        alt: "roundabouts",
        question:
            "Based on this road sign, how should you signal for the Tadcaster exit?",
        answers: [
            {
                val: null,
                correct: false,
                answer: "You do not need to signal as it is obvious where you are going",
            },
            {
                val: null,
                correct: false,
                answer: "Do not signal until you leave the roundabout",
            },
            {
                val: null,
                correct: true,
                answer: "Indicate right on approach to the roundabout. Indicate left when you have passed the Leeds exit",
            },
            {
                val: null,
                correct: false,
                answer: "Indicate right on approach to the roundabout and maintain that signal until you have exited",
            },
        ],
        explanation:
            "Highway code rule 186. Signal right and approach in the right hand lane. Signal left after you have passed the exit before the one you want.",
    },
];

questions.title = "Driving test uncommon fails";
