import "./client-root.css";
import BreadCrumb from "../components/common/bread-crumb/BreadCrumb";
import ClientFooter from "../components/common/client-footer/ClientFooter";
import ClientHeader from "../components/common/client-header/ClientHeader";
import ClientSideBar from "../components/common/client-sidebar/ClientSideBar";
import { Outlet } from "react-router-dom";

export default function ClientRoot() {
  return (
    <>
      <ClientHeader />
      <BreadCrumb page="My Account" />
      <section className="client-main">
        <div className="client-main-content ">
          <ClientSideBar />
          <div className="client-main-content-right">
            <h3>My Account</h3>
            <div className="content-client">
              <Outlet />
            </div>
          </div>
        </div>
      </section>
      <ClientFooter />
    </>
  );
}
