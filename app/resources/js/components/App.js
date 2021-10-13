import { Button } from '@mui/material';
import React, { Fragment, useEffect } from 'react';
import ReactDOM from 'react-dom';
import MiniDrawer from './Layout';
function App() {

    return (
        <React.Fragment>
            <MiniDrawer/>
        </React.Fragment>

    );
}

export default App;

if (document.getElementById('example')) {
    ReactDOM.render(<App />, document.getElementById('example'));
}
