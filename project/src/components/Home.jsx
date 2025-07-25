import React from 'react';

const Home = () => {
  return (
    <div>

      {/* Hero Section */}
      <section className="bg-primary text-white text-center py-5">
        <div className="container">
          <h1 className="display-4 fw-bold">Welcome to Our Website</h1>
          <p className="lead">Discover quality, trust, and performance in every click.</p>
          <a href="/products" className="btn btn-light btn-lg mt-3">Explore Products</a>
        </div>
      </section>

      {/* Features Section */}
      <section className="py-5 bg-light">
        <div className="container">
          <h2 className="text-center mb-5">Why Choose Us</h2>
          <div className="row text-center">
            <div className="col-md-4 mb-4">
              <i className="fas fa-truck fa-3x text-primary mb-3"></i>
              <h5>Fast Delivery</h5>
              <p className="text-muted">Get your products quickly with our reliable shipping services.</p>
            </div>
            <div className="col-md-4 mb-4">
              <i className="fas fa-thumbs-up fa-3x text-primary mb-3"></i>
              <h5>Trusted Quality</h5>
              <p className="text-muted">We offer only high-quality, verified products for our customers.</p>
            </div>
            <div className="col-md-4 mb-4">
              <i className="fas fa-headset fa-3x text-primary mb-3"></i>
              <h5>24/7 Support</h5>
              <p className="text-muted">Our team is available round the clock to assist you anytime.</p>
            </div>
          </div>
        </div>
      </section>

    </div>
  );
};

export default Home;
