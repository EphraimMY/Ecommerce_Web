import iconSort from "../../../assets/icons/sort.svg";
import "./style.raw.css";
export default function TrHeadOrders() {
  return (
    <tr className="table-tr-head">
      <th>
        <img src={iconSort} alt="" />
      </th>
      <th>Order</th>
      <th>Date</th>
      <th>Total</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  );
}
