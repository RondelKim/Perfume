import React from "react";
import Logo from "../../imgs/logo.svg"; // Adjust path if necessary
import "../../sass/navbar.scss"; // Import SCSS relative to js/components/

const Navbar = () => {
    const isAuthenticated = false; // Replace with actual authentication check
    const cartItems = 3; // Replace with actual cart count

    return (
        <nav className="navbar">
            <div className="navbar-container">
                {/* Logo */}
                <div className="navbar-logo">
                    <img src={Logo} alt="Prime Logo" className="logo-img" />
                </div>

                {/* Navigation Links */}
                <ul className="navbar-links">
                    <li className="nav-item"><a href="/" className="nav-link">Home</a></li>
                    <li className="nav-item"><a href="/on-sale" className="nav-link">On Sale</a></li>
                    <li className="nav-item"><a href="/new-arrivals" className="nav-link">New Arrivals</a></li>
                </ul>

                {/* Search Bar */}
                <div className="navbar-search">
                    <input
                        type="text"
                        placeholder="Search for products..."
                        className="search-input"
                    />
                </div>

                {/* All Products Button */}
                <button className="all-products-btn">All Products</button>

                {/* Icons: Cart & Profile */}
                <div className="navbar-icons">
                    <a href="/cart" className="nav-icon">
                        <i className="bi bi-bag"></i>
                        {cartItems > 0 && (
                            <span className="badge">{cartItems}</span>
                        )}
                    </a>
                    <a href={isAuthenticated ? "#" : "/login"} className="nav-icon">
                        <i className="bi bi-person"></i>
                    </a>
                </div>
            </div>
        </nav>
    );
};

export default Navbar;