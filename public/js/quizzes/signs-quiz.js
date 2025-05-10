var questions = [

  {
    imgSrc: '/img/road-signs/bus-lanes/bus-lane-with-times.png',
    alt: 'bus lane',
    question: 'When may you drive a motor car is this bus lane?',
    answers:  [
      { val: null, correct: false, answer: 'To get to the front of a traffic queue'},
      { val: null, correct: true, answer: 'Outside its hours of operation'},
      { val: null, correct: false, answer: 'You may not use it at any time'},
      { val: null, correct: false, answer: 'To overtake slow-moving traffic'}
    ],
    explanation: 'You may only use bus lanes outside their hours of operation. If no times are displayed on the sign then you may not use the bus lane at any time.'
  },

 //  // question two
  {
    imgSrc: '/img/driving-images/regulatory-signs/no-motor-vehicles.png',
    alt: 'regulatory sign',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: false, answer: 'No overtaking'},
      { val: null, correct: true, answer: 'No motor vehicles'},
      { val: null, correct: false, answer: 'Clearway (no stopping)'},
      { val: null, correct: false, answer: 'Cars and motorcycles only'}
    ],
    explanation: 'Red circular signs are prohibitory. Whatever is illustrated inside the sign is prohibited.'
  },

  // question three
  {
    imgSrc: '/img/driving-images/regulatory-signs/no-stopping.png',
    alt: 'regulatory-signs',
    question: 'You see this sign ahead. What does it mean?',
    answers:  [
      { val: null, correct: false, answer: 'National speed limit applies'},
      { val: null, correct: false, answer: 'Waiting restrictions apply'},
      { val: null, correct: true, answer: 'No stopping'},
      { val: null, correct: false, answer: 'No entry'}
    ],
     explanation: 'You might see this sign on a dual carriageway, or red-route.'
  },
 // question four
  {
    imgSrc: '/img/driving-images/on-street-parking/park-fully-on-kerb.jpg',
    alt: 'parking sign',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: false, answer: 'Vehicles may not park on the verge or footway'},
      { val: null, correct: false, answer: 'Vehicles may park on the left-hand side of the road only'},
      { val: null, correct: true, answer: 'Vehicles may park fully on the verge or footway'},
      { val: null, correct: false, answer: 'Vehicles may park on the right-hand side of the road only'}
    ],
     explanation: 'Sometimes you are allowed to park on the pavement.'
  },
  // question five
  {
    imgSrc: '/img/driving-images/regulatory-signs/minimum-speed.png',
    alt: 'regulatory sign',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: false, answer: 'Service area 30 miles ahead'},
      { val: null, correct: false, answer: 'Maximum speed 30 mph'},
      { val: null, correct: false, answer: 'Lay-by 30 miles ahead'},
      { val: null, correct: true, answer: 'Minimum speed 30 mph'}
    ],
     explanation: 'You might see this sign in the Dartford tunnel. It is designed to keep traffic flowing.'
  },
  // // question six
  {
    imgSrc: '/img/driving-images/warning-signs/left-bend-t-junction.jpg',
    alt: 'warning sign',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: true, answer: 'T-junction'},
      { val: null, correct: false, answer: 'Turn left ahead'},
      { val: null, correct: false, answer: 'No through road'},
      { val: null, correct: false, answer: 'Give way'}
    ],
     explanation: 'Sometimes this is referred to as a junction on a bend. Sometimes it is referred to as a T-junction. The thick line represents the major road, the thin line represents the minor road.'
  },
  // // question seven
  {
    imgSrc: '/img/driving-images/level-crossing-signs/open-level-crossing.png',
    alt: 'level crossing sign',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: false, answer: 'Wait at the barriers'},
      { val: null, correct: true, answer: 'Give way to trains'},
      { val: null, correct: false, answer: 'Give way to farm vehicles'},
      { val: null, correct: false, answer: 'Wait at the crossroads'}
    ],
     explanation: 'You might see this sign at an open level crossing.'
  },
  // // question eight
  {
    imgSrc: '/img/driving-images/warning-signs/warning-end-of-dual-carriageway.png',
    alt: 'warning sign',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: false, answer: 'Tall bridge'},
      { val: null, correct: false, answer: 'Road narrows'},
      { val: null, correct: true, answer: 'End of dual carriageway'},
      { val: null, correct: false, answer: 'End of narrow bridge'}
    ],
     explanation: 'The central reservation will soon be gone.'
  },
  // // question nine
  {
    imgSrc: '/img/driving-images/level-crossing-signs/level-crossing-with-barrier.jpg',
    alt: 'warning sign',
    question: 'What does this sign mean?',
    answers:  [
      { val: null, correct: false, answer: 'Gated road ahead'},
      { val: null, correct: false, answer: 'Level crossing without gate or barrier'},
      { val: null, correct: false, answer: 'Cattle grid ahead'},
      { val: null, correct: true, answer: 'Level crossing with gate or barrier'}
    ],
     explanation: 'Some level crossings have barriers.'
  },
  // // question ten
  {
    imgSrc: '/img/driving-images/motorway-signs/national-speed-limit.png',
    alt: 'motorway sign',
    question: 'You are driving a motor car on a dual carriageway. What is the speed limit where you see this sign?',
    answers:  [
      { val: null, correct: false, answer: '50mph'},
      { val: null, correct: false, answer: '60mph'},
      { val: null, correct: true, answer: '70mph'},
      { val: null, correct: false, answer: '80mph'}
    ],
     explanation: 'Speed limits are different according to the type of road and type of vehicle. On dual carriageways the speed limits are the same for cars as they are on motorways.'
  }
];

questions.title = 'Signs';
