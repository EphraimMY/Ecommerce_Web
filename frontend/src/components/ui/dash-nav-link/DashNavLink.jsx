import { NavLink } from "react-router-dom";
import "./style.css";

export function DashNavLink({ to = "#", name, icon = "" }) {
  return (
    <NavLink
      to={to}
      className={({ isActive }) => `dash-nav-link ${isActive ? "active" : ""}`}
    >
      <div className="icon">
        <img src={icon} alt={`${name} icon`} />
      </div>
      <span>{name}</span>
    </NavLink>
  );
}
