const latestBooksContainer = document.getElementById('latest-books');

const loadData = async () => {
    const response = await fetch('/api/books/latest');
    const data = await response.json();
 
    data.forEach(book => {
        latestBooksContainer.innerHTML += `<div><img src=${book.image}><p>${book.title}</p></div>`
    });
}

loadData();