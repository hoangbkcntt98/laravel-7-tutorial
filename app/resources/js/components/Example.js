import React, { Fragment, useEffect } from 'react';
import ReactDOM from 'react-dom';

function Example() {

    return (
        <React.Fragment>
            <div className="row">
                <div className="col-sm-6 red">Hello</div>
                <div className="col-sm-6">Hello 1</div>
            </div>

        </React.Fragment>

    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
