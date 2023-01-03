import React, { useState } from "react";
import { Button, Modal, ModalHeader, ModalBody, ModalFooter } from "reactstrap";
import axios from "axios";

export default function MyModal() {
  const [info, setInfo] = useState({
    modal: false,
    name: "",
    city: "",
  });
  function toggle() {
    setInfo({ modal: !info.modal });
  }

  function changeValue(e) {
    setInfo({ ...info, [e.target.name]: e.target.value });
  }

  function handleSubmit(e) {
    e.preventDefault();
    console.log(info);
    toggle();
    dataSubmit();
  }
  function dataSubmit(res) {
    axios
      .post("http://localhost/ReactJs/Projects/chari/api/mymodal.php", info)
      // .post("api/mymodal.php", info)
      .then((res) => {
        alert(res.data.msg);
      });
  }
  return (
    <div>
      {/* <!-- Page Header Start --> */}
      <div
        className="container-fluid page-header mb-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div className="container text-center">
          <h1 className="display-4 text-white animated slideInDown mb-4">
            About Us
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
                About Us
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div>
        <h2 style={{ paddingLeft: "580px" }}>My Modal Button</h2>
        <div style={{ paddingLeft: "655px" }}>
          <Button onClick={toggle}>Click Me</Button>
        </div>
        <Modal isOpen={info.modal}>
          <form onSubmit={handleSubmit}>
            {/* <h2>My Modal Button</h2> */}
            <ModalHeader>Hello, This is Modal</ModalHeader>
            <ModalBody>
              <label>Name:</label>
              <input
                type="text"
                name="name"
                className="form-control"
                onChange={changeValue}
              />
              <label>City:</label>
              <input
                type="text"
                name="city"
                className="form-control"
                onChange={changeValue}
              />
            </ModalBody>
            <ModalFooter>
              <input type="submit" className="btn btn-info" value="SUBMIT" />
              <Button onClick={toggle}>Cancel</Button>
            </ModalFooter>
          </form>
        </Modal>
      </div>
    </div>
  );
}
