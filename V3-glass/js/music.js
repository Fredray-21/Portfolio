let spotifyPreviewVariable = null;
const containerDiskElem = document.getElementById('containerDisk');
const musicDiskElem = document.getElementById('disk');
if (containerDiskElem) {
    fetch('https://api.stats.fm/api/v1/users/ptfred2104/streams/recent')
        .then(response => response.json())
        .then(data => {
            const { albums, artists, name, spotifyPreview } = data.items[0].track;

            const musicTitleElem = document.getElementById('musicTitle');
            const musicArtistElem = document.getElementById('musicArtist');
            const musicAlbumElem = document.getElementById('musicAlbum');
            const musicDiskElem = document.getElementById('disk');

            musicTitleElem.textContent = name;
            musicArtistElem.textContent = "Of: " + [...new Set(artists.map(artist => artist.name))].join(', ');
            musicAlbumElem.textContent = "Album: " + albums[0].name;
            musicAlbumElem.title = albums[0].name;

            const urlImage = albums[0].image ? albums[0].image : artists[0].image;
            musicDiskElem.style.backgroundImage = `url('${urlImage}')`;

            spotifyPreviewVariable = spotifyPreview;
        })
        .catch(error => console.error('Erreur lors de la requête API :', error));

    const audio = new Audio();
    containerDiskElem.addEventListener("click", () => {
        musicDiskElem.classList.toggle('diskAction');

        if (musicDiskElem.classList.contains('diskAction') && spotifyPreviewVariable !== null) {
            audio.src = spotifyPreviewVariable;
            audio.play();
            audio.onended = () => {
                musicDiskElem.classList.remove('diskAction');
            }
        }
        else {
            audio.pause();
        }
    });
}
