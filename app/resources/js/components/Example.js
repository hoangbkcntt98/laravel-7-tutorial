import { Button } from '@mui/material';
import React, { Fragment, useEffect } from 'react';
import ReactDOM from 'react-dom';
import MyDrawer from './MyDrawer';
function Example() {

    return (
        <React.Fragment>
            <div className="row">
                <div className="col-sm-6 red">Hello</div>
                <div className="col-sm-6">Hello 1</div>
            </div>
            <Button variant="contained">Hello </Button>
            <MyDrawer></MyDrawer>
        </React.Fragment>

    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
