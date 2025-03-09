import React, { useEffect, useState } from "react";
import Navbar from "./Navbar";
import "./../../sass/homepage.scss";

const Homepage = () => {
    const [newArrivals, setNewArrivals] = useState([]);
    const [topSelling, setTopSelling] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        fetch("/api/homepage")
            .then(response => response.json())
            .then(data => {
                console.log("API Response:", data);
                if (data.newArrivals && data.topSelling) {
                    setNewArrivals(data.newArrivals);
                    setTopSelling(data.topSelling);
                }
                setLoading(false);
            })
            .catch(error => {
                console.error("Error fetching data:", error);
                setLoading(false);
            });
    }, []);

    const renderProductCard = (product) => {
        const price = Number(product.price) || 0;
        const discount = Number(product.discount) || 0;
        const finalPrice = price - discount;

        return (
            <div key={product.id} className="product-card">
                <img src={`/images/products/${product.image}`} alt={product.name} />
                <h3>{product.name}</h3>
                <p className="price">
                    {discount > 0 ? (
                        <>
                            <span className="new-price">${finalPrice.toFixed(0)}</span>
                            <span className="old-price">${price.toFixed(0)}</span>
                            <span className="discount-badge">
                                -{Math.round((discount / price) * 100)}%
                            </span>
                        </>
                    ) : (
                        <span className="new-price">${price.toFixed(0)}</span>
                    )}
                </p>
            </div>
        );
    };

    return (
        <div className="homepage">
            {/* Navbar */}
            <Navbar />

            {/* Header Banner */}
            <section className="header-banner">
                <h1>FIND SCENTS THAT MATCHES YOUR STYLE</h1>
                <div className="counter-section">
                    <div className="counter-item">
                        <span className="counter-number">200+</span>
                        <span className="counter-label">Perfumes</span>
                    </div>
                    <div className="counter-item">
                        <span className="counter-number">2,000</span>
                        <span className="counter-label">Reviews</span>
                    </div>
                    <div className="counter-item">
                        <span className="counter-number">30,000+</span>
                        <span className="counter-label">Happy Customers</span>
                    </div>
                </div>
            </section>

            {/* Sale Section */}
            <section className="sale-section">
                <h2 className="section-title">SALE</h2>
                {loading ? (
                    <p>Loading...</p>
                ) : (
                    <div className="product-grid">
                        {topSelling.map(renderProductCard)}
                    </div>
                )}
                <div className="view-all-container">
                    <button className="view-all-button">View All</button>
                </div>
            </section>

            {/* New Arrivals Section */}
            <section className="new-arrivals-section">
                <h2 className="section-title">New Arrival</h2>
                {loading ? (
                    <p>Loading...</p>
                ) : (
                    <div className="product-grid">
                        {newArrivals.map(renderProductCard)}
                    </div>
                )}
                <div className="view-all-container">
                    <button className="view-all-button">View All</button>
                </div>
            </section>

            {/* Subscription Section */}
            <section className="subscription-section">
                <h2>STAY UP TO DATE OUR LATEST OFFERS</h2>
                <form className="subscription-form" onSubmit={(e) => e.preventDefault()}>
                    <input type="email" placeholder="Enter your email address" required />
                    <button type="submit">SUBSCRIBE</button>
                </form>
                <div className="footer-logo">
                    <p>PRIME PICKUP</p>
                </div>
            </section>
        </div>
    );
};

export default Homepage;