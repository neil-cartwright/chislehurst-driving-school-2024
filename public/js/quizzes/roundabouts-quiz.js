var questions = [
  {
    imgSrc: '/img/driving-images/roundabouts/warning-roundabout.png',
    alt: 'roundabouts',
    question: 'When reaching a roundabout you should...',
    answers:  [
      { val: null, correct: false, answer: 'Give priority to traffic approaching from your left'},
      { val: null, correct: true, answer: 'give priority to traffic approaching from your right, unless directed otherwise by signs, road markings or traffic lights'},
      { val: null, correct: false, answer: 'Sound the horn and enter the roundabout'},
      { val: null, correct: false, answer: 'Stop even if the roundabout is clear'}
    ],
    explanation: 'Highway code rule 185. give priority to traffic approaching from your right, unless directed otherwise by signs, road markings or traffic lights'
  },
  {
      imgSrc: '/img/road-signs/roundabouts/major-roundabout.png',
      alt: 'roundabouts',
      question: 'Based on this road sign, how should you signal for the Tadcaster exit?',
      answers:  [
        { val: null, correct: false, answer: 'You do not need to signal as it is obvious where you are going'},
        { val: null, correct: false, answer: 'Do not signal until you leave the roundabout'},
        { val: null, correct: true, answer: 'Indicate right on approach to the roundabout. Indicate left when you have passed the Leeds exit'},
        { val: null, correct: false, answer: 'Indicate right on approach to the roundabout and maintain that signal until you have exited'},
      ],
      explanation: 'Highway code rule 186. Signal right and approach in the right hand lane. Signal left after you have passed the exit before the one you want.'
    },
    {
        imgSrc: '/img/road-signs/roundabouts/motorway-roundabout.png',
        alt: 'motorway roundabout',
        question: 'Based on this road sign, which number exit is Debworth?',
        answers:  [
          { val: null, correct: false, answer: 'It\'s the first exit'},
          { val: null, correct: true, answer: 'It\'s the second exit'},
          { val: null, correct: false, answer: 'It\'s the third exit'}
        ],
        explanation: 'The signs for roundabouts which connect dual carriageways and motorways sometimes display the entry lanes into the roundabout as well as the exit routes. Debworth would be rightly described as the second exit'
      },
      {
          imgSrc: '/img/road-signs/roundabouts/mini-roundabout-directions.png',
          alt: 'roundabout',
          question: 'Based on this road sign, what type of junction would you expect to see?',
          answers:  [
            { val: null, correct: false, answer: 'A big roundabout'},
            { val: null, correct: false, answer: 'A standard right turn'},
            { val: null, correct: false, answer: 'A normal roundabout'},
            { val: null, correct: true, answer: 'A mini roundabout'}
          ],
          explanation: 'You should expect to see a mini roundabout'
        },
        {
            imgSrc: '/img/road-signs/roundabouts/mini-roundabout.png',
            alt: 'mini roundabout',
            question: 'True or False: You must always stop at roundabouts',
            answers:  [
              { val: null, correct: false, answer: 'True'},
              { val: null, correct: true, answer: 'False'}
            ],
            explanation: 'Highway code rule 184. You should adjust your speed and position to fit in with traffic conditions.'
          },


];

questions.title = 'Roundabouts';
