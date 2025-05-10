var questions = [

  {
    imgSrc: '/img/driving-images/warning-signs/give-way.jpg',
    alt: 'junctions quiz',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: false, answer: 'General warning'},
      { val: null, correct: true, answer: 'Give way'},
      { val: null, correct: false, answer: 'No vehicles'},
      { val: null, correct: false, answer: 'Stop'}
    ],
    explanation: 'An inverted triangle means give-way'
  },

  {
    imgSrc: '/img/driving-images/warning-signs/right-bend-t-junction.jpg',
    alt: 'junctions quiz',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: false, answer: 'Warning: crossroads'},
      { val: null, correct: false, answer: 'Warning: bend'},
      { val: null, correct: true, answer: 'Warning: T-junction'},
      { val: null, correct: false, answer: 'Give way ahead'}
    ],
    explanation: 'This sign indicates that the major road bends to the right, at which point there is a junction on the left. Some people call it a T-junction. I would call it a "junction on a bend"'
  },

  {
    imgSrc: '/img/driving-images/warning-signs/slip-lane-merging.jpg',
    alt: 'junctions quiz',
    question: 'What sort of junction is this?',
    answers:  [
      { val: null, correct: false, answer: 'A t-junction'},
      { val: null, correct: false, answer: 'A roundabout'},
      { val: null, correct: false, answer: 'A normal side road'},
      { val: null, correct: true, answer: 'A slip lane'}
    ],
    explanation: 'Where you see this sign look out for traffic merging from your left. Check your mirrors and be prepared to adjust your speed. In some circumstances it may be wise to change to the lane to your right to allow traffic to merge more easily'
  },

  {
    imgSrc: '/img/driving-images/warning-signs/warning-junction-on-inside-right-bend.png',
    alt: 'junctions quiz',
    question: 'Based on this sign, what hazard should you especially look out for?',
    answers:  [
      { val: null, correct: true, answer: 'Vehicles emerging from a blind junction'},
      { val: null, correct: false, answer: 'Vehicles crossing your path'},
      { val: null, correct: false, answer: 'Nothing, as vehicles should be giving way to you'},
      { val: null, correct: false, answer: 'Why worry?'}
    ],
    explanation: 'This sign says there is a junction on the right, which may be hidden by the bend. Look out for vehicles emerging.'
  },
  {
    imgSrc: '/img/driving-images/level-crossing-signs/countdown-to-level-crossing-1.jpg',
    alt: 'junctions quiz',
    question: 'Based on this sign, what type of junction is ahead?',
    answers:  [
      { val: null, correct: true, answer: 'A level crossing'},
      { val: null, correct: false, answer: 'A motorway slip lane'},
      { val: null, correct: false, answer: 'A roundabout on a fast moving road' },
      { val: null, correct: false, answer: 'A low bridge'}
    ],
    explanation: 'This sign means in one hundred yards there will be a level crossing'
  },

  {
    imgSrc: '/img/driving-images/motorway-signs/blue_sign_for_driver_on_slip_lane.png',
    alt: 'junctions quiz',
    question: 'Based on this sign, what is happening ahead?',
    answers:  [
      { val: null, correct: false, answer: 'The slip lane is merging with the motorway'},
      { val: null, correct: true, answer: 'There is a motorway lane gain, meaning you don\'t immediately need to merge with the motorway traffic'},
      { val: null, correct: false, answer: 'There is a dual carriageway' }

    ],
      explanation: 'This sign indicates that the slip lane will become a new lane on the motorway, called "lane gain"'
    },

    {
      imgSrc: '/img/graphics/open-junction.png',
      alt: 'junctions',
      question: 'What is an "open" junction?',
      answers:  [
        { val: null, correct: false, answer: 'A junction where you can go without looking'},
        { val: null, correct: true, answer: 'A junction where you can see clearly in all directions as you are approaching'},
        { val: null, correct: false, answer: 'A junction where you cannot see clearly' },
        { val: null, correct: false, answer: 'A junction where you must always stop' }

      ],
        explanation: 'At open junctions you may be able to keep moving, if you can see that the way is clear'
      },

      {
        imgSrc: '/img/road-signs/unique/stop.png',
        alt: 'traffic signs quiz',
        question: 'What must you do at a stop sign?',
        answers:  [
          { val: null, correct: false, answer: 'Stop for traffic but keep moving if there isn\'t any'},
          { val: null, correct: true, answer: 'Stop the vehicle completely at the stop line'},
          { val: null, correct: false, answer: 'Give way but keep moving if it is clear'},
          { val: null, correct: false, answer: 'Go without stopping if someone is letting you out' }

        ],
          explanation: 'Stop signs are there for a reason. Stop completely, even if you think the road is clear. Apply the handbrake. If you need to inch forward to improve your view do so with care but you MUST bring the vehicle to a halt at the line.'
      },

      {
        imgSrc: '/img/road-signs/roundabouts/mini-roundabout.png',
        alt: 'traffic signs quiz',
        question: 'What type of junction is this?',
        answers:  [
          { val: null, correct: false, answer: 'A normal roundabout'},
          { val: null, correct: true, answer: 'A mini roundabout'},
          { val: null, correct: false, answer: 'A gyratory system'},
          { val: null, correct: false, answer: 'A one way system' }

        ],
          explanation: 'This sign means there is a mini-roundabout ahead.'
      },

      {
        imgSrc: '/img/road-signs/positive/go-left.png',
        alt: 'traffic signs quiz',
        question: 'Where might you see this sign?',
        answers:  [
          { val: null, correct: false, answer: 'When emerging at a crossroads'},
          { val: null, correct: true, answer: 'When emerging onto a roundabout'},
          { val: null, correct: false, answer: 'When exiting a motorway'},
          { val: null, correct: false, answer: 'When leaving a car park' }

        ],
          explanation: 'You might see this sign on a roundabout island'
      }
  ];

  questions.title = 'Junctions'
