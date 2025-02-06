import { NavLink } from "react-router-dom";
import SuccessPayment from "../../../assets/icons/SuccessPayment";
import "./after-order.css";
import ArrowRight from "../../../assets/icons/ArrowRight";
import FailedOrder from "../../../assets/icons/FailedOrder";
export default function AfterOrderMessage({
  type = "succes",
  title = "",
  message = "",
}) {
  const link = type == "success" ? "/myAccount" : "/cart";
  const btnText = type == "success" ? "Go to my account" : "Reorder";
  return (
    <section className="section-after-payment">
      <div className="after-payment-content">
        <div className="svg-icon">
          {type == "success" && <SuccessPayment />}
          {type == "danger" && <FailedOrder />}
        </div>
        <h3>{title}</h3>
        <p>{message}</p>
        <NavLink to={link} className={"btn"}>
          {btnText}
          <ArrowRight />
        </NavLink>
      </div>
    </section>
  );
}
