import React, {Component} from 'react'
import ReactDOM from 'react-dom';

class Resortable extends Component {

    render() {
        return (
            <div className={"resortable-container"}>
                hey its on the page
            </div>
        )
    }
}

export default Resortable

if (document.getElementById('resortable')) {
    ReactDOM.render(<Resortable />, document.getElementById('resortable'));
}