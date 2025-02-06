import BreadCrumb from "../../components/common/bread-crumb/BreadCrumb";
import ClientFooter from "../../components/common/client-footer/ClientFooter";
import ClientHeader from "../../components/common/client-header/ClientHeader";
import OrderInfo from "../../components/ui/order-info/OrderInfo";
import "../../assets/styles/client.cart.css";
import CartProductItem from "../../components/ui/cart-product-item/CartProductItem";
export default function ClientCart() {
  return (
    <>
      <ClientHeader />
      <BreadCrumb page="Cart" />
      <section className="cart-section">
        <div className="cart-content">
          <div className="left-cart">
            <h3>Your cart</h3>
            <hr />
            <div className="cart-list">
              <CartProductItem color="var(--green-300)" />
              <CartProductItem color="var(--blue-300)" />
            </div>
          </div>
          <div className="right-cart">
            <h3>Order Summary</h3>
            <div className="infos-price">
              <OrderInfo title="Subtotal" price="$ 90.00" />
              <OrderInfo title="Shipping" price="Free" />
              <OrderInfo title="Tax" price="$ 3.00" />
            </div>
            <hr />
            <div className="total-price">
              <span>Total</span>
              <span className="price">$ 90.00</span>
            </div>
            <button>Checkout</button>
            <a href="">Continue Shipping</a>
          </div>
        </div>
      </section>
      <ClientFooter />
    </>
  );
}
