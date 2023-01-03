import React from "react";
import Navbar from "../components/Navbar";
// import Slider from "../components/Slider";
import Footer from "../components/Footer";
import { Outlet } from "react-router-dom";

export default function Main() {
  return (
    <div>
      <Navbar />
      {/* <Slider /> */}
      <Outlet />
      <Footer />
    </div>
  );
}
