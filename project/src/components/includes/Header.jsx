import React from 'react'

export default function Header() {
  return (
      <div>
        <nav className="navbar navbar-expand-lg navbar-dark bg-primary">
            <div className="container">
                <a className="navbar-brand" href="/">MySite</a>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="mainNavbar">
                <ul className="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li className="nav-item">
                    <a className="nav-link active" href="/">Home</a>
                    </li>
                    <li className="nav-item">
                    <a className="nav-link" href="/about">About</a>
                    </li>
                    <li className="nav-item">
                    <a className="nav-link" href="/products">Products</a>
                    </li>
                    <li className="nav-item">
                    <a className="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
  )
}
