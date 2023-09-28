function pokaz(id) {
    const articles = document.querySelectorAll('div[id^="artykul_"]');
    articles.forEach(article => {
        article.style.display = 'none';
    });
    const selectedArticle = document.getElementById(id);
    selectedArticle.style.display = 'block';
}