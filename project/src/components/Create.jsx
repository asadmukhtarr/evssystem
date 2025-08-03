import { useState } from "react";
const Create = () => {
    const [title, setTitle] = useState();
    const [price, setPrice] = useState();
    const [quantity, setQuantity] = useState();
    const productData = (e) => {
        e.preventDefault();
        const product = {
            titlte: title,
            price: price,
            quantity:quantity
        }
        console.log(product);
    }
    return (
        <div className="container mt-5">
            <div className="row">
                <div className="col-lg-4">
                    <div className="card shadow p-4">
                        <h3 className="mb-4">Create Product</h3>
                        <form onSubmit={productData}>
                            <div className="mb-3">
                                <label className="form-label">Title</label>
                                <input type="text" name="title" className="form-control" onKeyUp={e => setTitle(e.target.value)} placeholder="Enter product title" />
                            </div>
                            <div className="mb-3">
                                <label className="form-label">Price</label>
                                <input type="number" name="price" className="form-control" onKeyUp={e => setPrice(e.target.value)} placeholder="Enter price" />
                            </div>
                            <div className="mb-3">
                                <label className="form-label">Quantity</label>
                                <input type="number" name="quantity" className="form-control" onKeyUp={e => setQuantity(e.target.value)} placeholder="Enter quantity" />
                            </div>
                            <button type="submit" className="btn btn-primary">Create Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Create;
