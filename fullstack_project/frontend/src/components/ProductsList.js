/* eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";

const ProductList = () => {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    getProducts();
  }, []);

  const getProducts = async () => {
    const products = await axios.get("http://localhost:8080/frontend/products");
    setProducts(products.data);
  };

  const deleteProduct = async (id) => {
    await axios.delete(`http://localhost:8080/frontend/products/${id}`);
    getProducts();
  };
  //console.log(products);

  return (
    <div>
      <Link to="/add" className="button is-primary mt-5">
        Add New
      </Link>
      <table className="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>SL</th>
            <th>Title</th>
            <th>Price</th>
            <th>Details</th>
            <th>Image</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {products.map((product, index) => (
            <tr key={product.id}>
              <td>{index + 1}</td>
              <td>{product.product_name}</td>
              <td>{product.product_price}</td>
              <td>{product.product_details}</td>
              <td>
                <img
                  src={`http://localhost:8080/${product.product_image}`}
                  width={"70px"}
                />
              </td>
              <td>
                <Link to={`/edit/${product.id}`} className="btn btn-primary">
                  Edit
                </Link>
                <button
                  onClick={() => deleteProduct(product.id)}
                  className="btn btn-danger"
                >
                  Delete
                </button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default ProductList;
