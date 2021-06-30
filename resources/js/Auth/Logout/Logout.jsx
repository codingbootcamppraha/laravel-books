export default function Logout() {

    const handleClick = async (event) => {
        event.preventDefault();

        const response = await fetch('/logout', {
            method: 'post',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })

        const response_data = await response.json();

        // do something with the fact that the user is logged out
    }

    return (
        <button onClick={ handleClick }>Logout</button>
    )

}