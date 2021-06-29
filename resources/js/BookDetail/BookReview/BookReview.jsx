import { useState } from 'react';

export default function BookReview(props) {

    console.log(props);

    const { id, book } = props;

    const [values, setValues] = useState({
        rating: 0,
        text: ''
    });

    const handleChange = (event) => {
        setValues(previous_values => {
            return ({...previous_values,
                [event.target.name]: event.target.value
            });
        });
    }

    const handleSubmit = async (event) => {
        // prevent the default behavior of form submission event
        // which is going to another page (or reloading the current one)
        event.preventDefault();

        const response = await fetch(`/api/book/${id}/review`, {
            method: 'POST',
            body: JSON.stringify(values),
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
        })

        const data = await response.json();

        if (data.errors) {
            // display errors ...
        }
    }

    // values in the form
    // const [rating, setRating] = useState(5);
    // const [text, setText] = useState('Leave your text review here...');

    // const handleRatingChange = (event) => {
    //     setRating(event.target.value)
    // }
    // const handleTextChange = (event) => {
    //     setText(event.target.value);
    // }

    // same as above:
    // const id = props.id;
    // const book = props.book;

    return (

        <form className="book-review" action="" onSubmit={ handleSubmit }>

            <h1>Review book "{ book.title }"</h1>

            <div className="form-group">

                <label htmlFor="">Rating</label>
                <input type="number" name="rating" value={ values.rating } onChange={ handleChange } />

            </div>

            <div className="form-group">

                <label htmlFor="text">Text</label>
                <textarea
                    name="text"
                    id="text"
                    cols="30"
                    rows="10"
                    value={ values.text }
                    onChange={ handleChange }
                ></textarea>

            </div>

            <div className="form-group">

                <button>Submit the review</button>

            </div>

        </form>

    )

}
