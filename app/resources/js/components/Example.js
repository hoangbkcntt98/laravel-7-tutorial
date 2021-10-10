import React, { Fragment, useEffect } from 'react';
import ReactDOM from 'react-dom';

function Example() {
    
    return (
       <div>This is a react component 3</div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
