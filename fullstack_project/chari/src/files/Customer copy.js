import React from "react";
import axios from "axios";
import { useState, useEffect } from "react";

export default function Customers() {
  const [customer, setCustomer] = useState([]);
  console.log(customer);

  useEffect(() => {
    allCustomer();
  }, []);

  const allCustomer = async () => {
    axios
      .get("http://localhost/ReactJs/Projects/chari/api/customer.php")
      // .get("api/customer.php")
      .then((res) => {
        console.log(res.data.datas.pr);
        setCustomer(res.data.datas.pr);
      });
  };
  return (
    <div>
      {/* <!-- Page Header Start --> */}
      <div
        className="container-fluid page-header mb-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div className="container text-center">
          <h1 className="display-4 text-white animated slideInDown mb-4">
            Customer List
          </h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol className="breadcrumb justify-content-center mb-0">
              <li className="breadcrumb-item">
                <a className="text-white" href="#">
                  Home
                </a>
              </li>
              <li className="breadcrumb-item">
                <a className="text-white" href="#">
                  Pages
                </a>
              </li>
              <li
                className="breadcrumb-item text-primary active"
                aria-current="page"
              >
                Category
              </li>
            </ol>
          </nav>
        </div>
      </div>
      {/* <!-- Page Header End --> */}

      <div className="container">
        <h1
          className=""
          style={{ textAlign: "center", margin: "30px 0px 30px " }}
        >
          Customer List
        </h1>
        <table className="table table-bordered table-striped text-center">
          <thead>
            <tr>
              <th>SL</th>
              <th>Customer Name</th>
              <th>Department</th>
              <th>Mobile Number</th>
              <th>Floor Number</th>
            </tr>
          </thead>
          <tbody>
            {customer.map((item, index) => (
              <tr key={item.id}>
                <td>{index + 1}</td>
                <td>{item.name}</td>
                <td>{item.department}</td>
                <td>{item.mob_no}</td>
                <td>{item.floor_nb}</td>
              </tr>
            ))}
          </tbody>
        </table>
        {/* Direct loop diye kora hoyece list akare dekhano hoyece  */}
        {/* {category.map((item, index) => (
          <li> {item.categories_name} </li>
        ))} */}
      </div>
    </div>
  );
}
