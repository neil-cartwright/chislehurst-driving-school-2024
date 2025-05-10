var questions = [

  {
    imgSrc: '/img/driving-images/regulatory-signs/one-way.png',
    alt: 'one way streets quiz',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: false, answer: 'Go straight on'},
      { val: null, correct: true, answer: 'One way street'},
      { val: null, correct: false, answer: 'No turning'},
      { val: null, correct: false, answer: 'Keep right'}
    ],
    explanation: 'This sign means "one way road"'
  },


  {
    imgSrc: '/img/road-signs/prohibitory/no-entry.png',
    alt: 'one way streets quiz',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: false, answer: 'Stop'},
      { val: null, correct: true, answer: 'No entry'},
      { val: null, correct: false, answer: 'No U turns'},
      { val: null, correct: false, answer: 'Ahead only'}
    ],
    explanation: 'This sign may prevent you from driving the wrong way down a one-way street'
  },

  {
    imgSrc: '/img/graphics/three-lanes.png',
    alt: 'one way street',
    question: 'When turning right from a one way street, where should you position the car?',
    answers: [
      { val: null, correct: true, answer: 'To the right of the road'},
      { val: null, correct: false, answer: 'To the centre of the road'},
      { val: null, correct: false, answer: 'To the left of the road'},
      { val: null, correct: false, answer: 'It does not matter'}
    ],
    explanation: 'You should position the car to the right of the road, unless signs say otherwise. This allows traffic turning left or going ahead to pass you on your left.'
  },

  {
    imgSrc: '/img/driving-images/bus-and-cycle-signs/contraflow-cycle-lane.jpg',
    alt: 'one way streets quiz',
    question: 'What does this sign mean?',
    answers: [
      { val: null, correct: false, answer: 'With flow bicycle lane'},
      { val: null, correct: false, answer: 'Dual Carriageway ahead'},
      { val: null, correct: true, answer: 'Contraflow bicycle lane'}
    ],
    explanation: 'Some one way systems allow cyclists and buses to travel against the flow of the other vehicles'
  },

  {
    imgSrc: '/img/driving-images/regulatory-signs/no-overtaking.png',
    alt:'one way systems',
    question: 'True or False. You may overtake on the left when on a one-way street?',
    answers: [
      { val: null, correct: true, answer: 'True'},
      { val: null, correct: false, answer: 'False'}
    ],
    explanation: 'You may overtake on the left if you are on a one-way street'
  },

  {
    imgSrc: '/img/driving-images/traffic-calming/no-priority-over-oncoming-traffic.jpg',
    alt: 'priority',
    question: 'What does this sign mean?',
    answers: [
      { val: null, correct: false, answer: 'Priority over oncoming traffic'},
      { val: null, correct: true, answer: 'No priority over oncoming traffic'},
      { val: null, correct: false, answer: 'One Way street' }
    ],
    explanation: 'You will see this near traffic calming, where only one vehicle may pass'
  }
];

questions.title = 'One way systems';
