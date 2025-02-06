import tSheert from "../../../assets/images/t-sheert.png";
export default function TableBodyProducts() {
  return (
    <tr className="table-tr-body">
      <td>
        <div className="image">
          <img src={tSheert} alt="" />
        </div>
      </td>
      <td>Raw Black T-Shirt Lineup</td>
      <td>4739923</td>
      <td>$ 100.00</td>
      <td>In stock</td>
      <td>Shirts</td>
      <td>
        <div className="btns-action">
          <button className="btn-open">
            <i className="fa-solid fa-arrow-up-right-from-square"></i>
          </button>
          <button className="btn-delete">
            <i className="fa-solid fa-trash"></i>
          </button>
        </div>
      </td>
    </tr>
  );
}
