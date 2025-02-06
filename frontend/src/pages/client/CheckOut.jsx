import "../../assets/styles/client.checkout.css";
import BreadCrumb from "../../components/common/bread-crumb/BreadCrumb";
import ClientFooter from "../../components/common/client-footer/ClientFooter";
import ClientHeader from "../../components/common/client-header/ClientHeader";
import { Input } from "../../components/ui/input/Input";
import image from "../../assets/images/short.png";
import ImageBulle from "../../components/ui/image-bulle/ImageBulle";
import OrderInfo from "../../components/ui/order-info/OrderInfo";

export default function CheckOut() {
  return (
    <>
      <ClientHeader />
      <BreadCrumb page="Checkout" />
      <section className="client-checkout">
        <div className="checkout-content">
          <div className="left-checkout">
            <h4>Shipping Address</h4>
            <div className="check-form-content">
              <form action="">
                <Input label="Street Address" />
                <div className="form-check-group">
                  <Input label="City" />
                  <Input label="State" />
                  <Input label="Zip Code" />
                  <Input label="Country" />
                  <Input label="Email" />
                  <Input label="Full name" />
                </div>
              </form>
            </div>
          </div>
          <div className="right-checkout">
            <h4>Your Order</h4>
            <div className="form-your-order">
              <form action="">
                <div className="top-order">
                  <div className="imgs">
                    <ImageBulle url={image} alt={"produit"} />
                    <ImageBulle url={image} alt={"produit"} />
                    <ImageBulle url={image} alt={"produit"} />
                  </div>
                  <button className="btn-edit-order">Edit Cart</button>
                </div>
                <div className="orders-information">
                  <OrderInfo title={"Subtotal"} price={"$ 75.00"} />
                  <OrderInfo title={"Shipping"} price={"Free"} />
                  <OrderInfo title={"Tax"} price={"$ 3.00"} />
                  <hr />
                  <p className="total-order">
                    <span>Total</span>
                    <div className="price">$ 78.00</div>
                  </p>
                </div>
                <button className="btn-order">Place Order</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <ClientFooter />
    </>
  );
}
