import { createBrowserRouter, RouterProvider } from "react-router-dom";
import AdminLogin from "./pages/admin/AdminLogin";
import AdminDashboard from "./pages/admin/AdminDashboard";
import AdminSettings from "./pages/admin/AdminSettings";
import AdminReviews from "./pages/admin/AdminReviews";
import AdminOrders from "./pages/admin/AdminOrders";
import AdminProducts from "./pages/admin/AdminProducts";
import AdminCustomers from "./pages/admin/AdminCustomers";
import AdminExtras from "./pages/admin/AdminExtras";
import AdminRoot from "./layout/AdminRoot";
import Home from "./pages/client/Home";
import Products from "./pages/client/Products";
import ClientRoot from "./layout/ClientRoot";
import ClientAddress from "./pages/client/ClientAddress";
import ClientAccountDetails from "./pages/client/ClientAccountDetails";
import ClientChangePassword from "./pages/client/ClientChangePassword";
import ClientWishList from "./pages/client/ClientWishList";
import ClientOrder from "./pages/client/ClientOrder";
import CheckOut from "./pages/client/CheckOut";
import ClientCart from "./pages/client/ClientCart";
import SuccessOrder from "./pages/client/SuccessOrder";
import FailedOrder from "./pages/client/FailedOrder";
import SignUp from "./pages/client/SignUp";
import Login from "./pages/client/Login";
import ForgotPassword from "./pages/client/ForgotPassword";
import ResetPassword from "./pages/client/ResetPassword";
import Product from "./pages/client/Product";
import { AdminAddProduct } from "./pages/admin/AdminAddProduct";

const router = createBrowserRouter([
  {
    path: "/",
    element: <Home />,
  },
  {
    path: "/products",
    element: <Products />,
  },
  {
    path: "/product",
    element: <Product />,
  },
  {
    path: "/cart",
    element: <ClientCart />,
  },
  {
    path: "/successful-order",
    element: <SuccessOrder />,
  },
  {
    path: "/failed-order",
    element: <FailedOrder />,
  },
  {
    path: "/checkout",
    element: <CheckOut />,
  },
  {
    path: "/login",
    element: <Login />,
  },
  {
    path: "/signup",
    element: <SignUp />,
  },
  {
    path: "/forgot-password",
    element: <ForgotPassword />,
  },
  {
    path: "/reset-password",
    element: <ResetPassword />,
  },
  {
    path: "/MyAccount",
    element: <ClientRoot />,
    children: [
      { path: "Orders", element: <ClientOrder /> },
      { path: "Wishlist", element: <ClientWishList /> },
      { path: "Address", element: <ClientAddress /> },
      { path: "password", element: <ClientChangePassword /> },
      { path: "account-details", element: <ClientAccountDetails /> },
      { path: "Settings", element: <Home /> },
    ],
  },
  {
    path: "/AdminLogin",
    element: <AdminLogin />,
  },
  {
    path: "/Admin",
    element: <AdminRoot />,
    children: [
      { path: "Dashboard", element: <AdminDashboard /> },
      { path: "Products", element: <AdminProducts /> },
      { path: "AddProduct", element: <AdminAddProduct /> },
      { path: "Orders", element: <AdminOrders /> },
      { path: "Customers", element: <AdminCustomers /> },
      { path: "Reviews", element: <AdminReviews /> },
      { path: "Settings", element: <AdminSettings /> },
      { path: "Extra", element: <AdminExtras /> },
    ],
  },
]);
function App() {
  return <RouterProvider router={router} />;
}
export default App;
