import "./client-sidebar.css";
import iconOrder from "../../../assets/icons/Cart.svg";
import iconHeart from "../../../assets/icons/Heart.svg";
import iconDelivery from "../../../assets/icons/Delivery.svg";
import iconKey from "../../../assets/icons/Key.svg";
import iconUser from "../../../assets/icons/Users.svg";
import iconLogout from "../../../assets/icons/Logout.svg";
import { DashNavLink } from "../../ui/dash-nav-link/DashNavLink";
export default function ClientSideBar() {
  const links = [
    {
      path: "orders",
      name: "Orders",
      icon: iconOrder,
    },
    {
      path: "wishlist",
      name: "Wishlist",
      icon: iconHeart,
    },
    {
      path: "address",
      name: "Address",
      icon: iconDelivery,
    },
    {
      path: "password",
      name: "Password",
      icon: iconKey,
    },
    {
      path: "account-details",
      name: "Account Details",
      icon: iconUser,
    },
    {
      path: "/logout",
      name: "Logout",
      icon: iconLogout,
    },
  ];
  return (
    <aside className="client-side-bar">
      <div className="links-side">
        {links.map((link) => {
          return (
            <DashNavLink
              key={link.path}
              to={link.path}
              name={link.name}
              icon={link.icon}
            />
          );
        })}
      </div>
    </aside>
  );
}
