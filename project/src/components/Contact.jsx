import React from 'react';

export default function Contact() {
  return (
    <div className="container py-5">
      <h2 className="text-center mb-4">Contact Us</h2>

      <div className="row">
        {/* Contact Info */}
        <div className="col-md-5 mb-4">
          <h5>Get in Touch</h5>
          <p><strong>Address:</strong> 123 Street Name, Karachi, Pakistan</p>
          <p><strong>Email:</strong> support@example.com</p>
          <p><strong>Phone:</strong> +92 300 1234567</p>
        </div>

        {/* Contact Form */}
        <div className="col-md-7">
          <form>
            <div className="mb-3">
              <label htmlFor="name" className="form-label">Full Name</label>
              <input type="text" className="form-control" id="name" placeholder="Enter your name" />
            </div>

            <div className="mb-3">
              <label htmlFor="email" className="form-label">Email Address</label>
              <input type="email" className="form-control" id="email" placeholder="Enter your email" />
            </div>

            <div className="mb-3">
              <label htmlFor="message" className="form-label">Message</label>
              <textarea className="form-control" id="message" rows="4" placeholder="Write your message..."></textarea>
            </div>

            <button type="submit" className="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  );
}
