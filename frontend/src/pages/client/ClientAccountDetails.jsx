import "../../assets/styles/client.account-details.css";
import { Input } from "../../components/ui/input/Input";
export default function ClientAccountDetails() {
  return (
    <div className="client-account-details">
      <div className="profil-initials">
        <div className="circle">
          <span>JD</span>
        </div>
      </div>
      <div className="form-container">
        <form action="">
          <div className="form-group">
            <Input label="Full Name" />
            <Input label="Email" type={"email"} />
          </div>
          <button className="btn-save">Save Changes</button>
        </form>
      </div>
    </div>
  );
}
