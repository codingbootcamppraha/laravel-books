import { useEffect, useState } from 'react';
import { Switch, Route } from 'react-router-dom';

import Login from '../Login/Login';
import Logout from '../Logout/Logout';
import Register from '../Register/Register';

export default function App() {

    const [user, setUser] = useState(null);

    const loadUsersData = async () => {

        const response = await fetch('/api/user', {
            headers: {
                'Accept': 'application/json'
            }
        });
        const data = await response.json();

        console.log(data);

    }

    useEffect(() => {

        // load the current users data
        // to find out if he's logged in or not
        loadUsersData();

    }, []);

    return (
        user ? (
            <Logout />
        ) : (
            <Switch>
                <Route exact path="/sign-in">
                    <Login />
                </Route>
                <Route exact path="/sign-up">
                    <Register />
                </Route>
            </Switch>
        )
    )
}