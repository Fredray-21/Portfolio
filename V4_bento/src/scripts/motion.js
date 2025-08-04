const { animate } = await import('@motionone/dom');

export default async function initMotions() {

    const hoverEffects = {
        "#block1": { scale: 1.05, x: 10, rotateZ: -1.5 },
        "#block2": { scale: 1.03, rotateZ: 2 },
        "#block3": { scale: 1.08, rotateY: 5 },
        "#block4": { scale: 1.04, y: -4 },
        "#block5": { scale: 1.04, rotateZ: -2 },
        "#block6": { scale: 1.1, rotateZ: -2, x: 4 },
    };

    for (const [selector, effect] of Object.entries(hoverEffects)) {
        const el = document.querySelector(`.desktop-only ${selector}`);

        el.addEventListener("mouseenter", () => {
            animate(el, effect, {
                duration: 0.3,
                easing: "ease-out"
            });
        });

        el.addEventListener("mouseleave", () => {
            // Revenir à l'état normal
            const reset = {};
            for (const prop in effect) {
                reset[prop] = 0; // sauf scale
                if (prop === "scale") reset[prop] = 1;
            }

            animate(el, reset, {
                duration: 0.3,
                easing: "ease-out"
            });
        });
    };

    // Animation des liens
    const nav = document.querySelector('#nav');
    const block1 = document.querySelector('#block1');

    nav.addEventListener('mouseenter', () => {
        animate(block1, { x: 15 }, {
            duration: 0.4,
            easing: 'ease-out',
        });
    });

    nav.addEventListener('mouseleave', () => {
        animate(block1, { x: 0 }, {
            duration: 0.4,
            easing: 'ease-out',
        });
    });

}
