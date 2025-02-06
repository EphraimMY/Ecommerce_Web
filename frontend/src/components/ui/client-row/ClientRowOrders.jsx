import "./row.css";
import imageProduct from "../../../assets/images/short.png";

export default function ClientRowOrders() {
  return (
    <div className="row-orders">
      <div className="row-image">
        <img src={imageProduct} alt="" />
      </div>
      <div className="row-content">
        <h5>Product title</h5>
        <p className="date-added">Added on: 01 juillet 2023</p>
        <p className="price-product">$70.00</p>
      </div>
      <div className="row-status">Processing</div>
      <button className="btn-add">View item</button>
    </div>
  );
}
