export default function initMusicBlock() {
    const block2Img = document.querySelectorAll('.block2-image');
    const DOM_btn_pause = document.querySelectorAll('.block2-btn-pause');
    const DOM_btn_play = document.querySelectorAll('.block2-btn-play');
    const nextBtn = document.querySelectorAll('.block2-text-subtitle_btns svg:nth-child(3)');
    const DOM_title = document.querySelectorAll('.block2-text-title');
    const DOM_artist = document.querySelectorAll('.block2-text-subtitle span');
    const DOM_duration = document.querySelectorAll('.block2-text-duration');
    const progressBar = document.querySelector('.block2-text-bar_filled');

    const progressBar_mobile = document.querySelector('.progress-line');
    const totalLength = progressBar_mobile.getTotalLength();
    progressBar_mobile.style.strokeDasharray = totalLength;

    const audio = new Audio();
    let playlist = [];
    let currentTrackIndex = 0;
    let isPlaying = false;

    function updateProgress() {
        const duration = audio.duration || 30;
        const current = audio.currentTime;
        const progress = (current / duration) * 100;

        const curMin = Math.floor(current / 60);
        const curSec = Math.floor(current % 60).toString().padStart(2, '0');
        const totMin = Math.floor(duration / 60);
        const totSec = Math.floor(duration % 60).toString().padStart(2, '0');

        DOM_duration.forEach(durationElem => {
            durationElem.textContent = `${curMin}:${curSec} / ${totMin}:${totSec}`;
        });

        progressBar.style.width = `${progress}%`;
        progressBar_mobile.style.strokeDashoffset = totalLength * (1 - progress / 100);
    }

    function updateUI(track) {
        const imageUrl = track.album?.image || track.artists?.[0]?.image || '';
        const previewUrl = track.spotifyPreview;

        block2Img.forEach(img => {
            img.src = imageUrl;
            img.alt = `Dernière écoute : ${track.name}`;

            const wrapper = img.parentElement;
            wrapper.classList.add('loading');
            img.src = imageUrl;
            img.onload = () => wrapper.classList.remove('loading');
        });

        DOM_title.forEach(title => {
            title.textContent = track.name;
            title.title = track.name;
        });

        DOM_artist.forEach(artist => {
            artist.textContent = track.artists.map(a => a.name).join(', ');
            artist.title = track.artists.map(a => a.name).join(', ');
        });

        DOM_duration.forEach(durationElem => {
            durationElem.textContent = '0:00 / 0:00';
        });

        progressBar.style.width = '0%';
        progressBar_mobile.style.strokeDashoffset = totalLength;

        if (previewUrl) {
            audio.src = previewUrl;
        }
    }

    function playTrack() {
        audio.play();
        isPlaying = true;

        DOM_btn_play.forEach(btn => {
            btn.classList.add('playing');
        });

        DOM_btn_pause.forEach(btn => {
            btn.classList.add('playing');
        });
    }

    function pauseTrack() {
        audio.pause();
        isPlaying = false;

        DOM_btn_play.forEach(btn => {
            btn.classList.remove('playing');
        });
        DOM_btn_pause.forEach(btn => {
            btn.classList.remove('playing');
        });
    }

    function loadTrack(index) {
        currentTrackIndex = index % playlist.length;
        const track = playlist[currentTrackIndex];
        updateUI(track);

        // Réinitialise les boutons au chargement
        DOM_btn_play.forEach(btn => {
            btn.classList.remove('playing');
        });

        DOM_btn_pause.forEach(btn => {
            btn.classList.remove('playing');
        });

        audio.addEventListener('loadedmetadata', () => {
            const duration = audio.duration || 30;
            const totMin = Math.floor(duration / 60);
            const totSec = Math.floor(duration % 60).toString().padStart(2, '0');

            DOM_duration.forEach(durationElem => {
                durationElem.textContent = `0:00 / ${totMin}:${totSec}`;
            });

            if (isPlaying) playTrack();
        }, { once: true });
    }

    DOM_btn_play.forEach(btn => {
        btn.addEventListener('click', () => {
            if (!audio.src) return;
            playTrack();
        });
    });

    DOM_btn_pause.forEach(btn => {
        btn.addEventListener('click', () => {
            if (!audio.src) return;
            pauseTrack();
        });
    });

    nextBtn.forEach(btn => {
        btn.addEventListener('click', () => {
            pauseTrack();
            loadTrack((currentTrackIndex + 1) % playlist.length);
        });
    });

    audio.addEventListener('ended', pauseTrack);
    audio.addEventListener('timeupdate', updateProgress);

    fetch('https://api.stats.fm/api/v1/users/ptfred2104/streams/recent')
        .then(res => res.json())
        .then(data => {
            playlist = data.items
                .map(item => item.track)
                .filter(track => track.spotifyPreview); // filtre les pistes sans preview

            if (playlist.length) {
                loadTrack(0);
            }
        })
        .catch(err => console.error('Erreur API:', err));
}
