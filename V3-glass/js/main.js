import { animateGradients } from './background.js';
import { updateHour } from './clock.js';
import './music.js';



window.addEventListener('load', () => {
    animateGradients();

    fetch('https://api.github.com/repos/Fredray-21/Portfolio/commits/main')
        .then(response => response.json())
        .then(data => {
            const elem = document.getElementById('commitHash')
            elem.textContent = data.sha.slice(0, 7) + '...';
            elem.href = data.html_url;
        })
        .catch(error => console.error('Erreur lors de la requête API :', error));

    const elemDuolingo = document.querySelector('#duolingoStreak > #streak')
    if (elemDuolingo) {
        fetch('./duolingo/streakDuolingo.json')
            .then(response => response.json())
            .then(data => {
                const elem = document.querySelector('#duolingoStreak > #streak')
                const duolingoStreak = data.streak;
                elem.textContent = duolingoStreak;
            })
            .catch(error => console.error('Erreur lors de la requête API :', error));
    }

    const allCards = document.querySelectorAll('.cards .cardOuter');

    function handleClick(card) {
        card.classList.add('cardSelected');
        allCards.forEach(cardOfAll => {
            if (card !== cardOfAll) {
                cardOfAll.classList.remove('cardSelected');
            }
        });
    }

    if (window.innerWidth <= 1250) {
        allCards.forEach(card => {
            card.classList.add('cardSelected');
        });
    }


    if (allCards.length !== 0 && window.innerWidth > 1250) {
        allCards.forEach(card => {
            card.addEventListener('click', () => handleClick(card));
        });
    }


    window.addEventListener('resize', () => {
        if (window.innerWidth <= 1250) {
            allCards.forEach(card => {
                card.classList.add('cardSelected');
                //TODO : remove event listener not working
                card.removeEventListener('click', () => handleClick(card));
            });
        } else {
            allCards.forEach((card, idx) => {
                if (idx !== 0) {
                    card.classList.remove('cardSelected');
                }
                card.addEventListener('click', () => handleClick(card));
            });
        }
    });


    const locationElem = document.getElementById('clock-location');
    if (locationElem) {
        updateHour();
        setInterval(() => {
            updateHour();
        }, 1000);
    }

    const ageElem = document.getElementById('age');
    if (ageElem) {
        ageElem.textContent = Math.floor((new Date() - new Date('2002-04-21')) / 31557600000);
    }
});

