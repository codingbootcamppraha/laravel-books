const fetchData = async () => {
    const response = await fetch('/api/books/latest');
    const data = await response.json();
    console.log(data)

    generateList(data)

    return data;
}

const generateList = (data) => {
    const listElement = document.getElementById('latest-books');

    if (listElement) {
        data.forEach(book => {
            listElement.innerHTML += `<div>
            <img src="${book.image}" /><br>
            ${book.title}
            </div>`
        });
    }
}

fetchData();