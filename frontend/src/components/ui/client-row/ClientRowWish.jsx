import "./row.css";
import imageProduct from "../../../assets/images/short.png";

export default function ClientRowWish() {
  return (
    <div className="row-orders">
      <div className="row-image">
        <img src={imageProduct} alt="" />
      </div>
      <div className="row-content">
        <h5>Product title</h5>
        <p className="date-added">Added on: 01 juillet 2023</p>
        <button className="btn-remove">Remove product</button>
      </div>
      <div className="row-price">
        <h4>$ 100.00</h4>
      </div>
      <button className="btn-add">Add to cart</button>
    </div>
  );
}
