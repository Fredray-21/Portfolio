export default async function initCommitHash() {
    await fetch('https://api.github.com/repos/Fredray-21/Portfolio/commits/main')
        .then(response => response.json())
        .then(data => {
            const elem = document.querySelectorAll('.commitHash');
            if (elem.length === 0) return;
            elem.forEach((elem) => {
                elem.textContent = data.sha.slice(0, 7) + '...';
                elem.href = data.html_url;
            });
        })
        .catch(error => console.error('Erreur lors de la requête API :', error));
}

