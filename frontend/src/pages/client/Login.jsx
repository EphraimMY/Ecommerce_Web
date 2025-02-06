import { NavLink } from "react-router-dom";
import { Input } from "../../components/ui/input/Input";
import ClientHeader from "../../components/common/client-header/ClientHeader";
import BreadCrumb from "../../components/common/bread-crumb/BreadCrumb";
import ClientFooter from "../../components/common/client-footer/ClientFooter";
import GoogleIcon from "../../assets/icons/Colored Icons/GoogleIcon";

export default function Login() {
  return (
    <>
      <ClientHeader />
      <BreadCrumb page="Login" />
      <section className="login-section">
        <div className="login-content">
          <form action="">
            <NavLink to="" className="log-google">
              <GoogleIcon />
              Continue with Google
            </NavLink>
            <div className="hr-or"></div>
            <div className="inputs-div">
              <Input label="Email" type="email" />
              <Input label="Password" type="password" />
            </div>
            <NavLink to="/forgot-password" style={{ marginLeft: "auto" }}>
              Forgot Password ?
            </NavLink>
            <button className="btn">Login</button>
          </form>
          <NavLink to="/signup">Don't have an account? Sign up</NavLink>
        </div>
      </section>
      <ClientFooter />
    </>
  );
}
