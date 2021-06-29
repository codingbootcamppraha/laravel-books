import React, { useState, useEffect } from "react";
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link,
    useParams
} from "react-router-dom";

import BookDetail from '../BookDetail/BookDetail.jsx';
import BookReview from '../BookReview/BookReview.jsx';

export default function App() {

    let { bookId } = useParams();

    const [book, setBook] = useState(null);

    const loadBook = async () => {
        const response = await fetch('/api/book/' + bookId, {
            headers: {
                'Accept': 'application/json'
            }
        });
        const data = await response.json();

        setBook(data);
    }

    useEffect(() => {

        loadBook();

    }, []);

    if (book === null) {

        return 'Loading...';

    } else {

        return (
            <Switch>
                <Route path="/book/:id/review">
                    <BookReview id={ bookId } book={ book } />
                </Route>
                <Route path="/book/:id">
                    <BookDetail id={ bookId } book={ book } />
                </Route>
            </Switch>
        )

    }

}