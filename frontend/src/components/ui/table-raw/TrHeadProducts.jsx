import iconSort from "../../../assets/icons/sort.svg";
export default function TrHeadProducts() {
  return (
    <tr className="table-tr-head">
      <th>
        <img src={iconSort} alt="" />
      </th>
      <th>Name</th>
      <th>SKU</th>
      <th>Price</th>
      <th>Stock</th>
      <th>categories</th>
      <th>Action</th>
    </tr>
  );
}
