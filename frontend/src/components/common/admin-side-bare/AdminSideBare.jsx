import logo from "../../../assets/icons/logo.svg";
import { DashNavLink } from "../../ui/dash-nav-link/DashNavLink";
import "./style.css";
import iconHome from "../../../assets/icons/Dashboard.svg";
import iconProduct from "../../../assets/icons/Product.svg";
import iconOrder from "../../../assets/icons/Cart.svg";
import iconCustomer from "../../../assets/icons/Users.svg";
import iconReview from "../../../assets/icons/EmptyStar.jsx";
import iconSetting from "../../../assets/icons/Settings.svg";
import iconExtra from "../../../assets/icons/Add.svg";
function AdminSideBare() {
  const navLinks = [
    { to: "/Admin/Dashboard", name: "Dashboard", icon: iconHome },
    { to: "/Admin/Products", name: "Products", icon: iconProduct },
    { to: "/Admin/Orders", name: "Orders", icon: iconOrder },
    { to: "/Admin/Customers", name: "Customers", icon: iconCustomer },
    { to: "/Admin/Reviews", name: "Reviews", icon: iconReview },
    { to: "/Admin/Settings", name: "Settings", icon: iconSetting },
  ];

  return (
    <aside className="admin-side-bare">
      <div className="side-head">
        <div className="logo">
          <img src={logo} alt="" />
        </div>
        <h2>Admin</h2>
      </div>
      <div className="side-body">
        {navLinks.map((link) => (
          <DashNavLink
            key={link.to}
            to={link.to}
            name={link.name}
            icon={link.icon}
          />
        ))}
      </div>
      <hr />
      <DashNavLink to="/Admin/Extra" name="Extrat" icon={iconExtra} />
    </aside>
  );
}
export default AdminSideBare;
