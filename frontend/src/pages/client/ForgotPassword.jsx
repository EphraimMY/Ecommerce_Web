import { Input } from "../../components/ui/input/Input";
import ClientHeader from "../../components/common/client-header/ClientHeader";
import BreadCrumb from "../../components/common/bread-crumb/BreadCrumb";
import ClientFooter from "../../components/common/client-footer/ClientFooter";
export default function ForgotPassword() {
  return (
    <>
      <ClientHeader />
      <BreadCrumb page="Forgot Password" />
      <section className="login-section">
        <div className="login-content">
          <form action="">
            <p>
              Please enter the email address associated with your account. We'll
              promptly send you a link to reset your password.
            </p>
            <div className="inputs-div">
              <Input label="Email" type="email" />
            </div>
            <button className="btn">Send reset link</button>
          </form>
        </div>
      </section>
      <ClientFooter />
    </>
  );
}
