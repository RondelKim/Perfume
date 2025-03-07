import React from "react";
import { createRoot } from "react-dom/client";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Homepage from "./homepage";
import Login from "./login";
import Register from "./register";
import Men from "./men";  // Import Men.js

export default function Routers() {
    return (
        <Router>
            <Routes>
                {/* Pages */}
                <Route path="/" element={<Homepage />} />
                <Route path="/login" element={<Login />} />
                <Route path="/register" element={<Register />} />
                <Route path="/men" element={<Men />} />  {/* Men Page Route */}
            </Routes>
        </Router>
    );
}

if (document.getElementById("root")) {
    const container = document.getElementById("root");
    const root = createRoot(container);
    root.render(<Routers />);
}
