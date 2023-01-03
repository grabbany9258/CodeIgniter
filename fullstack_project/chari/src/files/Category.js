import React from "react";
import axios from "axios";
import { useState, useEffect } from "react";

export default function Category() {
  const [category, setCategory] = useState([]);
  console.log(category);

  useEffect(() => {
    allCat();
  }, []);

  const allCat = async () => {
    axios
      .get("http://localhost/ReactJs/Projects/chari/api/category.php")
      // .get("api/category.php")
      .then((res) => {
        console.log(res.data.datas.pr);
        setCategory(res.data.datas.pr);
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
            Category List
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
          Category List
        </h1>
        <table className="table table-bordered table-striped text-center">
          <thead>
            <tr>
              <th>ID</th>
              <th>Category Name</th>
              <th>Category Status</th>
            </tr>
          </thead>
          <tbody>
            {category.map((item, index) => (
              <tr key={item.id}>
                <td>{index + 1}</td>
                <td>{item.categories_name}</td>
                <td>{item.categories_status}</td>
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
