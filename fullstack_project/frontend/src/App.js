import ProductList from "./components/ProductsList";
import "./App.css";
import { Routes, Route, BrowserRouter } from "react-router-dom";

function App() {
  return (
    <BrowserRouter>
      <div className="container">
        <Routes>
          <Route path="/" element={<ProductList />}></Route>
        </Routes>
      </div>
    </BrowserRouter>
  );
}

export default App;
