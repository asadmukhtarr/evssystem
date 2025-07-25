import React from 'react';

export default function Products() {
  return (
    <div className="container py-5">
      <h2 className="text-center mb-4">Our Products</h2>

      <div className="row">
        <div className="col-md-4 mb-4">
          <div className="card h-100 shadow-sm">
            <img 
              src="https://picsum.photos/200?random=1" 
              className="card-img-top" 
              alt="Product One" 
            />
            <div className="card-body">
              <h5 className="card-title">Product One</h5>
              <p className="card-text">$49.99</p>
              <a href="/" className="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>

        <div className="col-md-4 mb-4">
          <div className="card h-100 shadow-sm">
            <img 
              src="https://picsum.photos/200?random=2" 
              className="card-img-top" 
              alt="Product Two" 
            />
            <div className="card-body">
              <h5 className="card-title">Product Two</h5>
              <p className="card-text">$29.99</p>
              <a href="/" className="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>

        <div className="col-md-4 mb-4">
          <div className="card h-100 shadow-sm">
            <img 
              src="https://picsum.photos/200?random=3" 
              className="card-img-top" 
              alt="Product Three" 
            />
            <div className="card-body">
              <h5 className="card-title">Product Three</h5>
              <p className="card-text">$59.99</p>
              <a href="/" className="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
