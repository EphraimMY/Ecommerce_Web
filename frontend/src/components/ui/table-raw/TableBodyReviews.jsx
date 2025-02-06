export default function TableBodyReviews() {
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
          SB
        </div>
      </td>
      <td>Saliou Baninou</td>
      <td>
        C'est un super produit je l'aime beaucoup et le prix est raisonnable
      </td>
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
