let directionX = 1;
let directionY = 1;
const speed = 1;

export const animateGradients = () => {
    const object = document.getElementById('glass');
    const svgDocument = object.contentDocument;
    if (svgDocument) {
        const gradient = svgDocument.querySelector('radialGradient');
        let currentPositionX = parseFloat(gradient.getAttribute('cx'));
        let currentPositionY = parseFloat(gradient.getAttribute('cy'));
        let newPositionX = currentPositionX + (speed * directionX);
        let newPositionY = currentPositionY + (speed * directionY);

        newPositionX = newPositionX < 0 ? 0 : (newPositionX > window.innerWidth ? window.innerWidth : newPositionX);
        newPositionY = newPositionY < 0 ? 0 : (newPositionY > window.innerHeight ? window.innerHeight : newPositionY);

        gradient.setAttribute('cx', newPositionX);
        gradient.setAttribute('cy', newPositionY);

        directionX = (newPositionX <= 0 || newPositionX >= window.innerWidth) ? -directionX : directionX;
        directionY = (newPositionY <= 0 || newPositionY >= window.innerHeight) ? -directionY : directionY;
    }
    requestAnimationFrame(animateGradients);
}

