const searchInput = document.getElementById('search-input');
const searchResultsContainer = document.querySelector('.search__results');

const fetchSearchResults = async (searchValue) => {
    const response = await fetch('/api/books/search?search=' + searchValue);
    const data = await response.json();
 
    searchResultsContainer.innerHTML = '';

    if (searchValue && searchValue !== '') {
        data.forEach(book => {
            searchResultsContainer.innerHTML += `<a href="/book/${book.id}" class="search-results__result">${book.title}</a>`
        });
    }
}

searchInput.addEventListener('input', (e) => {
    fetchSearchResults(e.target.value);
})