import "../../assets/styles/client.address.css";
import { Input } from "../../components/ui/input/Input";
export default function ClientAddress() {
  return (
    <div className="client-address">
      <form action="" className="form-address">
        <div className="street-address">
          <Input label="Street Address" value={"2436 Naples Avenue"} />
        </div>
        <div className="city">
          <Input label="City" value={"Panama City"} />
        </div>
        <div className="state">
          <Input label="State" value={"FL"} />
        </div>
        <div className="zip-code">
          <Input label="Zip Code" value={"32401"} />
        </div>
        <div className="country">
          <Input label="Country" value={"United States"} />
        </div>
        <div className="btn-save">
          <button>Save Changes</button>
        </div>
      </form>
    </div>
  );
}
