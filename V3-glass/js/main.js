import { animateGradients } from './background.js';
import { updateHour } from './clock.js';
import './music.js';

window.addEventListener('load', () => {
    fetch('https://api.github.com/repos/Fredray-21/Portfolio/commits/main')
        .then(response => response.json())
        .then(data => {
            const elem = document.getElementById('commitHash')
            elem.textContent = data.sha.slice(0, 7) + '...';
            elem.href = data.html_url;
        })
        .catch(error => console.error('Erreur lors de la requête API :', error));


    fetch('https://api.frederic-dabadie.fr/duolingo-streak')
    .then(response => response.json())
    .then(data => {
        const elem = document.querySelector('#duolingoStreak > #streak')
        const duolingoStreak = data.streak;
        elem.textContent = duolingoStreak;
    })
    .catch(error => console.error('Erreur lors de la requête API :', error));


    const allCards = document.querySelectorAll('.cards .card');
    allCards.forEach(card => {
        card.addEventListener('click', () => {
            card.classList.add('cardSelected');

            allCards.forEach(cardOfAll => {
                if (card !== cardOfAll) {
                    cardOfAll.classList.remove('cardSelected');
                }
            });
        });
    });

    
    animateGradients();
    updateHour();
    setInterval(() => {
        updateHour();
    }, 1000);
});

