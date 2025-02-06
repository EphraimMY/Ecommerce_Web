import { Input } from "../../components/ui/input/Input";
import ClientHeader from "../../components/common/client-header/ClientHeader";
import BreadCrumb from "../../components/common/bread-crumb/BreadCrumb";
import ClientFooter from "../../components/common/client-footer/ClientFooter";
export default function ResetPassword() {
  return (
    <>
      <ClientHeader />
      <BreadCrumb page="Reset Password" />
      <section className="login-section">
        <div className="login-content">
          <form action="">
            <div className="inputs-div">
              <Input label="New password" type="password" />
              <Input label="Confirm password" type="password" />
            </div>
            <button className="btn">Reset password</button>
          </form>
        </div>
      </section>
      <ClientFooter />
    </>
  );
}
