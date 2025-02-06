import { Outlet, useLocation } from "react-router-dom";
import AdminHeader from "../components/common/admin-header/AdminHeader";
import AdminSideBare from "../components/common/admin-side-bare/AdminSideBare";
import { useEffect } from "react";

export default function AdminRoot() {
  const location = useLocation();
  const pageName = location.pathname.split("/Admin/")[1] || "Dashboard";
  useEffect(() => {
    document.title = `Admin | ${pageName}`;
  }, [pageName]);

  return (
    <div className="admin-main">
      <AdminSideBare />
      <div className="admin-middle-content">
        <AdminHeader currentPage={pageName} />
        <section className="admin-content">
          <Outlet />
        </section>
      </div>
    </div>
  );
}
