import { animate } from "@motionone/dom";

export default async function initAnimation() {
    document.body.style.overflow = 'hidden';

    await animate("#block1", {
        opacity: [0, 1],
        y: [-100, 0]
    }, {
        duration: 0.5,
        easing: "ease-out",
        fill: 'forwards'
    }).finished;

    document.querySelectorAll("#block2").forEach(block => {
        const isMobile = window.matchMedia('(max-width: 900px)').matches;

        if (isMobile) {
            document.body.style.overflow = 'auto';
        }
        animate(block, {
            x: isMobile ? [150, 20, 0] : [-150, 20, 0],
            opacity: [0, 1],
            zIndex: [1, 1, 2],
        }, {
            duration: 0.8,
            easing: "ease-out",
            fill: 'forwards'
        });
    });

    await animate("#block3", {
        y: [100, 0],
        opacity: [0, 1]
    }, {
        duration: 0.4,
        easing: "ease-out",
        fill: 'forwards'
    }).finished;

    await Promise.all(
        Array.from(document.querySelectorAll("#block4")).map(block => {
            const isMobile = !!block.closest('.mobile-only');
            return animate(block, {
                x: isMobile ? [-500, 0] : [500, 0],
                opacity: [0, 1]
            }, {
                duration: 0.6,
                easing: "ease-out",
                fill: 'forwards'
            }).finished;
        })
    );

    await animate("#block5", {
        opacity: [0, 1],
        scale: [0.95, 1],
        rotate: [45, 0],
    }, {
        duration: 0.4,
        easing: "ease-out",
        fill: 'forwards'
    }).finished;


    const isMobile = window.matchMedia('(max-width: 900px)').matches;
    if (isMobile) {
        await animate("#block5_bis", {
            opacity: [0, 1],
            scale: [0.95, 1],
            rotate: [45, 0],
        }, {
            duration: 0.4,
            easing: "ease-out",
            fill: 'forwards'
        }).finished;
    }

    document.querySelector("#block5").style.zIndex = "2";

    await animate("#block6", {
        y: [40, 0],
        opacity: [0, 1],
    }, {
        duration: 0.25,
        easing: "ease-out",
        fill: 'forwards'
    }).finished;

    const links = document.querySelectorAll('#nav a');

    const animations = Array.from(links).map((link, index) =>
        link.animate(
            {
                transform: ['translateY(50px)', 'translateY(0)'],
                opacity: [0, 1],
            },
            {
                duration: 350,
                easing: 'ease-out',
                delay: index * 100,
                fill: 'forwards'
            }
        ).finished
    );

    await Promise.all(animations);

    document.querySelector("#nav").style.zIndex = "5";
    document.body.style.overflow = 'auto';
}
