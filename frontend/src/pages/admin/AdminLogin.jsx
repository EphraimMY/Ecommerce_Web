import "../../assets/styles/admin.login.css";
import logo from "../../assets/icons/logo.svg";
import { Input } from "../../components/ui/input/Input";
function AdminLogin() {
  document.title = "Login/Admin";
  return (
    <div className="form-login">
      <div className="login-head">
        <div className="logo">
          <img src={logo} alt="" />
        </div>
        <h2>Admin</h2>
      </div>
      <div className="login-body">
        <form>
          <Input label="Email" type="email" />
          <Input label="Mot de passe" type="password" />
          <button className="login-btn" type="submit">
            Login
          </button>
        </form>
      </div>
    </div>
  );
}

export default AdminLogin;
