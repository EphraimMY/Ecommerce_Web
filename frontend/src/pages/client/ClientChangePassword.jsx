import "../../assets/styles/client.change-password.css";
import { Input } from "../../components/ui/input/Input";
export default function ClientChangePassword() {
  return (
    <div className="client-change-password">
      <div className="form-content">
        <form action="">
          <div className="form-group">
            <Input label="New Password" type={"password"} />
            <Input label="Confirm Password" type={"password"} />
          </div>
          <button className="btn-save">Change password</button>
        </form>
      </div>
    </div>
  );
}
