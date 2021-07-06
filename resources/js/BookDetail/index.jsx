import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
} from "react-router-dom";

import App from './App/App.jsx';

ReactDOM.render(
<Router>
    <Switch>
        <Route path="/book/:bookId" children={ <App /> } />
    </Switch>
</Router>
, document.getElementById('app'));