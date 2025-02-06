import iconSort from "../../../assets/icons/sort.svg";
import "./style.raw.css";
export default function TrHeadReviews() {
  return (
    <tr className="table-tr-head">
      <th>
        <img src={iconSort} alt="" />
      </th>
      <th>Name</th>
      <th>Review</th>
      <th>Action</th>
    </tr>
  );
}
