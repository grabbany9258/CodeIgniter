import { Routes, Route } from "react-router-dom";
import "./App.css";
import Main from "./files/Main";
import Home from "./files/Home";
import About from "./files/About";
import Causes from "./files/Causes";
import Service from "./files/Service";
import Donate from "./files/Donate";
import Team from "./files/Team";
import Testimonial from "./files/Testimonial";
import Contact from "./files/Contact";
import Customers from "./files/Customer";
import MyModal from "./components/MyModal";
import Register from "./files/Register";
import Category from "./files/Category";
import Order from "./files/Order";
import Cart from "./files/Cart";

function App() {
  return (
    <Routes>
      <Route path="/" element={<Main />}>
        <Route index element={<Home />} />
        <Route path="/about" element={<About />} />
        <Route path="/causes" element={<Causes />} />
        <Route path="/service" element={<Service />} />
        <Route path="/donate" element={<Donate />} />
        <Route path="/team" element={<Team />} />
        <Route path="/testimonial" element={<Testimonial />} />
        <Route path="/customer" element={<Customers />} />
        <Route path="/contact" element={<Contact />} />
        <Route path="/mymodal" element={<MyModal />} />
        <Route path="/register" element={<Register />} />
        <Route path="/category" element={<Category />} />
        <Route path="/order" element={<Order />} />
        <Route path="/cart" element={<Cart />} />
      </Route>
    </Routes>
  );
}

export default App;
