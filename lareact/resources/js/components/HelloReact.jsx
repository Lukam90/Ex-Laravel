import React from "react";
import ReactDOM from "react-dom";

import { createRoot } from "react-dom/client";

export default function HelloReact() {
    return (
        <h1>Hello React !</h1>
    );
}

if (document.getElementById("hello-react")) {
    const root = createRoot(document.getElementById("hello-react"))

    root.render(<HelloReact />);
}