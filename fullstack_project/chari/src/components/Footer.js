import React from "react";

export default function Footer() {
  return (
    <div>
      {/* <!-- Footer Start --> */}
      <div
        className="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div className="container py-5">
          <div className="row g-5">
            <div className="col-lg-3 col-md-6">
              <h1 className="fw-bold text-primary mb-4">
                TCLD's<span className="text-white">Canteen</span>
              </h1>
              <p>
                It's a non profitable organization..just to help other people
                who are the part of our society. Its our duty.
              </p>
              <div className="d-flex pt-2">
                <a className="btn btn-square me-1" href="a">
                  <i className="fab fa-twitter"></i>
                </a>
                <a className="btn btn-square me-1" href="a">
                  <i className="fab fa-facebook-f"></i>
                </a>
                <a className="btn btn-square me-1" href="a">
                  <i className="fab fa-youtube"></i>
                </a>
                <a className="btn btn-square me-0" href="a">
                  <i className="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
            <div className="col-lg-3 col-md-6">
              <h5 className="text-light mb-4">Address</h5>
              <p>
                <i className="fa fa-map-marker-alt me-3"></i>123 Polton,
                Dhaka-1210
              </p>
              <p>
                <i className="fa fa-phone-alt me-3"></i>+880 164 254 1075
              </p>
              <p>
                <i className="fa fa-envelope me-3"></i>info@tcld.com
              </p>
            </div>
            <div className="col-lg-3 col-md-6">
              <h5 className="text-light mb-4">Quick Links</h5>
              <a className="btn btn-link" href="a">
                About Us
              </a>
              <a className="btn btn-link" href="a">
                Contact Us
              </a>
              <a className="btn btn-link" href="a">
                Our Services
              </a>
              <a className="btn btn-link" href="a">
                Terms & Condition
              </a>
              <a className="btn btn-link" href="a">
                Support
              </a>
            </div>
            <div className="col-lg-3 col-md-6">
              <h5 className="text-light mb-4">Newsletter</h5>
              <p>We are helping our family Members.</p>
              <div
                className="position-relative mx-auto"
                style={{ maxWidth: "400px" }}
              >
                <input
                  className="form-control bg-transparent w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Your email"
                />
                <button
                  type="button"
                  className="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div className="container-fluid copyright">
          <div className="container">
            <div className="row">
              <div className="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a href="a">Your Site Name</a>, All Right Reserved.
              </div>
              <div className="col-md-6 text-center text-md-end">
                Designed By g_rabbany
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* <!-- Footer End --> */}

      {/* <!-- Back to Top --> */}
      <a href="a" className="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i className="bi bi-arrow-up"></i>
      </a>
    </div>
  );
}
