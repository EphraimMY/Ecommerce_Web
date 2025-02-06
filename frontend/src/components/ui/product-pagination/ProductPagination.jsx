import "./product-pagination.css";
export default function ProductPagination() {
  return (
    <div className="product-pagination">
      <button>
        <i className="fa-solid fa-arrow-left"></i>
      </button>
      <button>1</button>
      <button>2</button>
      <button>...</button>
      <button>20</button>
      <button>21</button>
      <button>
        <i className="fa-solid fa-arrow-right"></i>
      </button>
    </div>
  );
}
