import { NavLink } from "react-router-dom";
import { Input } from "../../components/ui/input/Input";
import ClientHeader from "../../components/common/client-header/ClientHeader";
import BreadCrumb from "../../components/common/bread-crumb/BreadCrumb";
import ClientFooter from "../../components/common/client-footer/ClientFooter";
import GoogleIcon from "../../assets/icons/Colored Icons/GoogleIcon";

export default function SignUp() {
  return (
    <>
      <ClientHeader />
      <BreadCrumb page="Sign Up" />
      <section className="login-section">
        <div className="login-content">
          <form action="">
            <NavLink to="" className="log-google">
              <GoogleIcon />
              Continue with Google
            </NavLink>
            <div className="hr-or"></div>
            <div className="inputs-div">
              <Input label="Name" />
              <Input label="Email" type="email" />
              <Input label="Password" type="password" />
            </div>
            <p>
              By creating an account you agree with our Terms of Service,
              Privacy Policy,
            </p>
            <button className="btn">Create account</button>
          </form>
          <NavLink to="/login">Already have an account? Log in</NavLink>
        </div>
      </section>
      <ClientFooter />
    </>
  );
}
