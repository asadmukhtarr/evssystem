import { useState, useEffect } from "react";
const Create = () => {
    const [title, setTitle] = useState("");
    const [description, setDescription] = useState("");
    const [price, setPrice] = useState("");
    const [image, setImage] = useState(null);
    const [Products, setProducts] = useState([]);
    const productData = async (e) => {
        e.preventDefault();
         // ✅ must use FormData for file upload
        const formData = new FormData();
        formData.append("title", title);
        formData.append("description", description);
        formData.append("price", price);
        formData.append("image", image);
        try {
            const response = await fetch("http://localhost:3030/api/save/product", {
            method: "POST",
            body: formData,
            });

            const result = await response.json();
            console.log(result);

            if (response.ok) {
            alert("Product created successfully!");
            setTitle("");
            setDescription("");
            setPrice("");
            setImage(null);
            FetchProducts(); // reload products
            } else {
            console.log("Error while creating product", result.error);
            }
        } catch (error) {
            console.log("API error", error);
        }
        console.log(formData);
    }
    const FetchProducts = async () => {
        try {
            const response = await fetch('http://localhost:3030/api/products');
            const data = await response.json();
            setProducts(data);
           // console.log(Products);
        } catch(e){
            console.log("API is not working",e);
        }
    }
    const deleteProduct = async (id) => {
        const url = "http://localhost:3030/api/delete/product/"+id;
        if(window.confirm("Are you sure? You want to delete product")){
             try {
                const response = await fetch(url);
                const data = await response.json();
                console.log(data);
            } catch(error){
                console.log('API is not working',error);
            }
        }
    }
    useEffect(function(){
        FetchProducts();
    });
    return (
        <div className="container mt-5">
            <div className="row">
                <div className="col-lg-4">
                    <div className="card shadow p-4">
                        <h3 className="mb-4">Create Product</h3>
                        <form onSubmit={productData} encType="multipart/form-data">
                            <div className="mb-3">
                                <label className="form-label">Product Title</label>
                                <input
                                    type="text"
                                    className="form-control"
                                    value={title}
                                    onChange={(e) => setTitle(e.target.value)}
                                    required
                                />
                            </div>

                            <div className="mb-3">
                                <label className="form-label">Description</label>
                                <textarea
                                    className="form-control"
                                    rows="3"
                                    value={description}
                                    onChange={(e) => setDescription(e.target.value)}
                                    required
                                ></textarea>
                            </div>
                            <div className="mb-3">
                                <label className="form-label">Price ($)</label>
                                <input
                                    type="number"
                                    className="form-control"
                                    value={price}
                                    onChange={(e) => setPrice(e.target.value)}
                                    required
                                />
                            </div>

                            <div className="mb-3">
                                <label className="form-label">Product Image</label>
                                <input
                                    type="file"
                                    className="form-control"
                                    accept="image/*"
                                    onChange={(e) => setImage(e.target.files[0])}
                                    required
                                />
                            </div>

                            <button type="submit" className="btn btn-success w-100">
                                Submit Product
                            </button>
                        </form>
                    </div>
                </div>

                <div className="col-lg-8">
                    <div className="card">
                        <div className="card-header">
                            <i className="fa fa-list"></i> All Products
                        </div>
                        <table className="table table-bordered table-hover table-stripped">
                           <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                { Products.length > 0 ? (
                                    Products.map((product,index) => (
                                        <tr key={index}>
                                                <td>
                                                    <img src={`http://localhost:3030/`+product.image} alt="" height="30px" />
                                                    {product.title}
                                                </td>
                                                <td>{product.stock}</td>
                                                <td>{product.price}</td>
                                                <td>
                                                    <button className="btn btn-sm btn-danger m-1" onClick={(e) => deleteProduct(product._id)}>Delete</button>
                                                    <button className="btn btn-sm btn-success">Edit</button>
                                                </td>
                                        </tr>
                                    ))
                               ) : (
                                 <tr className="text-center">
                                    <td colSpan={4}>No Product Found</td>
                                </tr>
                               ) }
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Create;
