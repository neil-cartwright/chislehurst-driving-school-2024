var questions = [

{
  imgSrc: '/img/driving-images/on-street-parking/no-stopping[2].jpg',
  alt: 'Parking quiz',
  question: 'What does this sign mean?',
  answers:  [
    { val: null, correct: false, answer: 'No parking'},
    { val: null, correct: true, answer: 'No stopping'},
    { val: null, correct: false, answer: 'No entry'},
    { val: null, correct: false, answer: 'No vehicles'}
  ],
  explanation: 'It means no stopping'
},
{
  imgSrc: '/img/driving-images/on-street-parking/waiting_restrictions.png',
  alt: 'Parking quiz',
  question: 'Based on this sign, when are you allowed to park?',
  answers:  [
    { val: null, correct: false, answer: 'Between 8am and 6pm'},
    { val: null, correct: false, answer: 'You are not allowed to park but you are allowed to stop'},
    { val: null, correct: true, answer: 'After 6pm and before 8am'},
    { val: null, correct: false, answer: 'During the times shown'}
  ],
  explanation: 'You may park outside the times shown'
  },
  {
    imgSrc: '/img/driving-images/signs-for-cyclists-and-pedestrians/cycle-parking.jpg',
    alt: 'Parking quiz',
    question: 'What does this sign show?',
    answers:  [
      { val: null, correct: false, answer: 'Directions to the car park'},
      { val: null, correct: false, answer: 'Directions to the motorcycle parking'},
      { val: null, correct: true, answer: 'Directions to the bicycle parking'}
    ],
    explanation: 'It shows the way to the cycle parking area'
    },
    {
      imgSrc: '/img/road-signs/parking/no-vehicles.png',
      alt: 'Parking quiz',
      question: 'What does this sign mean?',
      answers:  [
        { val: null, correct: true, answer: 'No vehicles'},
        { val: null, correct: false, answer: 'No stopping'},
        { val: null, correct: false, answer: 'No parking'},
        { val: null, correct: false, answer: 'No bicycles'}
      ],
      explanation: 'It means no vehicles'
      },
      {
        imgSrc: '/img/graphics/box-junction(2).png',
        alt: 'Parking quiz',
        question: 'When are you allowed to stop in a box junction?',
        answers:  [
          { val: null, correct: false, answer: 'You must never stop in a box junction'},
          { val: null, correct: true, answer: 'When your exit road is clear and you are prevented from turning right by oncoming traffic'},
          { val: null, correct: false, answer: 'At any time'},
          { val: null, correct: false, answer: 'When there is a traffic jam'}
        ],
        explanation: 'You can wait in a box junction if you are turning right and are prevented from turning only by the oncoming traffic'
        },
        {
          imgSrc: '/img/graphics/red-route-lines.png',
          alt: 'Parking quiz',
          question: 'What do these road lines mean?',
          answers:  [
            { val: null, correct: false, answer: 'No parking'},
            { val: null, correct: false, answer: 'You can stop sometimes'},
            { val: null, correct: true, answer: 'No stopping at any time'},
            { val: null, correct: false, answer: 'No turning'}
          ],
          explanation: 'Red routes can be found in big cities and are designed to reduce congestion on busy routes. You are not allowed to stop where there area double red lines'
          },

          {
            imgSrc: '/img/graphics/driver-photo.png',
            alt: 'Parking quiz',
            question: 'You would like to pull up on the left. What should you do first?',
            answers:  [
              { val: null, correct: false, answer: 'Brake'},
              { val: null, correct: false, answer: 'Press the clutch'},
              { val: null, correct: true, answer: 'Check behind'},
              { val: null, correct: false, answer: 'Indicate'}
            ],
            explanation: 'You should check behind, and indicate if necessary'
            },

              {
            imgSrc: '/img/graphics/double-yellow-lines.png',
            alt: 'Parking quiz',
            question: 'When are you permitted to stop on double yellow lines?',
            answers:  [
              { val: null, correct: true, answer: 'To set down and pick up passengers'},
              { val: null, correct: false, answer: 'To use the local shop'},
              { val: null, correct: false, answer: 'At any time, as long as you use your hazard lights'},
              { val: null, correct: false, answer: 'Not at any time'}
            ],
            explanation: 'You are permitted to stop on double yellow lines to set down and pick up passengers. It may also be permitted to park off-season, but you would need to check any additional information signs'
            },
];

questions.title = 'Parking and stopping';
