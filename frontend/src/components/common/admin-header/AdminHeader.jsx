import iconRight from "../../../assets/icons/Chevron Right.svg";
import iconLogout from "../../../assets/icons/Logout.svg";
import "./admin.header.css";
export default function AdminHeader({ currentPage }) {
  return (
    <header className="admin-header">
      <div className="nav-links">
        Admin
        <div className="logo">
          <img src={iconRight} alt="" />
        </div>
        <span className="active-page">{currentPage}</span>
      </div>
      <div className="logout-div">
        <a href="#" className="logout">
          <div className="logo">
            <img src={iconLogout} alt="" />
          </div>
        </a>
      </div>
    </header>
  );
}
