import './bootstrap';
import React, { useState } from 'react';

const ExampleComponent = () => {
    const [message, setMessage] = useState('Hello from React!');

    return (
        <div>
            <h1>{message}</h1>
            <button onClick={() => setMessage('New Message')}>
                Change Message
            </button>
        </div>
    );
};

export default ExampleComponent;