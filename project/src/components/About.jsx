import React from 'react';

export default function About() {
  return (
    <div className="container py-5">
      <h2 className="mb-4">About Us</h2>
      
      <div className="row align-items-center">
        <div className="col-md-6">
          <img 
            src="https://picsum.photos/600/400" 
            alt="About Us" 
            className="img-fluid rounded shadow"
          />
        </div>

        <div className="col-md-6 mt-4 mt-md-0">
          <h4>Who We Are</h4>
          <p className="text-muted">
            We are a team of passionate developers focused on delivering quality web solutions.
            Our mission is to build efficient, scalable, and user-friendly applications for our clients.
          </p>
          <p className="text-muted">
            With years of experience in modern technologies and frameworks, we bring value through
            innovation and professionalism.
          </p>
        </div>
      </div>
    </div>
  );
}
