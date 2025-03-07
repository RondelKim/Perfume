import { useEffect, useState } from "react";
import Navbar from "./Navbar"; 


const Homepage = () => {
    const [newArrivals, setNewArrivals] = useState([]);
    const [topSelling, setTopSelling] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        fetch("/api/homepage")

            .then(response => response.json())
            .then(data => {
                console.log("API Response:", data); // 🛠 Debug API Response
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

    return (
        <>
            {/* ✅ Navbar at the top */}
            <Navbar />

            <div className="container mx-auto py-12">
                {/* New Arrivals */}
                <h2 className="text-center font-bold text-4xl mb-8 uppercase">NEW ARRIVALS</h2>
                <div className="grid grid-cols-4 gap-8 justify-items-center">
                    {newArrivals.map((product) => {
                        const price = Number(product.price) || 0;
                        const discount = Number(product.discount) || 0;
                        const finalPrice = price - discount;

                        return (
                            <div key={product.id} className="product-card flex flex-col items-center">
                                <img src={`/images/products/${product.image}`} alt={product.name} className="w-40 h-40 object-contain" />
                                <h3 className="mt-2 font-bold text-lg text-center">{product.name}</h3>

                                {/* Rating */}
                                <div className="rating mt-1 flex items-center">
                                    {[...Array(5)].map((_, index) => (
                                        <i key={index} className={`fa-star ${index < Math.floor(product.rating) ? "fas text-yellow-500" : "far text-gray-400"}`}></i>
                                    ))}
                                    <span className="ml-2 text-sm text-gray-600">{product.rating}/5</span>
                                </div>

                                {/* Price & Discount */}
                                <p className="mt-2 text-center text-xl font-semibold flex items-center space-x-2">
                                    {discount > 0 ? (
                                        <>
                                            <span className="new-price text-2xl text-black font-bold">${finalPrice.toFixed(0)}</span>
                                            <span className="old-price text-gray-400 text-sm line-through">${price.toFixed(0)}</span>
                                            <span className="discount-badge bg-red-100 text-sm px-2 py-1 rounded-full text-red-500 font-bold">
                                                -{Math.round((discount / price) * 100)}%
                                            </span>
                                        </>
                                    ) : (
                                        <span className="new-price text-2xl text-black font-bold">${price.toFixed(0)}</span>
                                    )}
                                </p>
                            </div>
                        );
                    })}
                </div>

                {/* View All Button */}
                <div className="flex justify-center mt-6">
                    <button className="button toggle-button-new-arrivals">View All</button>
                </div>

                <hr className="my-12" />

                {/* Top Selling */}
                <h2 className="text-center font-bold text-4xl mb-8 uppercase">TOP SELLING</h2>
                <div className="grid grid-cols-4 gap-8 justify-items-center">
                    {topSelling.map((product) => {
                        const price = Number(product.price) || 0;

                        return (
                            <div key={product.id} className="product-card flex flex-col items-center">
                                <img src={`/images/products/${product.image}`} alt={product.name} className="w-40 h-40 object-contain" />
                                <h3 className="mt-2 font-bold text-lg text-center">{product.name}</h3>

                                {/* Rating */}
                                <div className="rating mt-1 flex items-center">
                                    {[...Array(5)].map((_, index) => (
                                        <i key={index} className={`fa-star ${index < Math.floor(product.rating) ? "fas text-yellow-500" : "far text-gray-400"}`}></i>
                                    ))}
                                    <span className="ml-2 text-sm text-gray-600">{product.rating}/5</span>
                                </div>

                                {/* Price */}
                                <p className="mt-2 text-center text-xl font-semibold">
                                    <span className="new-price text-2xl text-black font-bold">${price.toFixed(0)}</span>
                                </p>
                            </div>
                        );
                    })}
                </div>

                {/* View All Button */}
                <div className="flex justify-center mt-6">
                    <button className="button toggle-button-top-selling">View All</button>
                </div>
            </div>
        </>
    );
};

export default Homepage;
