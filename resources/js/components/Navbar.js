import React from "react";

const Navbar = () => {
    const isAuthenticated = false; // Replace with actual authentication check
    const userName = "John Doe"; // Replace with actual user data
    const cartItems = 3; // Replace with actual cart count

    return (
        <nav className="navbar navbar-expand-lg navbar-light bg-light">
            <div className="container-fluid">
                {/* Toggle Button for Mobile */}
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarNav">
                    {/* Navigation Links */}
                    <ul className="navbar-nav me-auto">
                        <li className="nav-item"><a className="nav-link" href="/">Home</a></li>
                        <li className="nav-item"><a className="nav-link" href="/men">Men</a></li>
                        <li className="nav-item"><a className="nav-link" href="/women">Women</a></li>
                        <li className="nav-item"><a className="nav-link" href="/sale">Sale</a></li>
                    </ul>

                    {/* Search Bar */}
                    <form className="d-flex me-3">
                        <input className="form-control me-2" type="search" placeholder="Search" />
                        <button className="btn btn-outline-dark" type="submit">
                            <i className="bi bi-search"></i>
                        </button>
                    </form>

                    {/* Icons: Cart & Profile */}
                    <ul className="navbar-nav">
                        {/* Cart Icon */}
                        <li className="nav-item">
                            <a className="nav-link position-relative" href="/cart">
                                <i className="bi bi-bag"></i>
                                {cartItems > 0 && (
                                    <span className="badge bg-danger position-absolute top-0 start-100 translate-middle">
                                        {cartItems}
                                    </span>
                                )}
                            </a>
                        </li>

                        {/* Profile Dropdown */}
                        <li className="nav-item dropdown">
                            {isAuthenticated ? (
                                <>
                                    <a className="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                        <i className="bi bi-person"></i> {userName}
                                    </a>
                                    <ul className="dropdown-menu dropdown-menu-end">
                                        <li><a className="dropdown-item" href="/myaccount">My Account</a></li>
                                        <li><a className="dropdown-item" href="/my-purchase">My Purchases</a></li>
                                        <li><a href="/delivery-address" className="dropdown-item">My Delivery Address</a></li>
                                        <li><hr className="dropdown-divider" /></li>
                                        <li>
                                            <a href="#" className="dropdown-item text-danger"
                                                onClick={() => console.log("Logout clicked")}>
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </>
                            ) : (
                                <a className="nav-link" href="/login">
                                    <i className="bi bi-person"></i> Login
                                </a>
                            )}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    );
};

export default Navbar;
