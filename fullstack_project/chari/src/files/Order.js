import React, { useState, useEffect } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";
// import Dropdown from "react-bootstrap/Dropdown";

export default function Order() {
  const navigate = useNavigate();
  const [info, setInfo] = useState({});
  useEffect(() => {
    getCartItems();
  }, []);

  const changeValue = (e) => {
    setInfo({ ...info, [e.target.name]: e.target.value });
    getCartItems();
  };

  const getCartItems = (e) => {
    var cartItems = sessionStorage.getItem("cartItems");
    document.getElementById("product_id").value = cartItems;
    info.product_id = cartItems;
  };
  //console.log(info);
  const formSubmit = (e) => {
    e.preventDefault();
    axios
      .post(
        "http://localhost/ReactJs/Projects/chari/api/order.php",
        // "api/order.php",
        info
      )
      .then((res) => {
        if (res.data) {
          // console.log(res.data);
          alert(res.data.msg);
        }
      });
  };
  //console.log(info);
  return (
    <>
      {/* <!-- Page Header Start --> */}
      <div
        className="container-fluid page-header mb-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div className="container text-center">
          <h1 className="display-4 text-white animated slideInDown mb-4">
            Order Here
          </h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol className="breadcrumb justify-content-center mb-0">
              <li className="breadcrumb-item">
                <a className="text-white" href={{}}>
                  Home
                </a>
              </li>
              <li className="breadcrumb-item">
                <a className="text-white" href="{{}}">
                  Pages
                </a>
              </li>
              <li
                className="breadcrumb-item text-primary active"
                aria-current="page"
              >
                About Us
              </li>
            </ol>
          </nav>
        </div>
      </div>
      {/* <!-- Page Header End --> */}

      {/* Register part start */}

      <div>
        <section className="vh-100" style={{ backgroundColor: "#eee" }}>
          <div className="container h-100">
            <div className="row d-flex justify-content-center align-items-center h-100">
              <div className="col-lg-12 col-xl-11">
                <div
                  className="card text-black"
                  style={{ borderRadius: "25px" }}
                >
                  <div className="">
                    <div className="row justify-content-center">
                      <div className="col-sm-8 ">
                        <p className="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">
                          Order Form
                        </p>

                        <form className="mx-1 mx-md-4" onSubmit={formSubmit}>
                          <label className="form-label" for="form3Example1c">
                            Customer Name
                          </label>
                          <div className="d-flex flex-row align-items-center mb-4">
                            <div className="form-outline flex-fill mb-2">
                              <input
                                type="text"
                                id="client_name"
                                name="client_name"
                                className="form-control"
                                onChange={changeValue}
                              />
                            </div>
                          </div>

                          <label className="form-label" for="form3Example1c">
                            Customer Contact
                          </label>

                          <div className="d-flex flex-row align-items-center mb-4">
                            <div className="form-outline flex-fill mb-0">
                              <input
                                type="text"
                                id="client_contact"
                                name="client_contact"
                                className="form-control"
                                onChange={changeValue}
                              />
                            </div>
                          </div>

                          <label className="form-label" for="form3Example1c">
                            Order Date
                          </label>
                          <div className="d-flex flex-row align-items-center mb-4">
                            <div className="form-outline flex-fill mb-0">
                              <input
                                type="date"
                                id="order_date"
                                name="order_date"
                                className="form-control"
                                onChange={changeValue}
                              />
                            </div>
                          </div>

                          <label className="form-label" for="form3Example1c">
                            Food
                          </label>

                          <div className="d-flex flex-row align-items-center mb-4">
                            <div className="form-outline flex-fill mb-0">
                              <input
                                type="text"
                                id="product_id"
                                name="product_id"
                                className="form-control"
                                onChange={changeValue}
                              />
                            </div>
                          </div>

                          <div className="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button
                              type="submit"
                              className="btn btn-primary btn-lg"
                            >
                              Order Food
                            </button>
                          </div>
                        </form>
                      </div>
                      <div className="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </>
  );
}
