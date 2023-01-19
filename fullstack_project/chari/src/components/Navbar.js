import { Link } from "react-router-dom";
import React from "react";

export default function Navbar() {
  return (
    <>
      {/* <!-- Spinner Start --> */}
      {/* <div
        id="spinner"
        className="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div className="spinner-grow text-primary" role="status"></div>
      </div> */}
      {/* <!-- Spinner End --> */}

      {/* <!-- Navbar Start --> */}
      <div
        className="container-fluid fixed-top px-0 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div className="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
          <div className="col-lg-6 px-5 text-start">
            <small>
              <i className="fa fa-map-marker-alt me-2"></i>123 Polton ,
              Dhaka-1210,
            </small>
            <small className="ms-4">
              <i className="fa fa-envelope me-2"></i>info@sadaka.com
            </small>
          </div>
          <div className="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <a className="text-white-50 ms-3" href="a">
              <i className="fab fa-facebook-f"></i>
            </a>
            <a className="text-white-50 ms-3" href="a">
              <i className="fab fa-twitter"></i>
            </a>
            <a className="text-white-50 ms-3" href="a">
              <i className="fab fa-linkedin-in"></i>
            </a>
            <a className="text-white-50 ms-3" href="a">
              <i className="fab fa-instagram"></i>
            </a>
          </div>
        </div>

        <nav
          className="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn"
          data-wow-delay="0.1s"
        >
          <a href="index.html" className="navbar-brand ms-4 ms-lg-0">
            <h1 className="fw-bold text-primary m-0">
              TCLD's<span className="text-white">Canteen</span>
            </h1>
          </a>
          <button
            type="button"
            className="navbar-toggler me-4"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarCollapse">
            <ul className="navbar-nav ms-auto p-4 p-lg-0">
              <li>
                <Link className="nav-item nav-link " to="/">
                  HOME
                </Link>
              </li>

              <li>
                <Link className="nav-item nav-link" to="/about">
                  About
                </Link>
              </li>

              <li>
                <Link className="nav-item nav-link" to="/causes">
                  Causes
                </Link>
              </li>

              <div className="nav-item dropdown">
                <Link
                  to="a"
                  className="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                >
                  Pages
                </Link>
                <div className="dropdown-menu m-0">
                  <Link to="/service" className="dropdown-item">
                    Service
                  </Link>
                  <Link to="/category" className="dropdown-item">
                    Category
                  </Link>
                  <Link to="/team" className="dropdown-item">
                    Our Team
                  </Link>
                  <Link to="/register" className="dropdown-item">
                    Register-Form
                  </Link>
                </div>
              </div>
              <Link to="/contact" className="nav-item nav-link">
                Contact
              </Link>
              <Link to="customer" className="nav-item nav-link">
                Customers List
              </Link>
              <Link to="order" className="nav-item nav-link">
                Order Here
              </Link>
            </ul>
            <div className="d-none d-lg-flex ms-2">
              <a
                className="btn btn-outline-primary py-2 px-3"
                // href="http://localhost:8080/users/signin"
                href="http://localhost/ReactJs/youthappam/login.php"
                // href="youthappam/login.php"
              >
                Admin
                <div className="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                  <i className="fa fa-arrow-right"></i>
                </div>
              </a>
            </div>
          </div>
        </nav>
      </div>
      {/* <!-- Navbar End --> */}
    </>
  );
}
