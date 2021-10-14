import { Button } from '@mui/material';
import React, { Fragment, useEffect } from 'react';
import ReactDOM from 'react-dom';
import DefaultLayout from './layouts/Layout';
function App(props) {
    const {test} = props
    return (
        <React.Fragment>
            {!test?<DefaultLayout />:<div>{test}</div>}
            
        </React.Fragment>

    );
}

export default App;