import React from "react";
import axios from "axios";
import { useState, useEffect } from "react";

export default function Cart() {
  const [cart, setCart] = useState([]);
  useEffect(() => {
    showcarts();
  }, []);

  const showcarts = async () => {
    var cartItems = sessionStorage.getItem("cartItems");
    axios
      .get(
        "http://localhost/ReactJs/Projects/chari/api/cart.php?cartItems=" +
          cartItems
      )
      // .get("api/service.php")
      .then((res) => {
        console.log(res.data.datas);
        setCart(res.data.datas);
      });
  };

  return (
    <div>
      <div
        className="container-fluid page-header mb-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div className="container text-center">
          <h1 className="display-4 text-white animated slideInDown mb-4">
            Cart
          </h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol className="breadcrumb justify-content-center mb-0">
              <li className="breadcrumb-item">
                <a className="text-white" href="a">
                  Home
                </a>
              </li>
              <li className="breadcrumb-item">
                <a className="text-white" href="a">
                  Pages
                </a>
              </li>
              <li
                className="breadcrumb-item text-primary active"
                aria-current="page"
              ></li>
            </ol>
          </nav>
        </div>
      </div>
      <div>{cart}</div>
    </div>
  );
}
