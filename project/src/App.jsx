import Home from "./components/Home";
import About from "./components/About";
import Contact from "./components/Contact";
import Products from "./components/Products";
import Header from "./components/includes/Header";
const App = () => {
    return (
        <div>
            <Header />
            <Home />
            <About />
            <Contact />
            <Products />
        </div>
    );
}
export default App;