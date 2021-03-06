import { useEffect, useState } from 'react';
import { Switch, Route } from 'react-router-dom';

import Login from '../Login/Login';
import Logout from '../Logout/Logout';
import Register from '../Register/Register';

export default function App() {

    const [user, setUser] = useState(null);

    const loadUsersData = async () => {

        const token = localStorage.getItem('my_token');
        const response = await fetch('/api/user', {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Authorization': `Bearer ${token}`
            }
        });
        const data = await response.json();

        console.log(data);
        if (data && data.message === 'success') {
            console.log('in');
            setUser(data);
        } else {
            setUser(null);
        }

    }

    useEffect(() => {

        // load the current users data
        // to find out if he's logged in or not
        loadUsersData();

    }, []);

    return (
        user ? (
            <Logout logoutCallback={() => {
                setUser(null);
            }}/>
        ) : (
            <Switch>
                <Route exact path="/sign-in">
                    <Login loginCallback={ (user) => {
                        setUser(user);
                    }}/>
                </Route>
                <Route exact path="/sign-up">
                    <Register />
                </Route>
            </Switch>
        )
    )
}
