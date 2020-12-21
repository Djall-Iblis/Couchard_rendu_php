const questionsList = [{
        label: 'Qui gagnera les Worlds League of Legends ?',
        reponses : [
            {label : 'Fnatic', isCorrect : false},
            {label : 'Faker', isCorrect : true},
            {label : 'Vous', isCorrect : false},
            {label : 'La réponse D', isCorrect : false}
        ]
    }, {
        label: 'Qui sera le nouveau président des Etat-Unies ?',
        reponses : [
            {label : 'Donald Trump', isCorrect : false},
            {label : 'Joe Biden', isCorrect : true},

        ]
    }, {
        label: 'Qui gagnera entre le Coronavirus ou l\'Humanité ?',
        reponses : [
            {label : 'Le Coronavirus', isCorrect : false},
            {label : 'L\'Humanité', isCorrect : false},
            {label : 'La Terre', isCorrect : false},
            {label : 'Les Vulcains', isCorrect : false},
            {label : 'Hans Zimmer', isCorrect : true}
        ]

    }, {
        label: 'En quelle année sortira Diablo IV ?',
        reponses : [
            {label : 'En 2021', isCorrect : false},
            {label : 'En 2021 après J.C.', isCorrect : false},
            {label : 'En 10721', isCorrect : false},
            {label : 'Jamais', isCorrect : false},
            {label : 'Hier', isCorrect : true}
        ]
    }, {
        label: 'Quand aura lieu le prochain confinement ?',
        reponses : [
            {label : 'En 2021', isCorrect : true},
            {label : 'En 2020', isCorrect : false},
            {label : 'En 2022', isCorrect : false},
            {label : 'La réponse D', isCorrect : false},
            {label : 'Dans 10 ans', isCorrect : false},
            {label : 'Jamais', isCorrect : false}
        ]
    }
];

var currentIndex = 0;

var score = 0;

displayQuestion();

function displayQuestion() {
    let questionDiv = document.getElementById('question');

    if (currentIndex < questionsList.length) {

        questionDiv.innerHTML = questionsList[currentIndex].label;

        let reponseDiv = document.getElementById('reponses');
        reponseDiv.innerHTML = '';

        questionsList[currentIndex].reponses.forEach((item, index) => {

            let div = document.createElement('div');
            let label = document.createElement('label');
            let input = document.createElement('input');
            let span = document.createElement('span');

            div.className = 'reponse';
            label.className = 'container';
            input.type = 'checkbox';
            input.setAttribute('onClick', 'nextQuestion(' + index + ')');
            span.className = 'checkmark';

            label.appendChild(input);
            label.appendChild(span);
            label.innerHTML += item.label;

            div.appendChild(label);
            reponseDiv.appendChild(div);

        });
    } else {
        questionDiv.innerHTML = 'Bravo, vous avez fini le questionnaire !';

        let reponseDiv = document.getElementById('reponses');
        reponseDiv.innerHTML = '';

        let div = document.createElement('div');
        let label = document.createElement('label');

        div.className = 'reponse';
        label.innerHTML += 'Votre score est : ' + score + '/' + currentIndex + ' !';

        div.style.textAlign = "center";
        label.style.fontFamily = "Verdana, Geneva, Tahoma, sans-serif";
        label.style.fontSize = " 35px ";

        div.appendChild(label);
        reponseDiv.appendChild(div);
    }
}

function nextQuestion(index) {

    if (questionsList[currentIndex].reponses[index].isCorrect) {
        alert('Bravo, vous avez correctement répondu !');
        score++ ;
    } else {
        alert('Désolé, vous n\'avez pas correctement répondu');
    }

    currentIndex++ ;

    displayQuestion();

}
