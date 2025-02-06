import iconSort from "../../../assets/icons/sort.svg";
import "./style.raw.css";
export default function TrHeadCustomers() {
  return (
    <tr className="table-tr-head">
      <th>
        <img src={iconSort} alt="" />
      </th>
      <th>Name</th>
      <th>Email</th>
      <th>Shipping Address</th>
      <th>Action</th>
    </tr>
  );
}
