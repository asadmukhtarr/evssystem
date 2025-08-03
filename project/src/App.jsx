import { Routes,Route } from "react-router-dom";
import Home from "./components/Home";
import About from "./components/About";
import Contact from "./components/Contact";
import Products from "./components/Products";
import Test from "./components/Test";
import Create from "./components/Create";
import Header from "./components/includes/Header";
const App = () => {
    return (
        <div>
            <Header />
            <div>
                 <Routes>
                    <Route path="/" element={<Home />} />
                    <Route path="/about" element={<About />} />
                    <Route path="/products" element={<Products />} />
                    <Route path="/contact" element={<Contact />} />
                    <Route path="/test" element={<Test />} />
                    <Route path="/create" element={<Create />} />
                </Routes>
            </div>
        </div>
    );
}
export default App;