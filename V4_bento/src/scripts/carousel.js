import EmblaCarousel from 'embla-carousel'

export default function initCarousel() {
    const emblaNodes = document.querySelectorAll('.slider')
    const destroyFns = []

    emblaNodes.forEach((emblaNode) => {
        const isMobile = !!emblaNode.closest('.mobile-only')
        const isDesktop = !isMobile

        const options = { loop: false, startIndex: 0, dragFree: true, align: 'start'}
        const emblaApi = EmblaCarousel(emblaNode, options)

        let prevBtn = null
        let nextBtn = null

        if (isDesktop) {
            const containerParent = emblaNode.closest('.desktop-only');
            prevBtn = containerParent?.querySelector('.slider__button--prev') || null
            nextBtn = containerParent?.querySelector('.slider__button--next') || null
        }

        const removePrevNextBtnsClickHandlers = prevBtn && nextBtn
            ? addPrevNextBtnsClickHandlers(emblaApi, prevBtn, nextBtn)
            : () => { }

        const removeTogglePrevNextBtnsActive = prevBtn && nextBtn
            ? addTogglePrevNextBtnsActive(emblaApi, prevBtn, nextBtn)
            : () => { }

        destroyFns.push(() => {
            removePrevNextBtnsClickHandlers()
            removeTogglePrevNextBtnsActive()
            emblaApi.destroy()
        })
    })

    return () => destroyFns.forEach((fn) => fn())
}


const addTogglePrevNextBtnsActive = (emblaApi, prevBtn, nextBtn) => {
    if (!prevBtn || !nextBtn) return () => { }

    const togglePrevNextBtnsState = () => {
        if (emblaApi.canScrollPrev()) prevBtn.removeAttribute('disabled')
        else prevBtn.setAttribute('disabled', 'disabled')

        if (emblaApi.canScrollNext()) nextBtn.removeAttribute('disabled')
        else nextBtn.setAttribute('disabled', 'disabled')
    }

    emblaApi
        .on('select', togglePrevNextBtnsState)
        .on('init', togglePrevNextBtnsState)
        .on('reInit', togglePrevNextBtnsState)

    return () => {
        prevBtn.removeAttribute('disabled')
        nextBtn.removeAttribute('disabled')
    }
}

export const addPrevNextBtnsClickHandlers = (emblaApi, prevBtn, nextBtn) => {
    if (!prevBtn || !nextBtn) return () => { }

    const scrollPrev = () => emblaApi.scrollPrev()
    const scrollNext = () => emblaApi.scrollNext()

    prevBtn.addEventListener('click', scrollPrev, false)
    nextBtn.addEventListener('click', scrollNext, false)

    const removeTogglePrevNextBtnsActive = addTogglePrevNextBtnsActive(
        emblaApi,
        prevBtn,
        nextBtn
    )

    return () => {
        removeTogglePrevNextBtnsActive()
        prevBtn.removeEventListener('click', scrollPrev, false)
        nextBtn.removeEventListener('click', scrollNext, false)
    }
}
