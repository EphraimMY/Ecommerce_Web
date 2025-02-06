import productImage from "../../../assets/images/short.png";
import "./product.card.css";
export default function ProductCard() {
  return (
    <div className="product-card">
      <div className="product-card-cover">
        <div className="btn-like">
          <i className="fa-solid fa-heart"></i>
        </div>
        <div className="image">
          <img src={productImage} alt="" />
        </div>
        <button className="btn-add-to-cart">
          Add to cart <i className="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
      <div className="product-card-footer">
        <div className="product-card-title">
          <h4>Product title</h4>
        </div>
        <div className="product-card-price">
          <button className="btn-status">In stock</button>
          <h5>$ 100.00</h5>
        </div>
      </div>
    </div>
  );
}
