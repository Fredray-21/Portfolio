
import initMusicBlock from './scripts/music.js';
import initAnimation from './scripts/animation.js';
import initMotions from './scripts/motion.js';
import initCommitHash from './scripts/github.js';
import initCarousel from './scripts/carousel.js';

initCarousel();
initCommitHash();
initMusicBlock();
initAnimation();
initMotions();

const DOM_ages = document.querySelectorAll('.age');

if(DOM_ages.length > 0) {
    DOM_ages.forEach((DOM_age) => {
        DOM_age.textContent = new Date(+new Date - 1019347200000).getUTCFullYear() - 1970 + ' ans';
    });
}
