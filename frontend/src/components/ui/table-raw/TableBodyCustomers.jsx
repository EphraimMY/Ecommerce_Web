export default function TableBodyCustomers() {
  return (
    <tr className="table-tr-body">
      <td>
        <div
          className="image"
          style={{
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            color: "var(--blue-700)",
          }}
        >
          EH
        </div>
      </td>
      <td>Ester Hovard</td>
      <td>hesterhovard@me.com</td>
      <td>2 rue de la paix</td>
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
