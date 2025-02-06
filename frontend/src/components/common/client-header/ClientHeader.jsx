import "./client.header.css";
import logo from "../../../assets/icons/Logomark.svg";
export default function ClientHeader() {
  return (
    <header className="client-header">
      <div className="publicite">
        <p>Get 25% OFF on your first order.</p>
        <a href="">Order now</a>
      </div>
      <div className="nav-bar">
        <div className="logo-content">
          <div className="logo">
            <img src={logo} alt="" />
          </div>
          <span className="e-commerce">E-commerce</span>
        </div>
        <nav className="nav-links">
          <a href="#">Home</a>
          <a href="#" className="categories-link">
            <span>
              Categories <i className="fa-solid fa-caret-down"></i>
            </span>
            <div className="categories-links"></div>
          </a>
          <a href="#">About</a>
          <a href="#">Contact</a>
        </nav>
        <div className="right-nav">
          <div className="input-search">
            <input type="text" placeholder="Search" />
          </div>
        </div>
      </div>
    </header>
  );
}
