const searchInput = document.getElementById('search');
const searchResults = document.getElementById('search-results');

searchInput.addEventListener('input', async (e) => {
    searchResults.innerHTML = '';
    let value = e.target.value;

    if (value && value != '') {
        const response = await fetch('/api/books/search?search='+value)
        const data = await response.json()
    
        data.forEach(book => {
            searchResults.innerHTML += `<p>${book.title}</p>`
        });
    }
}) 
