import React, { useState } from "react";
import { Link } from "react-router-dom";


const Register = () => {
  const [formData, setFormData] = useState({
    firstName: "",
    middleName: "",
    lastName: "",
    email: "",
    password: "",
    role: "Seller",
    gender: "Male",
    suffix: "Suffix",
  });

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleRegister = (e) => {
    e.preventDefault();
    console.log("Register clicked", formData);
  };

  return (
    <div className="register-wrapper">
      <div className="register-card">
        <div className="register-content">
          <h2 className="register-title">Create New Account</h2>
          <form onSubmit={handleRegister} className="register-form-container">
            <div className="register-row">
              <input
                type="text"
                name="firstName"
                placeholder="First Name"
                value={formData.firstName}
                onChange={handleChange}
                required
              />
              <input
                type="text"
                name="middleName"
                placeholder="Middle Name"
                value={formData.middleName}
                onChange={handleChange}
              />
            </div>
            <input
              type="text"
              name="lastName"
              placeholder="Last Name"
              value={formData.lastName}
              onChange={handleChange}
              required
            />
            <input
              type="email"
              name="email"
              placeholder="Email"
              value={formData.email}
              onChange={handleChange}
              required
            />
            <div className="register-password-group">
              <input
                type="password"
                name="password"
                placeholder="Password"
                value={formData.password}
                onChange={handleChange}
                required
              />
              <span className="password-toggle">👁️</span>
            </div>
            <div className="register-dropdowns">
              <select name="role" value={formData.role} onChange={handleChange}>
                <option>Seller</option>
                <option>Customer</option>
              </select>
              <select name="gender" value={formData.gender} onChange={handleChange}>
                <option>Male</option>
                <option>Female</option>
              </select>
              <select name="suffix" value={formData.suffix} onChange={handleChange}>
                <option>Suffix</option>
                <option>Jr.</option>
                <option>Sr.</option>
              </select>
            </div>
            <button type="submit" className="register-submit-btn">Register</button>
          </form>
        </div>
        <div className="register-image-section">
        </div>
      </div>
    </div>
  );
};

export default Register;
