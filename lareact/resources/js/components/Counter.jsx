import axios from "axios";
import React, { useState } from "react";

import { createRoot } from "react-dom/client";

export default function Counter() {
    const [count, setCount] = useState(0);

    const decrement = () => {
        setCount(count => count - 1);

        notifyServer();
    };

    const increment = () => {
        setCount(count => count + 1);

        notifyServer();
    };

    const notifyServer = () => {
        axios.post("/count", {
            message: "Counter Updated !"
        });
    };

    return (
        <div>
            <button onClick={decrement}>-</button>

            <span>{count}</span>

            <button onClick={increment}>+</button>
        </div>
    );
}

if (document.getElementById("counter")) {
    const root = createRoot(document.getElementById("counter"))

    root.render(<Counter />);
}