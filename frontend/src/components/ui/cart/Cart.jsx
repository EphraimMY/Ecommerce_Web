import CloseIcon from "../../../assets/icons/CloseIcon";
import "./cart.css";
import CartProductItem from "./CartProductItem";
export default function Cart() {
  return (
    <aside className="aside-cart">
      <div className="cart-header">
        <h3>Shipping cart</h3>
        <button>
          <CloseIcon />
        </button>
      </div>
      <div className="cart-content">
        <CartProductItem />
        <CartProductItem />
        <CartProductItem />
      </div>
      <div className="bottom-cart">
        <div className="total-price">
          <span className="title">Total</span>
          <span className="price">$98.00</span>
        </div>
        <button>View Cart</button>
        <a href="#">Checkout</a>
      </div>
    </aside>
  );
}
